<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;

class AuthenticatedController extends Controller
{
    // Company Registration Index
    public function register_view()
    {
        $title = 'Register';
        return view('pages.auth.register', compact('title'));
    }

    // Company Login Index
    public function login_view()
    {
        $title = 'Login';
        return view('pages.auth.login', compact('title'));
    }

    // dashboard Index
    public function dashboard_view()
    {
        $title = 'Dashboard';
        return view('pages.admin.dashboard', compact('title'));
    }
}
