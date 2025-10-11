<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfessionalCardController;
use App\Models\Professional;
use Illuminate\Support\Facades\Route;

// Route::get('/professional-detail/{id}', function ($id) {
//     $professional = Professional::find($id);
//     return view('professionalDetail', compact('professional'));
// })->name('professional.detail');

Route::get('/', [PageController::class, 'home'])->name('frontend.home');
Route::post('/professional-request', [PageController::class, 'professional_request'])->name('frontend.professionalRequest');
Route::get('/professional-detail/{id}', [ProfessionalCardController::class, 'card_detail'])->name('professional.detail');
Route::get('/book/{id}', [PageController::class, 'book'])->name('book');

Route::get('/payment/{id}', [PaymentController::class, 'initiate'])->name('payment.initiate');
Route::get('/khalti', [PaymentController::class, 'khalti']);
