<?php

namespace App\Components;

use Livewire\Component;

class RegistrationForm extends Component
{
    // Initialize
    public $fullname;
    public $phone_number;
    public $email;
    public $address;
    public $company_name;
    public $company_type;
    public $company_phone_number;
    public $company_email;
    public $password;
    public $confirm_password;
    public $terms_conditions;

    // Data
    public $type = [
        [
            'value' => 'restaurant',
            'name' => 'Restaurant'
        ],
        [
            'value' => 'coffee_shop',
            'name' => 'Coffee Shop'
        ],
        [
            'value' => 'catering',
            'name' => 'Catering'
        ],
    ];

    public function save()
    {

        $this->validationRegister();

        // $fullname = $this->fullname;
        // $phone_number = $this->phone_number;
        // $email = $this->email;
        // $address = $this->address;
        // $company_name = $this->company_name;
        // $company_type = $this->company_type;
        // $company_phone_number = $this->company_phone_number;
        // $company_email = $this->company_email;
        // $password = $this->password;
        // $confirm_password = $this->confirm_password;
        // $terms_conditions = $this->terms_conditions;

        // // Menampilkan nilai dari properti-properti publik menggunakan dd()
        // dd([
        //     'fullname' => $fullname,
        //     'phone_number' => $phone_number,
        //     'email' => $email,
        //     'address' => $address,
        //     'company_name' => $company_name,
        //     'company_type' => $company_type,
        //     'company_phone_number' => $company_phone_number,
        //     'company_email' => $company_email,
        //     'password' => $password,
        //     'confirm_password' => $confirm_password,
        //     'terms_conditions' => $terms_conditions,
        // ]);
    }

    public function validationRegister()
    {
        $this->validate([
            'fullname' => 'required|string|min:5|max:30',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email|max:50',
            'address' => 'required|string|max:255',
            'company_name' => 'required|unique:companies,company_name|max:30',
            'company_type' => 'required|string',
            'company_phone_number' => 'required|string',
            'company_email' => 'required|email|unique:companies,company_email|max:50',
            'password' => 'required|string|min:8|max:50|',
            'confirm_password' => 'required|string|same:password',
            'terms_conditions' => 'required|accepted',
        ], [
            'fullname.required' => 'The fullname field is required.',
            'fullname.string' => 'The fullname must be a string.',
            'fullname.min' => 'The fullname must be at least 5 characters.',
            'fullname.max' => 'The fullname may not be greater than 30 characters.',

            'phone_number.required' => 'The phone number field is required.',
            'phone_number.string' => 'The phone number must be a string.',
            'phone_number.max' => 'The phone number may not be greater than 20 characters.',

            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'email.max' => 'The email may not be greater than 50 characters.',

            'address.required' => 'The address field is required.',
            'address.string' => 'The address must be a string.',
            'address.max' => 'The address may not be greater than 255 characters.',

            'company_name.required' => 'The company name field is required.',
            'company_name.unique' => 'The company name has already been taken.',
            'company_name.max' => 'The company name may not be greater than 30 characters.',

            'company_type.required' => 'The company type field is required.',

            'company_phone_number.required' => 'The company phone number field is required.',
            'company_phone_number.string' => 'The company phone number must be a string.',

            'company_email.required' => 'The company email field is required.',
            'company_email.email' => 'The company email must be a valid email address.',
            'company_email.unique' => 'The company email has already been taken.',

            'password.required' => 'The password field is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.max' => 'The password may not be greater than 50 characters.',

            'confirm_password.required' => 'The confirm password field is required.',
            'confirm_password.string' => 'The confirm password must be a string.',
            'confirm_password.same' => 'The confirm password and password must match.',

            'terms_conditions.required' => 'You must accept the terms and conditions.',
            'terms_conditions.accepted' => 'You must accept the terms and conditions.',
        ]);
    }


    public function render()
    {
        return view('pages.auth.forms.registration-form', [
            'type' => $this->type,
        ]);
    }
}
