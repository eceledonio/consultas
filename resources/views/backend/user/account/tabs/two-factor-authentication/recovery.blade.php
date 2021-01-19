@extends('frontend.layout.default')

@section('title', __('Códigos de recuperación de dos factores'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        {{ __('Códigos de recuperación de dos factores') }}
                    </x-slot>

                    <x-slot name="body">
                        <h5>
                            {{ __('Guarde sus códigos de recuperación de dos factores:') }}
                        </h5>

                        <p>
                            {{ __('Los códigos de recuperación se utilizan para acceder a su cuenta en caso de que ya no tenga acceso a su aplicación de autenticación.') }}
                        </p>

                        <p class="text-danger">
                            <strong>
                                {{ __('¡Guarde estos códigos! Si pierde su dispositivo y no tiene los códigos de recuperación, ¡perderá el acceso a su cuenta para siempre!') }}
                            </strong>
                        </p>

                        <x-forms.patch :action="route('frontend.auth.account.2fa.update')" name="confirm-item">
                            <button class="btn btn-sm btn-block btn-danger mb-3" type="submit">
                                {{ __('Genere nuevos códigos de respaldo') }}
                            </button>
                        </x-forms.patch>

                        <p>
                            <strong>
                                @lang('¡Cada código solo se puede utilizar una vez!')
                            </strong>
                        </p>

                        <div class="row">
                            @foreach (collect($recoveryCodes)->chunk(5) as $codes)
                                <div class="col-6">
                                    <ul>
                                        @foreach ($codes as $code)
                                            <li>
                                                {{ $code['code'] }} -

                                                @if ($code['used_at'])
                                                    <strong class="text-danger">
                                                        {{ __('Utilizado') }}: @displayDate(carbon($code['used_at']))
                                                    </strong>
                                                @else
                                                    <em>
                                                        {{ __('No utilizado') }}
                                                    </em>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div><!--col-->
                            @endforeach
                        </div><!--row-->

                        <a href="{{ route('admin.user.account', ['#two-factor-authentication']) }}" class="btn btn-sm btn-block btn-success">
                            {{ __('He guardado estos códigos en un lugar seguro.') }}
                        </a>
                    </x-slot>
                </x-frontend.card>
            </div>
        </div>
    </div>
@endsection
