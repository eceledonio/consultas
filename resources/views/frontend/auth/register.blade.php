@extends('frontend.layout.default')

@section('title', __('Registrarse'))

@section('content')
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <!--begin::Aside header-->
                <a href="#" class="text-center mb-10">
                    <img src="{{ asset('media/logos/logo-letter-1.png') }}" class="max-h-70px" alt="" />
                </a>
                <!--end::Aside header-->

                <!--begin::Aside title-->
                <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">
                    {{ __('Registrate para conocer más') }}
                    <br />
                    {{ __('del sistema') }}
                </h3>
                <!--end::Aside title-->
            </div>
            <!--end::Aside Top-->

            <!--begin::Aside Bottom-->
            <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url({{ asset('media/svg/illustrations/login-visual-1.svg') }})"></div>
            <!--end::Aside Bottom-->
        </div>

        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center">
                <!--begin::Signup-->
                <div class="login-form login-signin">
                    <!--begin::Form-->
                    <x-forms.post :action="route('frontend.auth.register')">
                        <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">
                                {{ __('Registrarse') }}
                            </h3>

                            <p class="text-muted font-weight-bold font-size-h4">
                                {{ __('Escriba su información para crear la cuenta.') }}
                            </p>
                        </div>
                        <!--end::Title-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            {{ html()->text('first_name')
                                ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6')
                                ->addClass($errors->has('first_name') ? 'is-invalid' : '')
                                ->attribute('maxlength', 191)
                                ->attribute('autocomplete', 'off')
                                ->placeholder(__('Nombres'))
                                ->autofocus()
                            }}
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            {{ html()->text('last_name')
                                ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6')
                                ->addClass($errors->has('last_name') ? 'is-invalid' : '')
                                ->attribute('maxlength', 191)
                                ->attribute('autocomplete', 'off')
                                ->placeholder(__('Apellidos'))
                            }}
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            {{ html()->email('email')
                                ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6')
                                ->addClass($errors->has('email') ? 'is-invalid' : '')
                                ->attribute('maxlength', 191)
                                ->attribute('autocomplete', 'off')
                                ->placeholder(__('Correo Electrónico'))
                            }}
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            {{ html()->password('password')
                                ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6')
                                ->addClass($errors->has('password') ? 'is-invalid' : '')
                                ->attribute('maxlength', 191)
                                ->attribute('autocomplete', 'off')
                                ->placeholder(__('Contraseña'))
                            }}
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            {{ html()->password('password_confirmation')
                                ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6')
                                ->addClass($errors->has('password_confirmation') ? 'is-invalid' : '')
                                ->attribute('maxlength', 191)
                                ->attribute('autocomplete', 'off')
                                ->placeholder(__('Confirmar Contraseña'))
                            }}
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="checkbox mb-0">
                                {{ html()->checkbox('terms') ->value('1') }}
                                <span></span>

                                <div class="ml-2">
                                    {{ __('Estoy de acuerdo con los') }}
                                    <a href="{{ route('frontend.pages.terms') }}">
                                        {{ __('términos y condiciones') }}.
                                    </a>
                                </div>
                            </label>
                        </div>
                        <!--end::Form group-->

                        @if(config('boilerplate.access.captcha.registration'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    <input type="hidden" name="captcha_status" value="true" />
                                </div>
                            </div>
                    @endif

                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">
                                {{ __('Registrarse') }}
                            </button>

                            <a href="{{ route('frontend.auth.login') }}" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">
                                {{ __('Cancelar') }}
                            </a>
                        </div>
                        <!--end::Form group-->
                    </x-forms.post>>
                    <!--end::Form-->
                </div>
                <!--end::Signup-->
            </div>
            <!--end::Content body-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->

{{--    <div class="container py-4">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <x-frontend.card>--}}
{{--                    <x-slot name="header">--}}
{{--                        @lang('Register')--}}
{{--                    </x-slot>--}}

{{--                    <x-slot name="body">--}}
{{--                        <x-forms.post :action="route('frontend.auth.register')">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">--}}
{{--                                    @lang('Name')--}}
{{--                                </label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="{{ __('Name') }}" maxlength="100" autofocus autocomplete="name" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">--}}
{{--                                    @lang('E-mail Address')--}}
{{--                                </label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" autocomplete="email" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">--}}
{{--                                    @lang('Password')--}}
{{--                                </label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" maxlength="100" autocomplete="new-password" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">--}}
{{--                                    @lang('Password Confirmation')--}}
{{--                                </label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Password Confirmation') }}" maxlength="100" autocomplete="new-password" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input type="checkbox" name="terms" value="1" id="terms" class="form-check-input">--}}
{{--                                        <label class="form-check-label" for="terms">--}}
{{--                                            @lang('I agree to the')--}}
{{--                                            <a href="{{ route('frontend.pages.terms') }}" target="_blank">--}}
{{--                                                @lang('Terms & Conditions')--}}
{{--                                            </a>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            @if(config('boilerplate.access.captcha.registration'))--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        @captcha--}}
{{--                                        <input type="hidden" name="captcha_status" value="true" />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button class="btn btn-primary" type="submit">--}}
{{--                                        @lang('Register')--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </x-forms.post>--}}
{{--                    </x-slot>--}}
{{--                </x-frontend.card>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
