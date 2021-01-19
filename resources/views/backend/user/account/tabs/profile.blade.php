@push('after-styles')
    <style>

    </style>
@endpush

<x-backend.card>
    <x-slot name="header">
        {{ __('Mi Perfil') }}
    </x-slot>

    <x-slot name="body">
        <div class="table-responsive">
            <table class="table table-borderless">
                <tr>
                    <th class="align-middle">
                        <div class="alert alert-custom alert-light-primary fade show" role="alert">
                            <div class="alert-text">
                                {{ mb_strtoupper(__('Perfiles')) }}
                            </div>
                        </div>
                    </th>

                    <td class="align-middle">
                        @include('backend.auth.user.includes.type', ['user' => $logged_in_user])
                    </td>
                </tr>

                <tr>
                    <th class="align-middle">
                        <div class="alert alert-custom alert-light-primary fade show" role="alert">
                            <div class="alert-text">
                                {{ mb_strtoupper(__('Avatar')) }}
                            </div>
                        </div>
                    </th>

                    <td class="align-middle">
                        <div class="symbol symbol-100 mr-5">
                            <div class="symbol-label" style="background-image:url('{{ $logged_in_user->picture }}')"></div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle">
                        <div class="alert alert-custom alert-light-primary fade show" role="alert">
                            <div class="alert-text">
                                {{ mb_strtoupper(__('Nombre')) }}
                            </div>
                        </div>
                    </th>

                    <td class="align-middle">
                        <div class="alert alert-custom alert-light-dark fade show" role="alert">
                            <div class="alert-text">
                                {{ $logged_in_user->name }}
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle">
                        <div class="alert alert-custom alert-light-primary fade show" role="alert">
                            <div class="alert-text">
                                {{ mb_strtoupper(__('Dirección de correo')) }}
                            </div>
                        </div>
                    </th>

                    <td class="align-middle">
                        <div class="alert alert-custom alert-light-dark fade show" role="alert">
                            <div class="alert-text">
                                {{ $logged_in_user->email }}
                            </div>
                        </div>
                    </td>
                </tr>

                @if ($logged_in_user->isSocial())
                    <tr>
                        <th class="align-middle">
                            <div class="alert alert-custom alert-light-primary fade show" role="alert">
                                <div class="alert-text">
                                    {{ mb_strtoupper(__('Proveedor Social')) }}
                                </div>
                            </div>
                        </th>

                        <td class="align-middle">
                            <div class="alert alert-custom alert-light-dark fade show" role="alert">
                                <div class="alert-text">
                                    {{ ucfirst($logged_in_user->provider) }}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endif

                <tr>
                    <th class="align-middle">
                        <div class="alert alert-custom alert-light-primary fade show" role="alert">
                            <div class="alert-text">
                                {{ mb_strtoupper(__('Zona Horaria')) }}
                            </div>
                        </div>
                    </th>

                    <td class="align-middle">
                        <div class="alert alert-custom alert-light-dark fade show" role="alert">
                            <div class="alert-text">
                                {{ $logged_in_user->timezone ?? __('No Disponible') }}
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle">
                        <div class="alert alert-custom alert-light-primary fade show" role="alert">
                            <div class="alert-text">
                                {{ mb_strtoupper(__('Creación Cuenta')) }}
                            </div>
                        </div>
                    </th>

                    <td class="align-middle">
                        <div class="alert alert-custom alert-light-dark fade show" role="alert">
                            <div class="alert-text">
                                {{ $logged_in_user->created_at->translatedFormat('l d \de F Y g:i A') }} ({{ $logged_in_user->created_at->diffForHumans() }})
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="align-middle">
                        <div class="alert alert-custom alert-light-primary fade show" role="alert">
                            <div class="alert-text">
                                {{ mb_strtoupper(__('Última Actualización')) }}
                            </div>
                        </div>
                    </th>

                    <td class="align-middle">
                        <div class="alert alert-custom alert-light-dark fade show" role="alert">
                            <div class="alert-text">
                                {{ $logged_in_user->updated_at->translatedFormat('l d \de F Y g:i A') }} ({{ $logged_in_user->updated_at->diffForHumans() }})
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </x-slot>
</x-backend.card>
