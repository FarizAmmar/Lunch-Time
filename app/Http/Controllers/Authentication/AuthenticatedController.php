<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;

class AuthenticatedController extends Controller
{
    // User Registration Index
    public function register_user_view()
    {
        $title = 'Register';
        return view('pages.auth.user.register', compact('title'));
    }

    // User Login Index
    public function login_user_view()
    {
        $title = 'Login';
        return view('pages.auth.user.login', compact('title'));
    }

    // Company Registration Index
    public function register_company_view()
    {
        $title = 'Register';
        return view('pages.auth.company.company_register', compact('title'));
    }

    // Company Login Index
    public function login_company_view()
    {
        $title = 'Login';
        return view('pages.auth.company.company_login', compact('title'));
    }

     // dashboard Index
     public function dashboard()
     {
        $title = 'Dashboard';
        return view('pages.admin.dashboard', compact('title'));
     }
}
