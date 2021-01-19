<div class="dropdown dropdown-inline">
    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">
        <span class="svg-icon svg-icon-primary svg-icon-2x">
            <!--begin::Svg Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"/>
                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1"/>
                    <path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000"/>
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </a>

    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
        <ul class="navi flex-column navi-hover py-2">
            <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                {{ __('Elija una acción:') }}
            </li>

            @if ($user->trashed() && $logged_in_user->isAdmin())
                <x-utils.form-button
                    :action="route('admin.auth.user.restore', $user)"
                    method="patch"
                    button-class="dropdown-item font-weight-lighter"
                    name="confirm-item">
                    {{ __('Restaurar') }}
                </x-utils.form-button>

                @if (config('boilerplate.access.user.permanently_delete'))
                    <x-utils.delete-button
                        :href="route('admin.auth.user.permanently-delete', $user)"
                        :text="__('Eliminar Permanentemente')" />
                @endif
            @else
                @if ($logged_in_user->isAdmin())
                    <x-utils.view-button :href="route('admin.auth.user.show', $user)" />
                    <x-utils.edit-button :href="route('admin.auth.user.edit', $user)" />
                @endif

                @if (! $user->isActive())
                    <x-utils.form-button
                        :action="route('admin.auth.user.mark', [$user, 1])"
                        method="patch"
                        button-class="dropdown-item font-weight-lighter"
                        name="confirm-item"
                        permission="users.reactivate">
                        {{ __('Reactivar') }}
                    </x-utils.form-button>
                @endif
            @endif

            @if ($user->id !== $logged_in_user->id && !$user->isSuperAdmin() && $logged_in_user->isAdmin())
                <li class="navi-item">
                    <x-utils.delete-button :href="route('admin.auth.user.destroy', $user)" />
                </li>
            @endif

            {{-- The logged in user is the super master admin, and the row is the super master admin. Only the master super admin can do anything to themselves --}}
            @if ($user->isSuperAdmin() && $logged_in_user->isSuperAdmin())
                <x-utils.link
                    :href="route('admin.auth.user.change-password', $user)"
                    class="dropdown-item font-weight-lighter"
                    :text="__('Cambiar Contraseña')"
                    permission="users.change-password" />
            @elseif (
                !$user->isSuperAdmin() && // This is not the master admin
                $user->isActive() && // The account is active
                $user->id !== $logged_in_user->id && // It's not the person logged in
                // Any they have at lease one of the abilities in this dropdown
                (
                    $logged_in_user->can('users.change-password') ||
                    $logged_in_user->can('users.clear-session') ||
                    $logged_in_user->can('users.impersonate') ||
                    $logged_in_user->can('users.deactivate')
                )
            )
                <x-utils.link
                    :href="route('admin.auth.user.change-password', $user)"
                    class="dropdown-item font-weight-lighter"
                    :text="__('Cambiar Contraseña')"
                    permission="users.change-password" />

                @if ($user->id !== $logged_in_user->id && !$user->isSuperAdmin())
                    <x-utils.form-button
                        :action="route('admin.auth.user.clear-session', $user)"
                        name="confirm-item"
                        button-class="dropdown-item font-weight-lighter"
                        permission="users.clear-session">
                        {{ __('Limpiar Sesión') }}
                    </x-utils.form-button>

                    @canBeImpersonated($user)
                    <x-utils.link
                        :href="route('impersonate', $user->id)"
                        class="dropdown-item font-weight-lighter text-wrap"
                        :text="__('Personificar ' . $user->name)"
                        permission="users.impersonate" />
                    @endCanBeImpersonated

                    <x-utils.form-button
                        :action="route('admin.auth.user.mark', [$user, 0])"
                        method="patch"
                        name="confirm-item"
                        button-class="dropdown-item font-weight-lighter"
                        permission="users.deactivate">
                        {{ __('Desactivar') }}
                    </x-utils.form-button>
                @endif
            @endif
        </ul>
    </div>
</div>
