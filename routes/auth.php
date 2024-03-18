<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthenticatedController;

//user
Route::get('/login_user', [AuthenticatedController::class, 'login_user_view'])->name('login_user');
Route::get('/register_user', [AuthenticatedController::class, 'register_user_view'])->name('register_user');

//company
Route::get('/login_company', [AuthenticatedController::class, 'login_company_view'])->name('login_company');
Route::get('/register_company', [AuthenticatedController::class, 'register_company_view'])->name('register_company');

Route::get('/dashboard', [AuthenticatedController::class, 'dashboard'])->name('dashboard');
