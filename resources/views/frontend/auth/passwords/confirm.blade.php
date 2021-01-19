@extends('frontend.layout.default')

@section('title', __('Confirme su contraseña antes de continuar.'))

@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        {{ __('Confirme su contraseña antes de continuar.') }}
                    </x-slot>

                    <x-slot name="body">
                        <x-forms.post :action="route('frontend.auth.password.confirm')">
                            <div class="form-group row">
                                {{ html()->label(__('Contraseña'))->class('col-md-4 form-control-label align-self-center text-md-right')->for('password') }}

                                <div class="col-md-6">
                                    {{ html()->password('password')
                                        ->class('form-control form-control-lg')
                                        ->addClass($errors->has('password') ? 'is-invalid' : '')
                                        ->placeholder(__('Contraseña'))
                                        ->attribute('maxlength', 100)
                                        ->autofocus() }}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit">
                                        {{ __('Confirmar contraseña') }}
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
