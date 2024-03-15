<div>
    <form wire:submit='register'>
        <div class="mb-3">
            <label class="form-label">Full name</label>
            <input class="form-control form-control-lg" type="text" wire:model="name" placeholder="Enter your name" />

            @error('name')
                <p class="error-message mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control form-control-lg" type="text" wire:model="email"
                placeholder="Enter your email" />

            @error('email')
                <p class="error-message mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control form-control-lg" type="password" wire:model="password"
                placeholder="Enter password" />

            @error('password')
                <p class="error-message mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        @error('registration_failed')
            <p class="error-message mt-1 text-sm">{{ $message }}</p>
        @enderror

        <div class="d-grid mt-3 gap-2">
            <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
        </div>
    </form>
</div>
