<div>
    <form wire:submit='login'>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control form-control-lg" type="email"
                wire:model="email" placeholder="Enter your email" />

            @error('email')
                <p class="error-message mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control form-control-lg" type="password"
                wire:model="password" placeholder="Enter your password" />

            @error('password')
                <p class="error-message mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        @error('login_failed')
            <p class="error-message mt-1 text-sm">{{ $message }}</p>
        @enderror

        <div class="d-grid mt-4 gap-2">
            <button type="submit" class="btn btn-lg btn-primary">Log in</button>
        </div>
    </form>
</div>