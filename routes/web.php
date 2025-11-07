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
    // Route::get('/user/login', [HomeController::class, 'index'])->name('user.login');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/book/{id}', [PageController::class, 'book'])->name('book');
    Route::get('/professional-detail/{id}', [ProfessionalCardController::class, 'card_detail'])->name('professional.detail');

});


Route::fallback(function()
{
    return view('404');
});


Route::get('createProfile',[PageController::class,'createProfile'])->name('CreateProfile');
Route::get('/about',[PageController::class,'about'])->name('frontend.about');
Route::get('/aboutsection',[PageController::class,'aboutsection'])->name('aboutsection');
Route::get('/contact',[PageController::class,'contact'])->name('frontend.contact');

// Route::get('/search',[PageController::class,'search'])->name('professionals.search');
