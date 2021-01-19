@extends('backend.layout.default')

@section('title', __('Cambiar contraseña para :name', ['name' => $user->name]))

@section('content')
    <x-forms.patch :action="route('admin.auth.user.change-password.update', $user)">
        <x-backend.card>
            <x-slot name="header">
                {{ __('Cambiar contraseña para :name', ['name' => $user->name]) }}
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="la la-arrow-left"
                    class="btn btn-light-danger font-weight-lighter mr-2"
                    :href="route('admin.auth.user.index')"
                    :text="__('Regresar')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    {{ html()->label(__('Contraseña'))->class('col-md-2 form-control-label align-self-center')->for('password') }}

                    <div class="col-md-10">
                        {{ html()->password('password')
                            ->class('form-control form-control-lg')
                            ->addClass($errors->has('password') ? 'is-invalid' : '')
                            ->placeholder(__('Contraseña'))
                            ->attribute('maxlength', 100)
                            ->autofocus() }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ html()->label(__('Confirmar Contraseña'))->class('col-md-2 form-control-label align-self-center')->for('password_confirmation') }}

                    <div class="col-md-10">
                        {{ html()->password('password_confirmation')
                            ->class('form-control form-control-lg')
                            ->addClass($errors->has('password_confirmation') ? 'is-invalid' : '')
                            ->placeholder(__('Confirmar Contraseña'))
                            ->attribute('maxlength', 100) }}
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">
                    {{ __('Actualizar') }}
                </button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection
