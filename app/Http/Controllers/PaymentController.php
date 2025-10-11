<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\JobInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    // public function show(Booking $booking)
    // {
    //     return view('payment.page', compact('booking'));
    // }

    public function initiate($id)
    {
        $rate = JobInfo::where('professional_id', $id)->value('hourly_rate');

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
        return redirect($response['payment_url']);
    }

    public function khalti()
    {
        return "payment";
    }
}
