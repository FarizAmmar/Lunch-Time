<div>
    <form wire:submit='register'>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <x-text-input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                placeholder="Enter your username" wire:model='name'>
                <x-slot:message>
                    @error('name')
                        {{ $message }}
                    @enderror
                </x-slot>
            </x-text-input>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <x-text-input type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                placeholder="Enter your email address" wire:model='email'>
                <x-slot:message>
                    @error('email')
                        {{ $message }}
                    @enderror
                </x-slot>
            </x-text-input>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <x-text-input type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                placeholder="Enter your password" wire:model='password'>
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
            <x-button type="submit" class="btn-sm btn-primary w-100" label="Sign Up"></x-button>
        </div>
    </form>
</div>
