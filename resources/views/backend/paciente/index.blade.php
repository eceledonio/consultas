@extends('backend.layout.default')

@section('title', __('Administración de usuarios'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Listado de pacientes') }}
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="la la-plus"
                class="btn btn-light-primary font-weight-lighter mr-2"
                :href="route('admin.paciente.create')"
                :text="__('Nuevo paciente')" />
        </x-slot>

        <x-slot name="body">
            <table id="tabla-pacientes" class="table table-separate table-head-custom">
                <thead>
                <tr>
                    <th>{{ __('Record No.') }}</th>
                    <th>{{ __('Nombres') }}</th>
                    <th>{{ __('Apellidos') }}</th>
                    <th>{{ __('Sexo') }}</th>
                    <th>{{ __('Edad') }}</th>
                    <th>{{ __('Pais') }}</th>
                    <th>{{ __('Celular') }}</th>
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
            let table = $('#tabla-pacientes').DataTable({
                dom: "<'row mt-4'<'col-sm-6'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('admin.paciente.get') }}',
                    type: 'get',
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nombres', name: 'nombres'},
                    {data: 'apellidos', name: 'apellidos'},
                    {data: 'sexo', name: 'sexo'},
                    {data: 'dob', name: 'dob'},
                    {data: 'pais_id', name: 'pais.descripcion'},
                    {data: 'celular', name: 'celular'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false, className: 'text-center'}
                ],
                // select: true,
                responsive: true,

                initComplete: function () {
                    this.api().columns([0, 1, 2, 3, 4, 5, 6]).every(function () {
                        let column = this;
                        let header = $('#tabla-pacientes').DataTable().column( this.index() ).header() ;
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

