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
                :href="route('admin.paciente.index')"
                :text="__('Regresar')" />

            <x-utils.link
                icon="la la-user-edit"
                class="btn btn-light-success font-weight-lighter mr-2"
                :href="route('admin.paciente.edit', $paciente)"
                :text="__('Modificar')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-borderless table-hover">
                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Avatar') }}</b>
                    </th>

                    <td class="symbol symbol-120 mr-3">
                        <img src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/users/blank.png" />
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Record No') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-dark">
                            {{ $paciente->id }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Nombres') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-dark">
                            {{ $paciente->nombres }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Apellidos') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-dark">
                            {{ $paciente->apellidos }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Sexo') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-dark">
                            {{ $paciente->sexo }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Fecha de nacimiento') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-info">
                            {{ $paciente->dob }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Pais') }}</b>
                    </th>

                    <td>
                            <span class="btn btn-light-info">
                                {{ $paciente->pais_id }}
                            </span>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Dirección') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-primary">
                            {{ $paciente->direccion }}
                        </span>
                    </td>
                </tr>

                    <tr>
                        <th class="align-middle font-weight-light">
                            <b>{{ __('Celular') }}</b>
                        </th>

                        <td>
                            <span class="btn btn-light-primary">
                            {{ $paciente->celular }}
                        </span>
                        </td>
                    </tr>

                <tr>
                    <th class="align-middle font-weight-light">
                        <b>{{ __('Ars') }}</b>
                    </th>

                    <td>
                        <span class="btn btn-light-warning">
                            {{$paciente->ars_id}}
                        </span>
                    </td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <div class="float-left">
                <small class="text-muted">
                    <strong>
                        {{ __('Creación de Paciente') }}:
                    </strong>

                    {{ $paciente->created_at->translatedFormat('l d \de F Y g:i A') }} ({{ $paciente->created_at->diffForHumans() }}),

                    <strong>
                        {{ __('Última Actualización') }}:
                    </strong>

                    {{ $paciente->updated_at->translatedFormat('l d \de F Y g:i A') }} ({{ $paciente->updated_at->diffForHumans() }})
                </small>
            </div>

        </x-slot>
    </x-backend.card>
@endsection
