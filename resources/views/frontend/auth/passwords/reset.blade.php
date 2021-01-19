@extends('frontend.layout.default')

@section('title', __('Restablecer Contraseña'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        {{ __('Restablecer Contraseña') }}
                    </x-slot>

                    <x-slot name="body">
                        <x-forms.post :action="route('frontend.auth.password.update')">
                            {{ html()->hidden('token')->value($token) }}

                            <div class="form-group row">
                                {{ html()->label(__('Correo Electrónico'))->class('col-md-4 form-control-label align-self-center text-md-right')->for('email') }}

                                <div class="col-md-6">
                                    {{ html()->email('email')
                                        ->class('form-control form-control-lg')
                                        ->addClass($errors->has('email') ? 'is-invalid' : '')
                                        ->placeholder(__('Correo Electrónico'))
                                        ->attribute('maxlength', 255)
                                        ->value($email ?? old('email')) }}
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
                                        {{ __('Restablecer Contraseña') }}
                                    </button>
                                </div>
                            </div>
                        </x-forms.post>
                    </x-slot>
                </x-frontend.card>
            </div>
        </div>
    </div>
@endsection
