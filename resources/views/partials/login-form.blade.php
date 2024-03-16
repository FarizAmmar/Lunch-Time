<div>
    <form wire:submit='login'>
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
                wire:model='password'>
                <x-slot:message>
                    @error('password')
                        {{ $message }}
                    @enderror
                </x-slot>
            </x-text-input>
        </div>

        @error('login_failed')
            <p class="error-message mt-1 text-sm">{{ $message }}</p>
        @enderror

        <div class="d-grid mt-4 gap-2">
            <x-button type="submit" class="btn-sm btn-primary w-100" label="Log in"></x-button>
        </div>
    </form>
</div>
