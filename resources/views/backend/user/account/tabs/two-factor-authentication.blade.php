@if ($logged_in_user->hasTwoFactorEnabled())
    <x-backend.card>
        <x-slot name="header">
            {{ __('Autenticación de dos factores') }}
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h4>
                            {{ __('La autenticación de dos factores está habilitada') }}
                        </h4>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <div class="text-center">
                <a href="{{ route('frontend.auth.account.2fa.disable') }}" class="btn btn-light-danger font-weight-lighter mr-2">
                    {{ __('Deshabilitar la autenticación de dos factores') }}
                </a>

                <a href="{{ route('frontend.auth.account.2fa.show') }}" class="btn btn-light-primary font-weight-lighter mr-2">
                    {{ __('Ver / regenerar códigos de recuperación') }}
                </a>
            </div>
        </x-slot>
    </x-backend.card>
@else
    <x-backend.card>
        <x-slot name="header">
            {{ __('Autenticación de dos factores') }}
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h4>
                            {{ __('La autenticación de dos factores está deshabilitada') }}
                        </h4>

                        <br>

                        <a href="{{ route('frontend.auth.account.2fa.create') }}" class="btn btn-light-success font-weight-lighter mr-2">
                            {{ __('Habilitar la autenticación de dos factores') }}
                        </a>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endif
