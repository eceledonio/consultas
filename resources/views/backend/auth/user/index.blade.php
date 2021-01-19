@extends('backend.layout.default')

@section('title', __('Administración de usuarios'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Listado de usuarios') }}
            <small class="ml-2">{{ __('ACTIVOS') }}</small>
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="la la-plus"
                class="btn btn-light-primary font-weight-lighter mr-2"
                :href="route('admin.auth.user.create')"
                :text="__('Nuevo Usuario')"
                permission="users.create"
            />

            <x-utils.link
                class="btn btn-light-info font-weight-lighter mr-2"
                :href="route('admin.auth.user.deactivated')"
                :text="__('Usuarios Desactivados')"
                permission="users.deactivate"
            />

            <x-utils.link
                class="btn btn-light-info font-weight-lighter mr-2"
                :href="route('admin.auth.user.deleted')"
                :text="__('Usuarios Eliminados')"
                permission="users.delete"
            />
        </x-slot>

        <x-slot name="body">
            <table id="tabla-usuarios" class="table table-separate table-head-custom">
                <thead>
                <tr>
                    <th>{{ __('Nombres') }}</th>
                    <th>{{ __('Apellidos') }}</th>
                    <th>{{ __('Correo') }}</th>
                    <th>{{ __('Verificado') }}</th>
                    <th>{{ __('2FA') }}</th>
                    <th>{{ __('Perfiles') }}</th>
                    <th>{{ __('Otros Permisos') }}</th>
                    <th>{{ __('Acciones') }}</th>
                </tr>
                </thead>

                <tfoot>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tfoot>
            </table>
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            let table = $('#tabla-usuarios').DataTable({
                dom: "<'row mt-4'<'col-sm-6'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('admin.auth.user.get') }}',
                    type: 'get',
                    data: {status: 1, trashed: false},
                    error: function (xhr, err) {
                        if (err === 'parsererror')
                            location.reload();
                    }
                },
                columns: [
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'email', name: 'email'},
                    {data: 'email_verified_at', name: 'email_verified_at', className: 'text-center'},
                    {data: 'two_factor_authentications', name: 'two_factor_authentications', searchable: false, sortable: false, className: 'text-center'},
                    {data: 'roles', name: 'roles'},
                    {data: 'permissions', name: 'permissions'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false, className: 'text-center'}
                ],
                // select: true,
                responsive: true,

                initComplete: function () {
                    this.api().columns([0, 1, 2, 3]).every(function () {
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
                lengthMenu: [[15, 25, 50, -1], [15, 25, 50, '{{ __('Todos') }}']],
                columnDefs: [ {
                    targets: [7],
                    orderable: false,
                    searchable: false
                } ],
                aaSorting: [[ 0, 'asc' ]]
            });

            let buttons = new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'collection',
                        text: 'Exportar',
                        buttons: [
                            { extend: 'copy',
                                text: '{{ __('Copiar') }}',
                                key: {
                                    key: 'c',
                                    altKey: true
                                }
                            },
                            { extend: 'print',
                                text: '{{ __('Imprimir') }}'
                            },
                            'excel',
                            'csv',
                            'pdf'
                        ]
                    }
                ]
            }).container().appendTo($('#ExportButtons'));

        });
    </script>
@endpush
