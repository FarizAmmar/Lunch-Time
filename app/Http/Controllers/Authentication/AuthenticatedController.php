<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthenticatedController extends Controller
{
    // Registration Index
    public function registerView()
    {
        $title = 'Register';
        return view('pages.auth.register', compact('title'));
    }

    // Login Index
    public function loginView()
    {
        $title = 'Login';
        return view('pages.auth.login', compact('title'));
    }
}
