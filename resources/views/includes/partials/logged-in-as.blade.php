@impersonating
<x-utils.alert type="warning" class="mb-0 rounded-0">
    {{ __('Usted está actualmente conectado como :name.',
    ['name' => $logged_in_user->name]) }}

    <a style="text-decoration: underline; color: black;" href="{{ route('impersonate.leave') }}">
        {{ __('Regresar a tu cuenta') }}
    </a>.
</x-utils.alert>
@endImpersonating
