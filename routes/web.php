<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('frontend.home');
Route::post('/professional-request', [PageController::class, 'professional_request'])->name('frontend.professionalRequest');
