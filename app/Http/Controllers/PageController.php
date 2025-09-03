<?php

namespace App\Http\Controllers;

use App\Mail\ProfessionalRequest;
use App\Models\Admin;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
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
        $professional->password = Hash::make("$3452lf");
        $professional->save();

        // $admins = Admin::all();
        $emails = Admin::pluck('email')->toArray();
        Mail::to($emails)->send(new ProfessionalRequest($professional));

        return redirect()->back();
    }
}
