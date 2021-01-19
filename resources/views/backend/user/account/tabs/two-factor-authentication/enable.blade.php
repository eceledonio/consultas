@extends('frontend.layout.default')

@section('title', __('Habilitar la autenticación de dos factores'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        {{ __('Habilitar la autenticación de dos factores') }}
                    </x-slot>

                    <x-slot name="body">
                        <div class="row">
                            <div class="col-xl-4">
                                <h5>
                                    <strong>
                                        {{ __('Paso 1: Configure su aplicación 2FA') }}
                                    </strong>
                                </h5>

                                <p class="text-justify">
                                    {{ __('Para habilitar 2FA, necesitará una aplicación de autenticación 2FA en su teléfono. Los ejemplos incluyen: Google Authenticator, FreeOTP, Authy yOTP y Microsoft Authenticator (solo por nombrar algunos).') }}
                                </p>

                                <p class="text-justify">
                                    {{ __('La mayoría de las aplicaciones te permitirán configurarlo escaneando el código QR desde la aplicación. Si lo prefiere, puede escribir la clave debajo del código QR manualmente.') }}
                                </p>
                            </div>

                            <div class="col-xl-8">
                                <div class="text-center">
                                    {!! $qrCode !!}

                                    <p><i class="fa fa-key"> {{ $secret }}</i></p>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <h5>
                            <strong>
                                {{ __('Paso 2: Ingrese un código 2FA') }}
                            </strong>
                        </h5>

                        <p>
                            {{ __('Genere un código desde su aplicación 2FA e ingréselo a continuación:') }}
                        </p>

                        <livewire:frontend.two-factor-authentication></livewire:frontend.two-factor-authentication>
                    </x-slot>
                </x-frontend.card>
            </div>
        </div>
    </div>
@endsection
