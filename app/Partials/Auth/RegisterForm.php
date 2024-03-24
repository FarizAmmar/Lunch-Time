<?php

namespace App\Partials\Auth;

use App\Models\Company;
use Illuminate\Support\Facades\Log;
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

    protected $rules = [
        'comp_name' => ['required', 'unique:companies,company_name', 'min:5', 'max:50'],
        'comp_email' => ['required', 'email', 'unique:companies,company_email', 'min:3', 'max:50'],
        'comp_address' => ['required', 'min:5', 'max:255'],
        'comp_phone' => ['required', 'unique:companies,company_phone_number'],
        'personal_name' => ['required', 'min:3', 'unique:users,name', 'max:30'],
        'personal_email' => ['required', 'email', 'unique:users,email', 'min:3', 'max:50'],
        'personal_address' => ['required', 'min:5', 'max:255'],
        'personal_phone' => ['required', 'unique:users,phone_number'],
        'personal_password' => ['required', 'min:6'],
        'confirm_password' => ['required', 'same:personal_password'],
    ];

    // Lebih baik sih pakai message validation tapi remark dlu lanjut ke case lain
    // protected $messages = [
    //     'comp_name.required' => 'Company name is required.',
    //     'comp_name.unique' => 'The company name already in use.',
    //     'comp_name.min' => 'The company name must be at least 5 characters long.',
    //     'comp_name.max' => 'The company name may not be greater than 50 characters long.',
    //     'comp_email.required' => 'Company email is required.',
    //     'comp_email.email' => 'Company email must be a valid email format.',
    //     'comp_email.unique' => 'The company email already in use.',
    //     'comp_email.min' => 'Company email must be at least 3 characters long.',
    //     'comp_email.max' => 'Company email may not be greater than 50 characters long.',
    //     'comp_address.required' => 'Company address is required.',
    //     'comp_address.min' => 'Company address must be at least 5 characters long.',
    //     'comp_address.max' => 'Company address may not be greater than 255 characters long.',
    //     'comp_phone.required' => 'Company phone number is required.',
    //     'comp_phone.numeric' => 'Company phone number must be numeric.',
    //     'comp_phone.unique' => 'The company phone number already in use.',

    //     'personal_name.required' => 'Personal name is required.',
    //     'personal_name.min' => 'Personal name must be at least 3 characters long.',
    //     'personal_name.max' => 'Personal name may not be greater than 30 characters long.',
    //     'personal_name.unique' => 'This username is already in use.',
    //     'personal_email.required' => 'Personal email is required.',
    //     'personal_email.email' => 'Personal email must be a valid email format.',
    //     'personal_email.min' => 'Personal email must be at least 3 characters long.',
    //     'personal_email.max' => 'Personal email may not be greater than 50 characters long.',
    //     'personal_email.unique' => 'This email is already in use.',
    //     'personal_address.required' => 'Personal address is required.',
    //     'personal_address.min' => 'Personal address must be at least 5 characters long.',
    //     'personal_address.max' => 'Personal address may not be greater than 255 characters long.',
    //     'personal_phone.required' => 'Personal phone number is required.',
    //     'personal_phone.numeric' => 'Personal phone number must be numeric.',
    //     'personal_phone.unique' => 'This phone number is already in use.',
    //     'personal_password.required' => 'Password is required.',
    //     'personal_password.min' => 'Password must be at least 6 characters long.',
    //     'confirm_password.required' => 'Confirm password is required.',
    //     'confirm_password.same' => 'Confirm password must match the password.',
    // ];

    public function store()
    {
        // Validation Execute
        $this->validate();

        $company = new Company();
        $company->UUID = $company->createUUID();
        $company->account_no = $company->createAcc($this->comp_name);
        $company->company_name = $this->comp_name;
        $company->company_email = $this->comp_email;
        $company->company_addres = $this->comp_address;
        $company->company_phone_number = $this->comp_phone;
        $company->company_type = 1;

        $response = $company->saveRecord($company->toArray());

        if ($response['success']) {
            return response()->json(['message' => $response['message']], 200);
        } else {
            Log::error($response['message']);
            return response()->json(['message' => 'Failed to save data'], 500);
        }
    }

    public function render()
    {
        return view('partials.auth.register-form');
    }
}
