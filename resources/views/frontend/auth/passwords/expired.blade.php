@extends('frontend.layout.default')

@section('title', __('Su contraseña ha expirado.'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        {{ __('Su contraseña ha expirado.') }}
                    </x-slot>

                    <x-slot name="body">
                        <x-forms.patch :action="route('frontend.auth.password.expired.update')">
                            <div class="form-group row">
                                {{ html()->label(__('Contraseña Actual'))->class('col-md-4 form-control-label align-self-center text-md-right')->for('current_password') }}

                                <div class="col-md-6">
                                    {{ html()->password('current_password')
                                        ->class('form-control form-control-lg')
                                        ->addClass($errors->has('current_password') ? 'is-invalid' : '')
                                        ->placeholder(__('Contraseña Actual'))
                                        ->attribute('maxlength', 100)
                                        ->autofocus() }}
                                </div>
                            </div>

                            <div class="form-group row">
                                {{ html()->label(__('Nueva Contraseña'))->class('col-md-4 form-control-label align-self-center text-md-right')->for('password') }}

                                <div class="col-md-6">
                                    {{ html()->password('password')
                                        ->class('form-control form-control-lg')
                                        ->addClass($errors->has('password') ? 'is-invalid' : '')
                                        ->placeholder(__('Nueva Contraseña'))
                                        ->attribute('maxlength', 100) }}
                                </div>
                            </div>

                            <div class="form-group row">
                                {{ html()->label(__('Confirmación de la Contraseña'))->class('col-md-4 form-control-label align-self-center text-md-right')->for('password_confirmation') }}

                                <div class="col-md-6">
                                    {{ html()->password('password_confirmation')
                                        ->class('form-control form-control-lg')
                                        ->addClass($errors->has('password_confirmation') ? 'is-invalid' : '')
                                        ->placeholder(__('Confirmación de la Contraseña'))
                                        ->attribute('maxlength', 100) }}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit">
                                        {{ __('Actualizar Contraseña') }}
                                    </button>
                                </div>
                            </div>
                        </x-forms.patch>
                    </x-slot>
                </x-frontend.card>
            </div>
        </div>
    </div>
@endsection
