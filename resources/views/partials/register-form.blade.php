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
            <input class="form-control form-control-sm @error('email')
            is-invalid
            @enderror"
                type="text" wire:model="email" placeholder="Enter your email" />

            @error('email')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control form-control-sm @error('password')
            is-invalid
            @enderror"
                type="password" wire:model="password" placeholder="Enter password" />

            @error('password')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        @error('registration_failed')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror

        <div class="d-grid mt-3 gap-2">
            <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
        </div>
    </form>
</div>
