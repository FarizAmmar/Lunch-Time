<?php

namespace App\Partials;

use Livewire\Component;

class RegisterForm extends Component
{

    public $name;
    public $email;
    public $password;

    public function register()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:3',
        ]);
    }

    public function render()
    {
        return view('partials.register-form');
    }
}
