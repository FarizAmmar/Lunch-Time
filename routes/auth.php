<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthenticatedController;

//Auhtentication
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedController::class, 'login_view'])->name('login');
    Route::get('/register', [AuthenticatedController::class, 'register_view'])->name('register');
});
