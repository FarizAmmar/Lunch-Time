<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Admin
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    include('admin.php');
});

// Employee
Route::prefix('employee')->middleware('auth')->name('employee.')->group(function () {
    include('employee.php');
});


require __DIR__ . ('/auth.php');
