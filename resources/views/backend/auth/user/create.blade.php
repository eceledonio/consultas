@extends('backend.layout.default')

@section('title', __('Nuevo Usuario'))

@section('content')
    <x-forms.post :action="route('admin.auth.user.store')" xmlns="">
        <x-backend.card>
            <x-slot name="header">
                {{ __('Nuevo Usuario') }}
            </x-slot>

                <x-slot name="headerActions">
                    <x-utils.link
                        icon="la la-arrow-left"
                        class="btn btn-light-danger font-weight-lighter mr-2"
                        :href="route('admin.auth.user.index')"
                        :text="__('Regresar')" />
                </x-slot>

            <x-slot name="body">
                <div class="row">
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
                            {{ html()->label(__('Contraseña'))->class('col-md-2 form-control-label align-self-center')->for('password') }}

                            <div class="col-md-10">
                                {{ html()->password('password')
                                    ->class('form-control form-control-lg')
                                    ->addClass($errors->has('password') ? 'is-invalid' : '')
                                    ->placeholder(__('Contraseña')) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label(__('Confirmación de la contraseña'))->class('col-md-2 form-control-label align-self-center')->for('password_confirmation') }}

                            <div class="col-md-10">
                                {{ html()->password('password_confirmation')
                                    ->class('form-control form-control-lg')
                                    ->placeholder(__('Confirmación de la contraseña')) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="active" class="col-md-2 col-form-label">
                                {{ __('Activo') }}
                            </label>

                            <div class="col-md-10">
                                <span class="switch switch-outline switch-icon switch-brand">
                                    <label>
                                        {{ html()->checkbox('active', true) }}
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>

                        <div x-data="{ emailVerified : false }">
                            <div class="form-group row">
                                <label for="email_verified" class="col-md-2 col-form-label">
                                    {{ __('Correo Verificado') }}
                                </label>

                                <div class="col-md-10">
                                    <span class="switch switch-outline switch-icon switch-brand">
                                        <label>
                                            <input
                                                type="checkbox"
                                                name="email_verified"
                                                id="email_verified"
                                                value="1"
                                                class="form-check-input"
                                                x-on:click="emailVerified = !emailVerified"
                                                {{ old('email_verified') ? 'checked' : '' }} />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>

                            <div x-show="!emailVerified">
                                <div class="form-group row">
                                    <label for="send_confirmation_email" class="col-md-2 col-form-label">
                                        {{ __('Enviar correo de confirmación') }}
                                    </label>

                                    <div class="col-md-10">
                                        <span class="switch switch-outline switch-icon switch-brand">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    name="send_confirmation_email"
                                                    id="send_confirmation_email"
                                                    value="1"
                                                    class="form-check-input"
                                                    {{ old('send_confirmation_email') ? 'checked' : '' }} />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
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
                                                                @if($role->id === 1 && !in_array(1, $userRoles, true) )
                                                                    @continue
                                                                @endif
                                                                <div class="card">
                                                                    <div class="card-header" style="background: whitesmoke;">
                                                                        <span class="switch switch-outline switch-icon switch-brand">
                                                                            <label>
                                                                                {{ html()->checkbox('roles[]', (old('roles') && in_array($role->name, old('roles'), true)), $role->name)
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
                                                    <div class="row">
                                                        @foreach ($permissions as $key => $module)
                                                            <div class="col-xl-4 col-lg-4 col-sm-1">
                                                                <table class="table-permissions">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <h4>{{ $key }}</h4>
                                                                        </th>
                                                                    </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                    @foreach ($module as $permission)
                                                                        <tr>
                                                                            <td>
                                                                                <div class="checkbox-inline pb-4">
                                                                                    {{ html()->label(
                                                                                        html()->checkbox('permissions[]', (old('permissions') && in_array($permission->name, old('permissions'), true)), $permission->name)
                                                                                              ->id('permission-'.$permission->id)
                                                                                              . '<span></span>' . $permission->display_name)
                                                                                              ->for('permission-'.$permission->id)->class('checkbox') }}
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        @endforeach
                                                    </div>
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
                    {{ __('Crear Usuario') }}
                </button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection
