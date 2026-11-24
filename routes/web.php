<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::post('/daftar', [LandingPageController::class, 'storeRegistration'])->name('registrations.store');
