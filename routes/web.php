<?php

use App\Http\Controllers\PageController;
use App\Models\Professional;
use Illuminate\Support\Facades\Route;

Route::get('/professional-detail/{id}', function ($id) {
    $professional = Professional::find($id);
    return view('professionalDetail', compact('professional'));
})->name('professional.detail');

Route::get('/', [PageController::class, 'home'])->name('frontend.home');
Route::post('/professional-request', [PageController::class, 'professional_request'])->name('frontend.professionalRequest');
