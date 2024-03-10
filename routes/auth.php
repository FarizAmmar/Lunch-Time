<?php

use App\Http\Controllers\Authentication\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Register View
    Route::get('/', [AuthenticationController::class, 'registration'])->name('auth.register');
});
