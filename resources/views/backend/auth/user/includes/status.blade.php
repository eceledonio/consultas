@if($user->isActive())
    <span class='btn btn-light-success'>
        {{ __('Activo') }}
    </span>
@else
    <span class='btn btn-light-danger'>
        {{ __('Inactivo') }}
    </span>
@endif
