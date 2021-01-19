@extends('backend.layout.default')

@section('title', __('Administración de Perfiles'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Administración de Perfiles') }}
            <small class="ml-2">{{ __('ACTIVOS') }}</small>
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="la la-plus"
                class="btn btn-light-primary font-weight-lighter mr-2"
                :href="route('admin.auth.role.create')"
                :text="__('Nuevo Perfil')" />
        </x-slot>

        <x-slot name="body">
            <table id="tabla-perfiles" class="table table-separate table-head-custom">
                <thead>
                <tr>
                    <th>{{ __('Perfil') }}</th>
                    <th>{{ __('Número de Usuarios') }}</th>
                    <th>{{ __('Acciones') }}</th>
                </tr>
                </thead>

                <tbody>
                @foreach($roles as $role)
                    @if($role->id === 1 && !in_array(1, $userRoles, true) )
                        @continue
                    @endif
                    <tr>
                        <td class="align-middle">
                            {{ ucwords($role->name) }}
                        </td>

                        <td class="align-middle">
                            {{ $role->users->count() }} {{ trans_choice('{1} Usuario|[2,*] Usuarios', $role->users->count()) }}
                        </td>

                        <td class="align-middle">
                            @include('backend.auth.role.includes.actions', ['role' => $role])
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
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            let table = $('#tabla-perfiles').DataTable({
                dom: "<'row mt-4'<'col-sm-6'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                responsive: true,

                initComplete: function () {
                    this.api().columns([0]).every(function () {
                        let column = this;
                        let header = $('#tabla-perfiles').DataTable().column( this.index() ).header() ;
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
                        let header = $('#tabla-perfiles').DataTable().column( this.index() ).header() ;
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
                lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, '{{ __('Todos') }}']],
                columnDefs: [ {
                    targets: [2],
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
