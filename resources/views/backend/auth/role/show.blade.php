@extends('backend.layout.default')

@section('title', __('Administración de Perfiles'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Detalle del Perfil') }} {{ $row->name }}
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="la la-arrow-left"
                class="btn btn-light-danger font-weight-lighter mr-2"
                :href="route('admin.auth.role.index')"
                :text="__('Regresar')" />

            <x-utils.link
                icon="la la-plus"
                class="btn btn-light-primary font-weight-lighter mr-2"
                :href="route('admin.auth.role.create')"
                :text="__('Nuevo Perfil')" />

            <x-utils.link
                icon="la la-edit"
                class="btn btn-light-success font-weight-lighter mr-2"
                :href="route('admin.auth.role.edit', $row)"
                :text="__('Modificar Perfil')" />
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="col-12 col-md-4">
                    <p>
                        <b>{{ __('Nombre') }}</b>

                        <br>

                        {{ $row->name }}
                    </p>
                </div>

                <div class="col-12 col-md-8">
                    <p>
                        <b>{{ __('Descripción') }}</b>

                        <br>

                        {{ $row->description }}
                    </p>
                </div>
            </div>
        </x-slot>
    </x-backend.card>

    <br>

    <x-backend.card>
        <x-slot name="header">
            {{ __('Permisos Asignados') }}
        </x-slot>

        <x-slot name="headerActions"></x-slot>

        <x-slot name="body">
            <table id="tabla-permisos" class="table table-separate table-head-custom">
                <thead>
                <tr>
                    <th>{{ __('Módulo') }}</th>
                    <th>{{ __('Nombre') }}</th>
                    <th>{{ __('Descripción') }}</th>
                </tr>
                </thead>

                <tbody>
                @if($row->isAdmin() || $row->isSuperAdmin())
                    <tr>
                        <td>
                            <span class="badge badge-success bg-light-blue-a300 text-white">
                                {{ __('Todos') }}
                            </span>
                        </td>

                        <td>
                            <span class="badge badge-success bg-light-blue-a300 text-white">
                                {{ __('Todos') }}
                            </span>
                        </td>

                        <td>
                            <span class="badge badge-success bg-light-blue-a300 text-white">
                                {{ __('Todos') }}
                            </span>
                        </td>
                    </tr>
                @else
                    @foreach ($row->permissions as $permission)
                        <tr>
                            <td>
                                <strong>{{ $permission->module->name }}</strong>
                            </td>

                            <td>
                                {{ $permission->name }}
                            </td>

                            <td>
                                {{ $permission->display_name }}
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>

                <tfoot>
                    <td></td>
                    <td></td>
                    <td></td>
                </tfoot>
            </table>
        </x-slot>
    </x-backend.card>

    <br>

    <x-backend.card>
        <x-slot name="header">
            {{ __('Usuarios Asignados') }}
        </x-slot>

        <x-slot name="headerActions"></x-slot>

        <x-slot name="body">
            <div class="table-responsive">
                <table id="tabla-usuarios" class="table table-separate table-head-custom">
                    <thead>
                    <tr>
                        <th>{{ __('Nombres y Apellidos') }}</th>
                        <th>{{ __('Último inicio de sesión') }}</th>
                        <th>{{ __('Correo Electrónico') }}</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($row->users as $user)
                        <tr>
                            <td>
                                <a href="{{ route('admin.auth.user.show', $user->id) }}">{{ $user->name }}</a>
                            </td>

                            <td>
                                @if ($user->last_login_at)
                                    {{ $user->last_login_at->format(get_full_date()) }}
                                @else
                                    {{ __('No Disponible') }}
                                @endif
                            </td>

                            <td>
                                {{ $user->email }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tfoot>
                </table>
            </div>
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            $('#tabla-permisos').DataTable({
                dom: "<'row mt-4'<'col-sm-6'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                responsive: true,

                initComplete: function () {
                    this.api().columns([0]).every(function () {
                        let column = this;
                        let header = $('#tabla-permisos').DataTable().column( this.index() ).header() ;
                        let input = document.createElement("input");
                        $(input).attr('class', 'form-control');
                        $(input).attr('placeholder', $(header).html() );

                        $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                let val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search( val ? '^'+val+'$' : '', true, false ).draw();
                            });
                    });

                    this.api().columns([0]).every(function () {
                        let column = this;
                        let header = $('#tabla-permisos').DataTable().column( this.index() ).header() ;
                        let input = document.createElement("input");
                        $(input).attr('class', 'form-control');
                        $(input).attr('placeholder', $(header).html() );

                        $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                let val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? val : '', true, false).draw();
                            });

                    });

                },
                lengthMenu: [[25, 50, -1], [25, 50, '{{ __('Todos') }}']],
                columnDefs: [ {
                    targets: [2],
                    orderable: false,
                    searchable: false
                } ],
                aaSorting: [[ 0, 'asc' ]]
            });

            $('#tabla-usuarios').DataTable({
                dom: "<'row mt-4'<'col-sm-6'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                responsive: true,

                initComplete: function () {
                    this.api().columns([0]).every(function () {
                        let column = this;
                        let header = $('#tabla-usuarios').DataTable().column( this.index() ).header() ;
                        let input = document.createElement("input");
                        $(input).attr('class', 'form-control');
                        $(input).attr('placeholder', $(header).html() );

                        $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                let val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search( val ? '^'+val+'$' : '', true, false ).draw();
                            });
                    });

                    this.api().columns([0, 2]).every(function () {
                        let column = this;
                        let header = $('#tabla-usuarios').DataTable().column( this.index() ).header() ;
                        let input = document.createElement("input");
                        $(input).attr('class', 'form-control');
                        $(input).attr('placeholder', $(header).html() );

                        $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                let val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? val : '', true, false).draw();
                            });

                    });

                },
                lengthMenu: [[25, 50, -1], [25, 50, '{{ __('Todos') }}']],
                columnDefs: [ {
                    targets: [2],
                    orderable: false,
                    searchable: false
                } ],
                aaSorting: [[ 0, 'asc' ]]
            });
        });
    </script>
@endpush
