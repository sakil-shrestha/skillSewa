<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{

    public function __construct()
    {
        $professionals = Professional::all();
        View::share([
            "professionals" => $professionals,
        ]);
    }
}
