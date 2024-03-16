<?php

namespace App\Partials;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email;
    public $password;

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success','Log In Successfully');
        }
 
        return back()->with('LoginError','Login Failed!');
    }
    
    public function render()
    {
        return view('partials.login-form');
    }
}
