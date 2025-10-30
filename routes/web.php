<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfessionalCardController;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [PageController::class, 'home'])->name('frontend.home');
Route::post('/professional-request', [PageController::class, 'professional_request'])->name('frontend.professionalRequest');



//payment route
Route::get('/payment/{id}', [PaymentController::class, 'initiate'])->name('payment.initiate');
Route::get('/khalti', [PaymentController::class, 'khalti']);


// Route::middleware('auth')->group(function () {});

Route::group(['prefix' => '/home', 'middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/professional-detail/{id}', [ProfessionalCardController::class, 'card_detail'])->name('professional.detail');
    Route::get('/book/{id}', [PageController::class, 'book'])->name('book');
});
