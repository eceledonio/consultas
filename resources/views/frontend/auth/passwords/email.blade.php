@extends('frontend.layout.default')

@section('title', __('Restablecer Contraseña'))

@section('content')
    <!--begin::Login-->
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Content-->
        <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
            <!--begin::Wrapper-->
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <!--begin::Logo-->
                <a href="#" class="login-logo pb-xl-20 pb-15">
                    <img src="{{ asset('media/logos/logo-4.png') }}" class="max-h-70px" alt="" />
                </a>
                <!--end::Logo-->

                <!--begin::Signin-->
                <div class="login-form">
                    <x-forms.post :action="route('frontend.auth.password.email')">
                        <!--begin::Title-->
                        <div class="pb-5 pb-lg-15">
                            <h3 class="font-weight-bold text-dark font-size-h2 font-size-h2-lg">
                                {{ __('¿Se te olvidó tu contraseña?') }}
                            </h3>

                            <p class="text-muted font-weight-bolder font-size-h4">
                                {{ __('Ingresa tu correo electrónico para') }} <br> {{ __('restablecer tu contraseña.') }}
                            </p>
                        </div>
                        <!--end::Title-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            {{ html()->email('email')
                                ->class('form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6')
                                ->addClass($errors->has('email') ? 'is-invalid' : '')
                                ->attribute('maxlength', 191)
                                ->attribute('autocomplete', 'off')
                                ->placeholder(__('Correo Electrónico'))
                                ->autofocus()
                            }}
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap">
                            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">
                                {{ __('Restablecer') }}
                            </button>

                            <a href="{{ route('frontend.auth.login') }}" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">
                                {{ __('Cancelar') }}
                            </a>
                        </div>
                        <!--end::Form group-->
                    </x-forms.post>
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Content-->

        <!--begin::Aside-->
        <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
            <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url({{ asset('media/svg/illustrations/login-visual-4.svg') }});">
                <!--begin::Aside title-->
                <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">
                    {{ __('Te') }}
                    <br /> {{ __('Tenemos') }}
                    <br /> {{ __('Cubierto!') }}
                </h3>
                <!--end::Aside title-->
            </div>
        </div>
        <!--end::Aside-->
    </div>
    <!--end::Login-->
@endsection
