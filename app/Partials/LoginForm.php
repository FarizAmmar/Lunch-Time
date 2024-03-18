<?php

namespace App\Partials;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email;
    public $password;

    public function login_user(Request $request)
    {        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials)) {
        //if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success','Log In Successfully');
        }
 
        return back()->with('LoginError','Login Failed!');
    }
    
    public function render()
    {
        return view('partials.user.login-form');
    }
}
