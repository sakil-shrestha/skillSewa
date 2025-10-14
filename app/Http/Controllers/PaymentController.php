<?php

namespace App\Http\Controllers;

use App\Mail\BookingNotification;
use App\Models\Booking;
use App\Models\JobInfo;
use App\Models\Payment;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    // public function show(Booking $booking)
    // {
    //     return view('payment.page', compact('booking'));
    // }

    public function initiate($id)
    {
        $rate = JobInfo::where('professional_id', $id)->value('hourly_rate');
        $bookingId = Booking::where('professional_id', $id)->value('id');
        $book = Booking::where('user_id', Auth::user()->id)->first();

        $response = Http::withHeaders([
            // "Authorization" => "key " . env('KHALTI_SECRET_KEY')
            "Authorization" => "key " . env('KHALTI_SECRET_KEY')
        ])->post(env('KHALTI_BASE_URL') . '/epayment/initiate/', [
            "return_url" => env('KHALTI_RETURN_URL'),
            "website_url" => env('APP_URL'),
            "amount" => $rate * 100,
            "purchase_order_id" => Auth::user()->id,
            "purchase_order_name" => Auth::user()->name,
            "customer_info" => [
                "name" => Auth::user()->name,
                "email" => Auth::user()->email ?? "example@gmail.com",

            ],

        ]);


        if ($response->successful()) {
            $data = $response->json();
            $payment = Payment::create([
                'user_id' => Auth::user()->id,  // The user who paid
                'professional_id' => $id ?? null, // The service provider
                'booking_id' => $bookingId, // Link to the booking
                'transaction_id' => $data['pidx'] ?? null, // Khalti's unique transaction ID
                'amount' => $rate * 100, // Amount in paisa
                'status' => 'success', // Mark as successful
            ]);
            // $email = Professional::pluck('email')->toArray();
            $email = $book->professional->email;
            Mail::to($email)->send(new BookingNotification($book));
        }



        return redirect($response['payment_url']);
    }

    public function khalti()
    {
        return redirect('/user/payments');
    }
}
