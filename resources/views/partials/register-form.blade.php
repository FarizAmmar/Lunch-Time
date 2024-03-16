<div>
    <form wire:submit='register'>
        <div class="mb-3">
            <x-text-input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                placeholder="Enter your username" withIcon="true" withLabel="true" wire:model='name'>
                <x-slot:icon>
                    {{-- Cari flaticon untuk icon, pakai flation aja --}}
                    <i class="fi fi-rr-user"></i>
                </x-slot>
                <x-slot:label>
                    Username
                </x-slot>
                <x-slot:message>
                    @error('name')
                        {{ $message }}
                    @enderror
                </x-slot>
            </x-text-input>
        </div>

        <div class="mb-3">
            <x-text-input type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                placeholder="Enter your email address" withLabel="true" withIcon="true" wire:model='email'>
                <x-slot:icon>
                    <i class="fi fi-rr-envelope"></i>
                </x-slot>
                <x-slot:label>
                    Email Address
                </x-slot>
                <x-slot:message>
                    @error('email')
                        {{ $message }}
                    @enderror
                </x-slot>
            </x-text-input>
        </div>

        <div class="mb-3">
            <x-text-input type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                placeholder="Enter your password" withLabel="true" withIcon="true" wire:model='password'>
                <x-slot:icon>
                    <i class="fi fi-rr-key"></i>
                </x-slot>
                <x-slot:label>
                    Password
                </x-slot>
                <x-slot:message>
                    @error('password')
                        {{ $message }}
                    @enderror
                </x-slot>
            </x-text-input>
        </div>

        @error('password')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror

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
    </form>
</div>
