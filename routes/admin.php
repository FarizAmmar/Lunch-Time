<?php

use Illuminate\Support\Facades\Route;


// Dashboard
Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('dashboard');
