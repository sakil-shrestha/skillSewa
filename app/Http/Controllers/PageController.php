<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\BaseController;
use App\Mail\BookingNotification;
use App\Mail\ProfessionalRequest;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\JobInfo;
use App\Models\Professional;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends BaseController
{
    public function home()
    {
        return view('frontend.home');
    }

    public function professional_request(Request $request)
    {
        $request->validate([
            'name' => "max:20|required",
            'email' => "max:50|required|email",
            'contact' => "max:10|required",
        ]);

        $professional = new Professional();
        $professional->name = $request->name;
        $professional->email = $request->email;
        $professional->contact = $request->contact;
        $professional->address=$request->address;
        $professional->password = Hash::make("$3452lf");
        $professional->save();


        // $job=new JobInfo();
        // $job->job_title=$request->job_title;
        // $job->hourly_rate=$request->hourly_rate;
        // $job->description=$request->description;
        // $job->save();

        // $admins = Admin::all();
        $emails = Admin::pluck('email')->toArray();
        Mail::to($emails)->send(new ProfessionalRequest($professional));

        return redirect()->back();
    }
    public function book($id)
    {
        $book = new Booking();
        $rate = JobInfo::where('professional_id', $id)->value('hourly_rate');
        $book->user_id = Auth::user()->id;
        $book->professional_id = $id;
        $book->start_time = Carbon::parse(now());
        $book->end_time = $book->start_time->copy()->addHours(48);
        $book->status = 'confirmed';
        $book->save();

        // $email = Professional::pluck('email')->toArray();
        $email = $book->professional->email;
        Mail::to($email)->send(new BookingNotification($book));

        return view('payment.page', compact('book', 'rate'));
    }

   public function search(Request $request)
{


    $job=JobInfo::where('job_title',"like","$request->job_title%")->get();

    if($job)
    {

        return view('frontend.search',compact('job'));
    }

}

    // $professional=Professional::where('address',"like","$request->address%")->get();

  // $professionals = Professional::query()
    //     ->when($request->search, function ($query, $search) {
    //         $query->where('name', 'like', "%{$search}%");
    //             //   ->orWhere('skills', 'like', "%{$search}%");
    //     })
    //     ->when($request->city, function ($query, $city) {
    //         $query->where('address', $city);
    //     })
    //     ->when($request->min_rate, function ($query, $min) {
    //         $query->where('hourly_rate', '>=', $min);
    //     })
    //     ->when($request->max_rate, function ($query, $max) {
    //         $query->where('hourly_rate', '<=', $max);
    //     })
    //     // ->orderByDesc('rating')
    //     ->paginate(10);

    // return view('professionals.index', compact('professionals'));

public function createProfile()
{
    return view('frontend.CreateProfile');
}

public function aboutsection()
{
    return view('frontend.aboutsection');
}
public function contact()
{
    return view('frontend.contact');
}


// public function about(){
// return view('frontend.about');
// }

}
