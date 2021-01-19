@if ($user->isVerified())
    <span class="btn btn-light-success font-weight-lighter btn-sm" data-toggle="tooltip" data-theme="dark" title="{{ $user->email_verified_at->translatedFormat('l d \de F Y g:i A') }}">
        {{ __('Si') }}
    </span>
@else
    <span class="btn btn-light-danger font-weight-lighter btn-sm">
        {{ __('No') }}
    </span>
@endif
