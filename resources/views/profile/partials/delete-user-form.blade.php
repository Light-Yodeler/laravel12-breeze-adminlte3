<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">{{ __('Delete Account') }}</h3>
    </div>

    <div class="card-body">
        <p class="text-muted mb-4">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <button
            type="button"
            class="btn btn-danger"
            data-toggle="modal"
            data-target="#confirmDeleteAccount"
        >
            {{ __('Delete Account') }}
        </button>
    </div>
</div>

<div class="modal fade" id="confirmDeleteAccount" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteAccountLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteAccountLabel">{{ __('Delete Account') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="form-group mb-0">
                        <label for="delete_account_password">{{ __('Password') }}</label>
                        <input
                            id="delete_account_password"
                            type="password"
                            name="password"
                            class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                            placeholder="{{ __('Password') }}"
                        >
                        @error('password', 'userDeletion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="btn btn-danger">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@if ($errors->userDeletion->isNotEmpty())
    @push('js')
        <script>
            $(function () {
                $('#confirmDeleteAccount').modal('show');
            });
        </script>
    @endpush
@endif
