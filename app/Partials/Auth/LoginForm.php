<?php

namespace App\Partials\Auth;

use Livewire\Component;

class LoginForm extends Component
{
    public function login()
    {
        return view('pages.admin.dashboard', [
                "title" => "Dashboard"
            ]); 
    }

    public function render()
    {
        return view('partials.auth.login-form');
    }
}
