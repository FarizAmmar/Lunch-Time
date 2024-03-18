<div>
    <form wire:submit='register_company'>
        <div class="row">
            {{-- Card Company Details --}}
            <div class="column">
                <div class="card-body">
                    <div class="m-sm-8">

                        {{-- Text Header --}}
                        <div class="mb-3" style="padding-bottom: 20px">
                            <h4 style="text-align: center;">Company Details</h4>
                        </div>

                        {{-- Company Name Field --}}
                        <div class="mb-3">
                            <x-text-input type="text" class="{{ $errors->has('comp_name') ? 'is-invalid' : '' }}"
                                placeholder="Enter your email address" withLabel="true" withIcon="true" wire:model='comp_name'>
                                <x-slot:icon>
                                    <i class="fi fi-rr-user"></i>
                                </x-slot>
                                <x-slot:label>
                                    Company Email Name
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
                            <x-text-input type="text" class="{{ $errors->has('comp_address') ? 'is-invalid' : '' }}"
                                placeholder="Enter your Company address" withLabel="true" withIcon="true" wire:model='comp_address'>
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
                            </x-text-input>
                        </div>

                        {{-- Company Phone Number --}}
                        <div class="mb-3">
                            <x-text-input type="text" class="{{ $errors->has('comp_telp') ? 'is-invalid' : '' }}"
                                placeholder="(+62) 000-0000-0000" withLabel="true" withIcon="true" wire:model='comp_telp' maxlength="12">
                                <x-slot:icon>
                                    <i class="fi fi-rr-phone-call"></i>
                                </x-slot>
                                <x-slot:label>
                                    Company Phone Number
                                </x-slot>
                                <x-slot:message>
                                    @error('comp_telp')
                                        {{ $message }}
                                    @enderror
                                </x-slot>
                            </x-text-input>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Card Company Details --}}

            {{-- Card Contact Person Details --}}
            <div class="column">            
                <div class="card-body">

                    {{-- Text Header --}}
                    <div class="mb-3">
                        <h5 style="text-align: center;">Contact Person Details</h5>
                    </div>

                    {{-- Company Person Name Field --}}
                    <div class="mb-3">
                        <x-text-input type="text" class="{{ $errors->has('comp_cp_name') ? 'is-invalid' : '' }}"
                            placeholder="Enter your email address" withLabel="true" withIcon="true" wire:model='comp_cp_name'>
                            <x-slot:icon>
                                <i class="fi fi-rr-user"></i>
                            </x-slot>
                            <x-slot:label>
                                Contact Person Name
                            </x-slot>
                            <x-slot:message>
                                @error('comp_cp_name')
                                    {{ $message }}
                                @enderror
                            </x-slot>
                        </x-text-input>
                    </div>
                    
                    {{-- Contact Person Email Address Field --}}
                    <div class="mb-3">
                        <x-text-input type="email" class="{{ $errors->has('comp_cp_email') ? 'is-invalid' : '' }}"
                            placeholder="Enter your email address" withLabel="true" withIcon="true" wire:model='comp_cp_email'>
                            <x-slot:icon>
                                <i class="fi fi-rr-envelope"></i>
                            </x-slot>
                            <x-slot:label>
                                Contact Person Email Address
                            </x-slot>
                            <x-slot:message>
                                @error('comp_cp_email')
                                    {{ $message }}
                                @enderror
                            </x-slot>
                        </x-text-input>
                    </div>
                    
                    {{-- Contact Person Address Field --}}
                    <div class="mb-3">
                        <x-text-input type="text" class="{{ $errors->has('comp_cp_address') ? 'is-invalid' : '' }}"
                            placeholder="Enter your email address" withLabel="true" withIcon="true" wire:model='comp_cp_address'>
                            <x-slot:icon>
                                <i class="fi fi-ss-land-location"></i>
                            </x-slot>
                            <x-slot:label>
                                Contact Person Address
                            </x-slot>
                            <x-slot:message>
                                @error('comp_cp_address')
                                    {{ $message }}
                                @enderror
                            </x-slot>
                        </x-text-input>
                    </div>

                    {{-- Contact Person Phone No. Field --}}
                    <div class="mb-3">
                        <x-text-input type="text" class="{{ $errors->has('comp_cp_telp') ? 'is-invalid' : '' }}"
                            placeholder="(+62) 000-0000-0000" withLabel="true" withIcon="true" wire:model='comp_cp_telp'>
                            <x-slot:icon>
                                <i class="fi fi-rr-phone-call"></i>
                            </x-slot>
                            <x-slot:label>
                                Contact Person Phone Number
                            </x-slot>
                            <x-slot:message>
                                @error('comp_cp_telp')
                                    {{ $message }}
                                @enderror
                            </x-slot>
                        </x-text-input>
                    </div>
                </div>
            </div>
            {{-- End Card Contact Person Details --}}

            {{-- Card Account Details Details --}}
            <div class="column">            
                <div class="card-body">

                    {{-- Text Header --}}
                    <div class="mb-3">
                        <h5 style="text-align: center;">Company Account Details</h5>
                    </div>

                    {{-- Account ID Field --}}
                    <div class="mb-3">
                        <x-text-input type="text" class="{{ $errors->has('Acct_ID') ? 'is-invalid' : '' }}"
                            placeholder="Enter your email address" withLabel="true" withIcon="true" wire:model='Acct_ID'>
                            <x-slot:icon>
                                <i class="fi fi-rr-user"></i>
                            </x-slot>
                            <x-slot:label>
                                Account ID
                            </x-slot>
                            <x-slot:message>
                                @error('Acct_ID')
                                    {{ $message }}
                                @enderror
                            </x-slot>
                        </x-text-input>
                    </div>

                    {{-- Account PW Field --}}
                    <div class="mb-3">
                        <x-text-input type="password" class="{{ $errors->has('Acct_password') ? 'is-invalid' : '' }}"
                            placeholder="Enter your password" withLabel="true" withIcon="true" wire:model='Acct_password'>
                            <x-slot:icon>
                                <i class="fi fi-rr-key"></i>
                            </x-slot>
                            <x-slot:label>
                                Password
                            </x-slot>
                            <x-slot:message>
                                @error('Acct_password')
                                    {{ $message }}
                                @enderror
                            </x-slot>
                        </x-text-input>
                    </div>
                    @error('Acct_password')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>    
            </div>
            {{-- End Card Account Details --}}
            
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
    </form>
</div>
