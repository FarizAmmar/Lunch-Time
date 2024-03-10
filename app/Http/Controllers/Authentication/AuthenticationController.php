<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthenticationController extends Controller
{
    // Registration View
    public function registration()
    {
        $title = 'Registration';

        return view('pages.auth.register', compact('title'));
    }
}
