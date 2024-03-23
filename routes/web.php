<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthenticatedController;

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

Route::get('/', [AuthenticatedController::class, 'dashboard_view'])->middleware('auth')->name('dashboard');

require __DIR__ . '/auth.php';
