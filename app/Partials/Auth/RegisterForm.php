<?php

namespace App\Partials\Auth;

use Livewire\Component;

class RegisterForm extends Component
{
    // Company
    public $comp_name;
    public $comp_email;
    public $comp_address;
    public $comp_phone;

    // Personal
    public $personal_name;
    public $personal_email;
    public $personal_address;
    public $personal_phone;
    public $personal_password;
    public $confirm_password;


    // Validation Form
    public function rules()
    {
        return [
            'comp_name' => 'required|unique:companies|min:5|max:50',
            'comp_email' => 'required|email|min:3|max:50',
            'comp_address' => 'required|min:5|max:255',
            'comp_phone' => 'required|numeric',
            'personal_name' => 'required|min:3|max:30',
            'personal_email' => 'required|email|min:3|max:50',
            'personal_address' => 'required|min:5|max:255',
            'personal_phone' => 'required|numeric',
            'personal_password' => 'required|min:6',
            'confirm_password' => 'required|same:personal_password',
        ];
    }

    // Messages
    public function messages()
    {
        return [
            'comp_name.required' => 'Company name is required.',
            'comp_name.unique' => 'The company name already exists in the database.',
            'comp_name.min' => 'The company name must be at least 5 characters long.',
            'comp_name.max' => 'The company name may not be greater than 50 characters long.',
            'comp_email.required' => 'Company email is required.',
            'comp_email.email' => 'Company email must be a valid email format.',
            'comp_email.min' => 'Company email must be at least 3 characters long.',
            'comp_email.max' => 'Company email may not be greater than 50 characters long.',
            'comp_address.required' => 'Company address is required.',
            'comp_address.min' => 'Company address must be at least 5 characters long.',
            'comp_address.max' => 'Company address may not be greater than 255 characters long.',
            'comp_phone.required' => 'Company phone number is required.',
            'comp_phone.numeric' => 'Company phone number must be numeric.',

            'personal_name.required' => 'Personal name is required.',
            'personal_name.min' => 'Personal name must be at least 3 characters long.',
            'personal_name.max' => 'Personal name may not be greater than 30 characters long.',
            'personal_email.required' => 'Personal email is required.',
            'personal_email.email' => 'Personal email must be a valid email format.',
            'personal_email.min' => 'Personal email must be at least 3 characters long.',
            'personal_email.max' => 'Personal email may not be greater than 50 characters long.',
            'personal_address.required' => 'Personal address is required.',
            'personal_address.min' => 'Personal address must be at least 5 characters long.',
            'personal_address.max' => 'Personal address may not be greater than 255 characters long.',
            'personal_phone.required' => 'Personal phone number is required.',
            'personal_phone.numeric' => 'Personal phone number must be numeric.',
            'personal_password.required' => 'Password is required.',
            'personal_password.min' => 'Password must be at least 6 characters long.',
            'confirm_password.required' => 'Confirm password is required.',
            'confirm_password.same' => 'Confirm password must match the password.',
        ];
    }

    public function store()
    {
        $this->validate();
    }

    public function render()
    {
        return view('partials.auth.register-form');
    }
}
