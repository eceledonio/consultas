<x-utils.link
    class="btn btn-success"
    :href="route('admin.auth.user.deactivated')"
    :text="__('Usuarios Desactivados')"
    permission="users.reactivate" />

@if ($logged_in_user->can('users.delete'))
    <x-utils.link class="btn btn-success" :href="route('admin.auth.user.deleted')" :text="__('Usuarios Eliminados')" />
@endif
