@extends('backend.layout.default')

@section('title', __('Visualizar Usuario'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Resúmen') }}
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="la la-arrow-left"
                class="btn btn-light-danger font-weight-lighter mr-2"
                :href="route('admin.auth.user.index')"
                :text="__('Regresar')" />

            <x-utils.link
                icon="la la-user-edit"
                class="btn btn-light-success font-weight-lighter mr-2"
                :href="route('admin.auth.user.edit', $user)"
                :text="__('Modificar')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-borderless table-hover">
                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Avatar') }}</b>
                    </th>

                    <td class="symbol symbol-120 mr-3">
                        <img src="{{ $user->picture }}" />
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                            <b>{{ __('Nombre') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-dark">
                            {{ $user->name }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Dirección de Correo') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-dark">
                            {{ $user->email }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Estado') }}</b>
                    </th>

                    <td>
                        @include('backend.auth.user.includes.status', ['user' => $user])
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Verificado') }}</b>
                    </th>

                    <td>
                        @include('backend.auth.user.includes.verified', ['user' => $user])
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Zona Horaria') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-info">
                            {{ $user->timezone ?? __('No disponible') }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Último inicio de sesión') }}</b>
                    </th>

                    <td>
                        @if($user->last_login_at)
                            <span class="btn btn-light-info">
                                {{ $user->last_login_at->translatedFormat('l d \de F Y g:i A') }}
                            </span>
                        @else
                            <span class="btn btn-light-primary">
                                {{ __('No disponible') }}
                            </span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Última dirección IP conocida') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-primary">
                            {{ $user->last_login_ip ??  __('No disponible') }}
                        </span>
                    </td>
                </tr>

                @if ($user->isSocial())
                    <tr>
                        <th class="align-middle font-weight-light">
                            <b>{{ __('Proveedor Social') }}</b>
                        </th>

                        <td>
                            {{ $user->provider ?? __('No disponible') }}
                        </td>
                    </tr>

                    <tr>
                        <th class="align-middle font-weight-light">
                            <b>{{ __('ID Proveedor') }}</b>
                        </th>

                        <td>
                            {{ $user->provider_id ?? __('No disponible') }}
                        </td>
                    </tr>
                @endif

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Perfiles') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-warning">
                            {!! $user->roles_label !!}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Permisos adicionales') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-warning">
                            {!! $user->permissions_label !!}
                        </span>
                    </td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <div class="float-left">
                <small class="text-muted">
                    <strong>
                        {{ __('Creación Cuenta') }}:
                    </strong>

                    {{ $user->created_at->translatedFormat('l d \de F Y g:i A') }} ({{ $user->created_at->diffForHumans() }}),

                    <strong>
                        {{ __('Última Actualización') }}:
                    </strong>

                    {{ $user->updated_at->translatedFormat('l d \de F Y g:i A') }} ({{ $user->updated_at->diffForHumans() }})

                    @if($user->trashed())
                        <strong>
                            {{ __('Eliminación Cuenta') }}:
                        </strong>

                        {{ $user->deleted_at->translatedFormat('l d \de F Y g:i A') }} ({{ $user->deleted_at->diffForHumans() }})
                    @endif
                </small>
            </div>

        </x-slot>
    </x-backend.card>
@endsection
