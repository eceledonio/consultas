@extends('frontend.layout.default')

@section('title', __('La autenticación de dos factores es requerida'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        {{ __('La autenticación de dos factores es requerida') }}
                    </x-slot>

                    <x-slot name="body">
                        <p class="text-center">
                            {{ __('Para continuar, abra su aplicación Authenticator y emita su código 2FA.') }}
                        </p>

                        <x-forms.post :action="$action">
                            @foreach((array)$credentials as $name => $value)
                                <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                            @endforeach

                            @if($remember)
                                <input type="hidden" name="remember" value="on">
                            @endif

                            <div class="form-group row">
                                <label for="{{ $input }}" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Código de autenticación') }}
                                </label>

                                <div class="col-md-6">
                                    <input type="text"
                                           name="{{ $input }}"
                                           id="{{ $input }}"
                                           class="form-control {{ $error ? 'is-invalid' : '' }}"
                                           placeholder="123456"
                                           minlength="6"
                                           autocomplete="off"
                                           autofocus
                                           required />

                                    @if($error)
                                        <div class="invalid-feedback">
                                            {{ trans('laraguard::validation.totp_code') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit">
                                        {{ __('Confirmar Código') }}
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
