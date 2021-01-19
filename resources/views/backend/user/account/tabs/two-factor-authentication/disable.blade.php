@extends('frontend.layouts.app')

@section('title', __('Deshabilitar la autenticación de dos factores'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        {{ __('Deshabilitar la autenticación de dos factores') }}
                    </x-slot>

                    <x-slot name="body">
                        <p>
                            {{ __('Genere un código desde su aplicación 2FA e ingréselo a continuación:') }}
                        </p>

                        <x-forms.delete :action="route('frontend.auth.account.2fa.destroy')" name="confirm-item">
                            <div class="form-group row">
                                <label for="code" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Código de Autorización') }}
                                </label>

                                <div class="col-md-6">
                                    <input type="text" name="code" id="code" maxlength="10" class="form-control" placeholder="{{ __('Código de Autorización') }}" required />
                                </div>
                            </div>

                            <button class="btn btn-sm btn-block btn-danger" type="submit">
                                {{ __('Deshabilitar Autenticación de dos factores') }}
                            </button>
                        </x-forms.delete>
                    </x-slot>
                </x-frontend.card>
            </div>
        </div>
    </div>
@endsection
