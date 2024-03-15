<?php

namespace App\Partials;

use App\Models\User;
use Livewire\Component;

class RegisterForm extends Component
{

    public $name;
    public $email;
    public $password;

    public function register()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:3',
        ]);

        // Save Method Eloquent
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

        return redirect(route('login'));
    }

    public function render()
    {
        return view('partials.register-form');
    }
}
