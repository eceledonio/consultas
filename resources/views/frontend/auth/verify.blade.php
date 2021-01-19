@extends('frontend.layout.default')

@section('title', __('Verifica tu dirección de correo'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        {{ __('Verifica tu dirección de correo electrónico') }}
                    </x-slot>

                    <x-slot name="body">
                        {{ __('Antes de continuar, consulte su correo electrónico para ver si hay un enlace de verificación.') }}
                        {{ __('Si no recibió el correo electrónico') }}

                        <x-forms.post :action="route('frontend.auth.verification.resend')" class="d-inline">
                            <button class="btn btn-link p-0 m-0 align-baseline" type="submit">
                                {{ __('haga clic aquí para solicitar otro') }}.
                            </button>
                        </x-forms.post>
                    </x-slot>
                </x-frontend.card>
            </div>
        </div>
    </div>
@endsection
