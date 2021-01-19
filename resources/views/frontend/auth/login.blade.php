@extends('frontend.layout.default')

@section('title', __('Login'))

@section('content')
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <a href="#" class="text-center mb-10">
                    <img src="{{ asset('media/logos/logo-letter-1.png') }}" class="max-h-70px" alt="{{ __('Logo') }}" />
                </a>

                <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">
                    {{ __('Descubre los beneficios de ') }} {{ settings('appName') }} <br> {{ __('y controla tus operaciones') }}
                </h3>
            </div>

            <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url({{ asset('media/svg/illustrations/login-visual-1.svg') }})"></div>
        </div>

        <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <div class="d-flex flex-column-fluid flex-center">
                <div class="login-form login-signin">
                    <x-forms.post :action="route('frontend.auth.login')" id="kt_login_signin_form">
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">
                                {{ __('Bienvenido a') }} {{ settings('appName') }}
                            </h3>

                            <span class="text-muted font-weight-bold font-size-h4">
                                {{ __('¿No estás registrado?') }}
                                <a href="{{ route('frontend.auth.register') }}" id="kt_login_signup" class="text-primary font-weight-bolder">
                                    {{ __('Registrarse') }}
                                </a>
                            </span>
                        </div>

                        <div class="form-group">
                            {{ html()->label(__('Identificador'))->class('font-size-h6 font-weight-bolder text-dark')->for('email') }}

                            {{ html()->email('email')
                                ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg')
                                ->addClass($errors->has('username') ? 'is-invalid' : '')
                                ->attribute('maxlength', 191)
                                ->attribute('autocomplete', 'off')
                                ->placeholder(__('Digite su Identificador'))
                                ->autofocus()
                            }}
                        </div>

                        <div class="form-group">
                            {{ html()->label(__('Contraseña'))->class('font-size-h6 font-weight-bolder text-dark')->for('password') }}

                            {{ html()->password('password')
                                ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg')
                                ->addClass($errors->has('password') ? 'is-invalid' : '')
                                ->attribute('autocomplete', 'off')
                                ->placeholder(__('Contraseña'))
                            }}
                        </div>

                        <div class="form-group">
                            <div class="checkbox-inline mb-1">
                                <label class="checkbox checkbox-lg pr-5">
                                    {{ html()->checkbox('remember')->checked() }}

                                    <span></span>

                                    {{ __('Recordarme') }}
                                </label>

                                <div class="d-flex justify-content-between pl-5 mt-n5">
                                    <a href="{{ route('frontend.auth.password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">
                                        {{ __('¿Ha olvidado su contraseña?') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        @if(config('boilerplate.access.captcha.login'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    {{ html()->hidden('captcha_status')->value('true')  }}
                                </div>
                            </div>
                        @endif

                        <div class="pb-lg-0 pb-5">
                            <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                                {{ __('Iniciar Sesión') }}
                            </button>

                            @include('frontend.auth.includes.social')
                        </div>
                    </x-forms.post>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
            <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                <span class="mr-1">{{ date('Y') }} &copy;</span>
                <a href="/" target="_blank" class="text-dark-75 text-hover-primary">
                    {{ settings('appName') }}
                </a>
            </div>

            <a href="#" class="text-primary font-weight-bolder font-size-lg">
                {{ __('Términos') }}
            </a>

            <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">
                {{ __('Planes') }}
            </a>

            <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">
                {{ __('Contactenos') }}
            </a>
        </div>
    </div>
@endsection

@push('after-scripts')
@endpush
