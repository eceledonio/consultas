@extends('backend.layout.default')

@section('title', __('Update User'))

@section('content')
    {{ html()->modelForm($user, 'PATCH', route('admin.auth.user.update', $user->id))->class('form-horizontal')->open() }}
        <x-backend.card>
            <x-slot name="header">
                {{ __('Actualizar Usuario') }}
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="la la-arrow-left"
                    class="btn btn-light-danger font-weight-lighter mr-2"
                    :href="route('admin.auth.user.index')"
                    :text="__('Regresar')" />
            </x-slot>

            <x-slot name="body">
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('Nombre'))->class('col-md-2 form-control-label align-self-center')->for('first_name') }}

                            <div class="col-md-10">
                                {{ html()->text('first_name')
                                    ->class('form-control form-control-lg')
                                    ->addClass($errors->has('first_name') ? 'is-invalid' : '')
                                    ->placeholder(__('Nombre'))
                                    ->attribute('maxlength', 70)
                                    ->autofocus() }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label(__('Apellidos'))->class('col-md-2 form-control-label align-self-center')->for('last_name') }}

                            <div class="col-md-10">
                                {{ html()->text('last_name')
                                    ->class('form-control form-control-lg')
                                    ->addClass($errors->has('last_name') ? 'is-invalid' : '')
                                    ->placeholder(__('Apellidos'))
                                    ->attribute('maxlength', 70) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label(__('Dirección de correo'))->class('col-md-2 form-control-label align-self-center')->for('email') }}

                            <div class="col-md-10">
                                {{ html()->email('email')
                                    ->class('form-control form-control-lg')
                                    ->addClass($errors->has('email') ? 'is-invalid' : '')
                                    ->placeholder(__('Dirección de correo'))
                                    ->attribute('maxlength', 65) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xl-6 col-sm-12">
                                <div class="table-responsive">
                                    <table class="table-permissions">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <x-backend.card>
                                                    <x-slot name="header">
                                                        {{ __('Perfiles') }}
                                                    </x-slot>

                                                    <x-slot name="body">
                                                        @if($roles->count())
                                                            @foreach($roles as $role)
                                                                @if($role->name !== config('boilerplate.access.role.super_admin'))
                                                                    <div class="card">
                                                                        <div class="card-header" style="background: whitesmoke;">
                                                                            <span class="switch switch-outline switch-icon switch-brand">
                                                                                <label>
                                                                                    {{ html()->checkbox('roles[]', in_array($role->name, $userRoles, true), $role->name)
                                                                                        ->id('role-'.$role->id) }}
                                                                                    <span></span>
                                                                                </label>

                                                                                &nbsp; {{ html()->label(mb_strtoupper($role->name))->for('role-'.$role->id) }}
                                                                            </span>
                                                                        </div>

                                                                        <div class="card-body">
                                                                            @if($role->id !== 1 && $role->id !== 2)
                                                                                @if($role->permissions->count())
                                                                                    <div class="checkbox-inline">
                                                                                        @foreach($role->permissions as $permission)
                                                                                            <label class="checkbox checkbox-disabled">
                                                                                                {{ html()->checkbox()->disabled()->attribute('checked', true) }}
                                                                                                <span></span>

                                                                                                {{ ucwords($permission->display_name) }}
                                                                                            </label>
                                                                                        @endforeach
                                                                                    </div>
                                                                                @else
                                                                                    <span class='badge badge-success bg-red-600'>{{ __('NINGÚNO') }}</span>
                                                                                @endif
                                                                            @else
                                                                                <span class='badge badge-success bg-light-blue-a300'>{{ __('TODOS LOS PERMISOS') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </x-slot>
                                                </x-backend.card>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-xl-6 col-sm-12">
                                <h3>{{ __('Permisos Adicionales') }}</h3>

                                <div style="margin-top: 10px; border-bottom: 2px solid #0d47a1;"></div>

                                <br>

                                <div class="table-responsive">
                                    <table class="table-permissions">
                                        <tbody>
                                        <tr>
                                            <td>
                                                @if($permissions->count())
                                                    @foreach($permissions as $permission)
                                                        <div class="checkbox-list pb-4">
                                                            {{ html()->label(
                                                                html()->checkbox('permissions[]', in_array($permission->name, $userPermissions, true), $permission->name)
                                                                    ->id('permission-'.$permission->id)
                                                                    . '<span></span>' . $permission->display_name)
                                                                    ->for('permission-'.$permission->id)->class('checkbox') }}
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">
                    {{ __('Actualizar Usuario') }}
                </button>
            </x-slot>
        </x-backend.card>
    {{ html()->closeModelForm() }}
@endsection
