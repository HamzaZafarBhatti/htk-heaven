@if (session('status') === 'profile-updated' || session('status') === 'password-updated')
    <p class="notification">{{ __('Saved.') }}</p>
@endif
