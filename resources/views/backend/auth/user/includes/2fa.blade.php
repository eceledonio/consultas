@if ($user->hasTwoFactorEnabled())
    <span class="btn btn-light-success font-weight-lighter btn-sm" data-toggle="tooltip" title="{{ timezone()->convertToLocal($user->twoFactorAuth->enabled_at->SetTimezone('America/Santo_Domingo')) }}">
        {{ __('Si') }}
    </span>
@else
    <span class="btn btn-light-danger font-weight-lighter btn-sm">
        {{ __('No') }}
    </span>
@endif
