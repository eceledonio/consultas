@extends('backend.layout.default')

@section('title', __('Administración de Eventos') . ' | ' . __('Visualizando Evento'))


@section('content')
    <x-forms.patch :action="route('admin.auth.logs.restore', $log->id)">
        <x-backend.card>
            <x-slot name="header">
                {{ __('Visualizando Evento') }} {{ $log->id }}
            </x-slot>

            <x-slot name="headerActions">
            </x-slot>

            <x-slot name="body">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card card-custom bg-primary">
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="fad fa-database text-white"></i>
                                    </span>

                                    <h3 class="card-label text-white">
                                        {{ __('Detalles Acción') }}
                                    </h3>
                                </div>
                            </div>

                            <div class="separator separator-solid separator-white opacity-20"></div>

                            <div class="card-body text-white">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr class="text-white">
                                            <th class="w-30">{{ html()->label(mb_strtoupper(__('Fecha')))->class('mt-2') }}</th>
                                            <td class="align-middle">{{ $log->created_at }}</td>
                                        </tr>

                                        <tr class="text-white">
                                            <th>{{ html()->label(mb_strtoupper(__('Modelo')))->class('mt-2') }}</th>
                                            <td class="align-middle">{{ $log->recordable_type }}</td>
                                        </tr>

                                        <tr class="text-white">
                                            <th>{{ html()->label(mb_strtoupper(__('ID de Fila')))->class('mt-2') }}</th>
                                            <td class="align-middle">{{ $log->recordable_id }}</td>
                                        </tr>

                                        <tr class="text-white">
                                            <th>{{ html()->label(mb_strtoupper(__('Tipo')))->class('mt-2') }}</th>
                                            <td class="align-middle">{{ mb_strtoupper($log->event) }}</td>
                                        </tr>

                                        <tr class="text-white">
                                            <th>{{ html()->label(mb_strtoupper(__('Usuario IP')))->class('mt-2') }}</th>
                                            <td class="align-middle">{{ $log->ip_address }}</td>
                                        </tr>

                                        <tr class="text-white">
                                            <th>{{ html()->label(mb_strtoupper(__('Usuario')))->class('mt-2') }}</th>
                                            <td class="align-middle">{{ $log->user->name ?? __('No disponible') }}</td>
                                        </tr>

                                        <tr class="text-white">
                                            <th>{{ html()->label(mb_strtoupper(__('URL')))->class('mt-2') }}</th>
                                            <td class="align-middle">{{ $log->url }}</td>
                                        </tr>

                                        <tr class="text-white">
                                            <th>{{ html()->label(mb_strtoupper(__('Usuario Agente')))->class('mt-2') }}</th>
                                            <td class="align-middle">{{ $log->user_agent }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card card-custom bg-primary">
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="fad fa-database text-white"></i>
                                    </span>

                                    <h3 class="card-label text-white">
                                        {{ __('Campos Modificados') }}
                                    </h3>
                                </div>
                            </div>

                            <div class="separator separator-solid separator-white opacity-20"></div>

                            <div class="card-body text-white">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="text-white">
                                            <th class="w-30">{{ html()->label(mb_strtoupper(__('Fecha'))) }}</th>
                                            <td>{{ $log->created_at }}</td>
                                        </tr>
                                        @foreach($log->modified as $value)
                                            <tr class="text-white">
                                                <th class="w-30">{{ html()->label(('-')) }}</th>
                                                <td>{{ $value }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="card card-custom bg-primary">
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="fad fa-database text-white"></i>
                                    </span>

                                    <h3 class="card-label text-white">
                                        {{ __('Estado del objeto') }}
                                    </h3>
                                </div>
                            </div>

                            <div class="separator separator-solid separator-white opacity-20"></div>

                            <div class="card-body text-white">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="text-white">
                                            <th class="w-30">{{ html()->label(mb_strtoupper(__('Fecha'))) }}</th>
                                            <td>{{ $log->created_at }}</td>
                                        </tr>
                                        @foreach($log->properties as $key => $val)
                                            <tr class="text-white">
                                                <th class="w-30">{{ html()->label(mb_strtoupper(__($key))) }}</th>
                                                <td>{{ $val }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                @can('logs.restore')
                    <button type="submit" href="#" class="btn btn-light-dark">
                        <i class="fa fa-clipboard"></i>
                        {{ __('Restaurar a este Estado') }}
                    </button>
                @endcan
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection
