<div>
    <form wire:submit='store'>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                {{-- Text Header --}}
                <div class="mb-3" style="padding-bottom: 20px">
                    <h4 style="text-align: center;">Company Details</h4>
                </div>

                {{-- Company Name Field --}}
                <div class="mb-3">
                    <x-text-input type="text" class="{{ $errors->has('comp_name') ? 'is-invalid' : '' }}"
                        placeholder="Enter your company name" withLabel="true" withIcon="true" wire:model="comp_name">
                        <x-slot:icon>
                            <i class="fi fi-rr-building"></i>
                        </x-slot>
                        <x-slot:label>
                            Company Name
                        </x-slot>
                        <x-slot:message>
                            @error('comp_name')
                                {{ $message }}
                            @enderror
                        </x-slot>
                    </x-text-input>
                </div>

                {{-- Company Email FIeld --}}
                <div class="mb-3">
                    <x-text-input type="email" class="{{ $errors->has('comp_email') ? 'is-invalid' : '' }}"
                        placeholder="Enter your email address" withLabel="true" withIcon="true" wire:model='comp_email'>
                        <x-slot:icon>
                            <i class="fi fi-rr-envelope"></i>
                        </x-slot>
                        <x-slot:label>
                            Company Email Address
                        </x-slot>
                        <x-slot:message>
                            @error('comp_email')
                                {{ $message }}
                            @enderror
                        </x-slot>
                    </x-text-input>
                </div>

                {{-- Company Address --}}
                <div class="mb-3">
                    <x-textarea-input type="text" class="{{ $errors->has('comp_address') ? 'is-invalid' : '' }}"
                        placeholder="Enter your company address" withLabel="true" withIcon="true"
                        wire:model='comp_address'>
                        <x-slot:icon>
                            <i class="fi fi-ss-land-location"></i>
                        </x-slot>
                        <x-slot:label>
                            Company Address
                        </x-slot>
                        <x-slot:message>
                            @error('comp_address')
                                {{ $message }}
                            @enderror
                        </x-slot>
                    </x-textarea-input>
                </div>

                {{-- Company Phone Number --}}
                <div class="mb-3">
                    <x-text-input type="phone" class="{{ $errors->has('comp_phone') ? 'is-invalid' : '' }}"
                        placeholder="(+62) 000-0000-0000" withLabel="true" withIcon="true" wire:model='comp_phone'>
                        <x-slot:icon>
                            <i class="fi fi-rr-phone-call"></i>
                        </x-slot>
                        <x-slot:label>
                            Company Phone Number
                        </x-slot>
                        <x-slot:message>
                            @error('comp_phone')
                                {{ $message }}
                            @enderror
                        </x-slot>
                    </x-text-input>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                {{-- Text Header --}}
                <div class="mb-3" style="padding-bottom: 20px">
                    <h4 style="text-align: center;">Personal Details</h4>
                </div>

                {{-- Company Person Name Field --}}
                <div class="mb-3">
                    <x-text-input type="text" class="{{ $errors->has('personal_name') ? 'is-invalid' : '' }}"
                        placeholder="Enter your username" withLabel="true" withIcon="true" wire:model='personal_name'>
                        <x-slot:icon>
                            <i class="fi fi-rr-user"></i>
                        </x-slot>
                        <x-slot:label>
                            Username
                        </x-slot>
                        <x-slot:message>
                            @error('personal_name')
                                {{ $message }}
                            @enderror
                        </x-slot>
                    </x-text-input>
                </div>

                {{-- Contact Person Email Address Field --}}
                <div class="mb-3">
                    <x-text-input type="email" class="{{ $errors->has('personal_email') ? 'is-invalid' : '' }}"
                        placeholder="Enter your email address" withLabel="true" withIcon="true"
                        wire:model='personal_email'>
                        <x-slot:icon>
                            <i class="fi fi-rr-envelope"></i>
                        </x-slot>
                        <x-slot:label>
                            Email Address
                        </x-slot>
                        <x-slot:message>
                            @error('personal_email')
                                {{ $message }}
                            @enderror
                        </x-slot>
                    </x-text-input>
                </div>

                {{-- Contact Person Address Field --}}
                <div class="mb-3">
                    <x-textarea-input type="text" class="{{ $errors->has('personal_address') ? 'is-invalid' : '' }}"
                        placeholder="Enter your address" withLabel="true" withIcon="true" wire:model='personal_address'>
                        <x-slot:icon>
                            <i class="fi fi-ss-land-location"></i>
                        </x-slot>
                        <x-slot:label>
                            Address
                        </x-slot>
                        <x-slot:message>
                            @error('personal_address')
                                {{ $message }}
                            @enderror
                        </x-slot>
                    </x-textarea-input>
                </div>

                {{-- Contact Person Phone No. Field --}}
                <div class="mb-3">
                    <x-text-input type="phone" class="{{ $errors->has('personal_phone') ? 'is-invalid' : '' }}"
                        placeholder="(+62) 000-0000-0000" withLabel="true" withIcon="true" wire:model='personal_phone'>
                        <x-slot:icon>
                            <i class="fi fi-rr-phone-call"></i>
                        </x-slot>
                        <x-slot:label>
                            Phone Number
                        </x-slot>
                        <x-slot:message>
                            @error('personal_phone')
                                {{ $message }}
                            @enderror
                        </x-slot>
                    </x-text-input>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-12">
                <x-text-input type="password" class="{{ $errors->has('personal_password') ? 'is-invalid' : '' }}"
                    placeholder="Enter your password" withLabel="true" withIcon="true" wire:model='personal_password'>
                    <x-slot:icon>
                        <i class="fi fi-rr-lock"></i>
                    </x-slot>
                    <x-slot:label>
                        Create Password
                    </x-slot>
                    <x-slot:message>
                        @error('personal_password')
                            {{ $message }}
                        @enderror
                    </x-slot>
                </x-text-input>
            </div>

            <div class="col-12">
                <x-text-input type="password" class="{{ $errors->has('confirm_password') ? 'is-invalid' : '' }}"
                    placeholder="Confirm your password" withLabel="true" withIcon="true" wire:model='confirm_password'>
                    <x-slot:icon>
                        <i class="fi fi-rr-lock"></i>
                    </x-slot>
                    <x-slot:label>
                        Confirm password
                    </x-slot>
                    <x-slot:message>
                        @error('confirm_password')
                            {{ $message }}
                        @enderror
                    </x-slot>
                </x-text-input>
            </div>

            <div class="col-12">
                {{-- Button Sign Up --}}
                <div class="d-grid mt-3 gap-2">
                    <x-button type="submit" class="btn-sm btn-primary w-100">
                        <div wire:loading.remove>
                            Sign Up
                        </div>
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="spinner-grow spinner-grow-sm text-light" role="status" wire:loading>
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <span wire:loading>Loading...</span>
                        </div>
                    </x-button>
                </div>
            </div>
        </div>
    </form>
</div>
