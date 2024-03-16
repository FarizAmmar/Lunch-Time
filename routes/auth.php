<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthenticatedController;


Route::get('/login', [AuthenticatedController::class, 'loginView'])->name('login');

Route::get('/register', [AuthenticatedController::class, 'registerView'])->name('register');

//Route::get('/dashboard', [AuthenticatedController::class, 'dashboardView'])->name('dashboard');
