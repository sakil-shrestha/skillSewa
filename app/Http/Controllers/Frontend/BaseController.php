<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{

    public function __construct()
    {
        $company=Company::find(1);

        $professionals = Professional::all();
        View::share([
            "professionals" => $professionals,
            "company"=>$company,
            // "logo"=>$logo,
        ]);
    }
}
