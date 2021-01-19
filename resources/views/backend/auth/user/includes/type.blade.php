@if ($user->isSuperAdmin())
    <div class="alert alert-custom alert-light-dark fade show" role="alert">
        <div class="alert-text">
            {{ __(config('boilerplate.access.role.super_admin')) }}
        </div>
    </div>
@else
    @php
        $userRoles = [];

        foreach ($logged_in_user->roles as $r) {
            $userRoles[] = $r->name;
        }
    @endphp

    {{ implode(', ', $userRoles) }}
@endif
