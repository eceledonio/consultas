@extends('backend.layout.default')

@section('title', __('Administración de Eventos') . ' | ' . __('Listado de Eventos'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Administración de Eventos') }} <small class="text-muted">{{ __('Listado de Eventos') }}</small>
        </x-slot>

        <x-slot name="headerActions">
        </x-slot>

        <x-slot name="body">
            <div class="table-responsive">
                <table class="table table-separate table-head-custom" id="tabla-logs">
                    <thead>
                    <tr>
                        <th class="w-10"></th>
                        <th class="text-center">{{ __('ID DE REGISTRO') }}</th>
                        <th>{{ __('MODELO') }}</th>
                        <th class="text-center">{{ __('TIPO') }}</th>
                        <th class="text-center">{{ __('USUARIO') }}</th>
                        <th class="text-center">{{ __('USUARIO IP') }}</th>
                        <th class="w-10">{{ __('FECHA') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($logs->count() > 0)
                        @foreach($logs as $log)
                            <tr>
                                <td class="text-center">
                                    @include('backend.logs.includes.actions', ['log' => $log])
                                </td>
                                <td class="text-center">{{ $log->recordable_id }}</td>
                                <td>{{ $log->recordable_type }}</td>
                                <td class="text-center">{{ $log->event }}</td>
                                <td class="text-center">{{ optional($log->recordableUser)->full_name }}</td>
                                <td class="text-center">{{ $log->ip_address }}</td>
                                <td>{{ $log->created_at->tz($logged_in_user->timezone)->format(get_full_date()) }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                    <tfoot>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('body').on('click' , 'a.btnDelete', function(e) {
                e.preventDefault();
                let log_id = $(this).data('log-id');
                let _selector = $('#log_'+log_id);

                Swal.fire({
                    title: "{{ __('Estás seguro que desea eliminar este registro?') }}",
                    text: "{{ __('Luego de eliminado, este no podrá ser recuperado.') }}",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: "{{ __('Sí, eliminarlo!') }}",
                    cancelButtonText: "{{ __('No, cancelar!') }}",
                    reverseButtons: true
                }).then((result) => {
                    result.value && _selector.submit();
                });
            });

            $('body').on('click' , 'a.btnDeleteAll', function(e) {
                e.preventDefault();
                let url = $(this).attr('log-id');
                let _selector = $('#deleteAll');

                Swal.fire({
                    title: "Estas seguro que desea eliminar todos los registros?",
                    text: "Luego de eliminados, estos no podrán ser recuperados.",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: "{{ __('Sí, eliminarlo!') }}",
                    cancelButtonText: "{{ __('No, cancelar!') }}",
                    reverseButtons: true
                }).then((result) => {
                    result.value && _selector.submit();
                });
            });

            let table = $('#tabla-logs').DataTable({
                dom: "<'row mt-4'<'col-sm-6'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false
                }],
                responsive: true,

                initComplete: function () {
                    this.api().columns([1, 2, 3, 4, 5, 6]).every(function () {
                        let column = this;
                        let holder = '{{ __('Buscar') }}';
                        let header = $('#tabla-logs').DataTable().column( this.index() ).header() ;
                        let input = document.createElement("input");

                        $(input).attr('class', 'form-control');
                        $(input).attr('placeholder', holder  + ' ' +  $(header).html() );
                        $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                let val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? val : '', true, false).draw();
                            });
                    });
                },
                lengthMenu: [[25, 50, -1], [25, 50, '{{ __('Todos') }}']]
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
