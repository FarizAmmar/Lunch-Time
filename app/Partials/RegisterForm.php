<?php

namespace App\Partials;

use App\Models\User;
use Livewire\Component;

class RegisterForm extends Component
{
    public $name;
    public $email;
    public $password;

    public function register_user()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|email:dns|unique:users,email',
            'password' => 'required|min:3|max:255|',
        ]);

        // Save Method Eloquent
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();

        return redirect(route('login'))->with('success', 'Registration success, you can login now');
    }

    public function render()
    {
        return view('partials.user.register-form');
    }
}
