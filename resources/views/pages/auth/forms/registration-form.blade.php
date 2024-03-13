<div>
    <form class="mb-3" method="POST" wire:submit='save'>
        @csrf
        @method('POST')
        <div class="row g-2 mb-3">
            <div class="col-12 col-lg-6">
                <div class="row g-2">
                    <div class="col-6">
                        <x-text-input type="text" label="Full Name" labelId="fullname" :withIcon="true"
                            placeholder="Enter your full name" name="fullname" tabindex="1" wire:model='fullname'
                            :isValid="$errors->has('fullname') ? false : true">
                            <x-slot:icon>
                                <i class='bx bx-user'></i>
                            </x-slot>
                        </x-text-input>
                    </div>

                    <div class="col-6">
                        <x-text-input type="phone" label="Phone Number" labelId="phone_number" :withIcon="true"
                            placeholder="+62 812 1243 5150" name="phone_number" tabindex="2" wire:model='phone_number'
                            :isValid="$errors->has('phone_number') ? false : true">
                            <x-slot:icon>
                                <i class='bx bx-phone'></i>
                            </x-slot>
                        </x-text-input>
                    </div>

                    <div class="col-12">
                        <x-text-input type="email" label="Email Address" labelId="email" :withIcon="true"
                            placeholder="Enter your email address" name="email" tabindex="3" wire:model='email'
                            :isValid="$errors->has('email') ? false : true">
                            <x-slot:icon>
                                <i class='bx bx-envelope'></i>
                            </x-slot>
                        </x-text-input>
                    </div>

                    <div class="col-12">
                        <x-textarea-input label="Your Address" labelId="address" :withIcon="true"
                            placeholder="Enter full address" name="address" tabindex="4" wire:model='address'
                            :isValid="$errors->has('email') ? false : true">
                            <x-slot:icon>
                                <i class='bx bx-map'></i>
                            </x-slot>
                        </x-textarea-input>
                    </div>
                </div>
            </div>

            {{-- Company Section --}}
            <div class="col-12 col-lg-6">
                <div class="row g-2">
                    <div class="col-12">
                        <x-text-input type="text" label="Business Name" labelId="company_name" :withIcon="true"
                            placeholder="Enter yout business name" name="company_name" tabindex="5"
                            wire:model='company_name' :isValid="$errors->has('company_name') ? false : true">
                            <x-slot:icon>
                                <i class='bx bx-buildings'></i>
                            </x-slot>
                        </x-text-input>
                    </div>
                    <div class="col-12 col-lg-6">
                        <x-combobox-input label="Business Type" labelId="business_type" name="company_type"
                            placeholder="Choose your business type" tabindex="6" wire:model='company_type'
                            :isValid="$errors->has('company_type') ? false : true">
                            @foreach ($type as $key => $item)
                                <option value="{{ $item['value'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </x-combobox-input>
                    </div>
                    <div class="col-12 col-lg-6">
                        <x-text-input type="phone" label="Phone Number" labelId="company_phone_number"
                            :withIcon="true" placeholder="+62 812 1243 5150" name="company_phone_number"
                            tabindex="7" wire:model='company_phone_number' :isValid="$errors->has('company_phone_number') ? false : true">
                            <x-slot:icon>
                                <i class='bx bx-phone'></i>
                            </x-slot>
                        </x-text-input>
                    </div>
                    <div class="col-12">
                        <x-text-input type="email" label="Company Email Address" labelId="company_email"
                            :withIcon="true" placeholder="Enter your company email address" name="company_email"
                            tabindex="8" wire:model='company_email' :isValid="$errors->has('company_email') ? false : true">
                            <x-slot:icon>
                                <i class='bx bx-envelope'></i>
                            </x-slot>
                        </x-text-input>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-password-toggle mb-3">
            <div class="row g-2">
                <div class="col-12">
                    <x-text-input type="password" label="Create Password" labelId="password"
                        placeholder="Create your password" name="password" wire:model='password' :isValid="$errors->has('password') ? false : true">
                    </x-text-input>
                </div>
                <div class="col-12">
                    <x-text-input type="password" label="Confirm Password" labelId="confirm-password"
                        placeholder="Confirm your password" name="confirm_password" wire:model='confirm_password'
                        :isValid="$errors->has('confirm_password') ? false : true">
                    </x-text-input>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input
                    class="form-check-input @error('terms_conditions')
                    is-invalid
                @enderror"
                    type="checkbox" id="terms-conditions" name="terms" wire:model='terms_conditions' />
                <label class="form-check-label" for="terms-conditions">
                    I agree to
                    <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary d-grid w-100">Sign up</button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="popupValidation" tabindex="-1" aria-labelledby="popupValidation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="popupValidation">Message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#popupValidation').modal('show');
    </script>
@endpush
