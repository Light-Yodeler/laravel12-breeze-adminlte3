<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ __('Update Password') }}</h3>
    </div>

    <div class="card-body">
        <p class="text-muted">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <form method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="update_password_current_password">{{ __('Current Password') }}</label>
                <input
                    id="update_password_current_password"
                    name="current_password"
                    type="password"
                    class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                    autocomplete="current-password"
                >
                @error('current_password', 'updatePassword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="update_password_password">{{ __('New Password') }}</label>
                <input
                    id="update_password_password"
                    name="password"
                    type="password"
                    class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                    autocomplete="new-password"
                >
                @error('password', 'updatePassword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
                <input
                    id="update_password_password_confirmation"
                    name="password_confirmation"
                    type="password"
                    class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                    autocomplete="new-password"
                >
                @error('password_confirmation', 'updatePassword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>

                @if (session('status') === 'password-updated')
                    <span class="text-success">
                        {{ __('Saved.') }}
                    </span>
                @endif
            </div>
        </form>
    </div>
</div>
