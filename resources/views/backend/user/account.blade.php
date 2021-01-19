@extends('backend.layout.default')

@section('title', __('Mi Perfil'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Perfil de') }} {{ $logged_in_user->name }}
        </x-slot>

        <x-slot name="headerActions"></x-slot>

        <x-slot name="body">
            <ul class="nav nav-tabs nav-tabs-line mb-5">
                <li class="nav-item">
                    <x-utils.link
                        :text="__('Mi Perfil')"
                        class="nav-link active text-blue"
                        id="my-profile-tab"
                        data-toggle="tab"
                        href="#my-profile"
                        role="tab"
                        aria-controls="my-profile"
                        aria-selected="true" />
                </li>

                <li class="nav-item">
                    <x-utils.link
                        :text="__('Editar Información')"
                        class="nav-link"
                        id="information-tab"
                        data-toggle="tab"
                        href="#information"
                        role="tab"
                        aria-controls="information"
                        aria-selected="false"/>
                </li>

                @if (! $logged_in_user->isSocial())
                    <li class="nav-item">
                        <x-utils.link
                            :text="__('Contraseña')"
                            class="nav-link"
                            id="password-tab"
                            data-toggle="tab"
                            href="#password"
                            role="tab"
                            aria-controls="password"
                            aria-selected="false" />
                    </li>
                @endif
                <li class="nav-item">
                    <x-utils.link
                        :text="__('Autenticación de dos factores')"
                        class="nav-link"
                        id="two-factor-authentication-tab"
                        data-toggle="tab"
                        href="#two-factor-authentication"
                        role="tab"
                        aria-controls="two-factor-authentication"
                        aria-selected="false"/>
                </li>
            </ul>

            <div class="tab-content" id="my-profile-tabsContent">
                <div class="tab-pane fade pt-3 show active" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                    @include('backend.user.account.tabs.profile')
                </div>

                <div class="tab-pane fade pt-3" id="information" role="tabpanel" aria-labelledby="information-tab">
                    @include('backend.user.account.tabs.information')
                </div>

                @if (! $logged_in_user->isSocial())
                    <div class="tab-pane fade pt-3" id="password" role="tabpanel" aria-labelledby="password-tab">
                        @include('backend.user.account.tabs.password')
                    </div>
                @endif

                <div class="tab-pane fade pt-3" id="two-factor-authentication" role="tabpanel" aria-labelledby="two-factor-authentication-tab">
                    @include('backend.user.account.tabs.two-factor-authentication')
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endsection
