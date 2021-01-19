@extends('backend.layout.default')

@section('title', appName() . ' | ' . __('Administración de Copias de Seguridad'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Administración de Copias de Seguridad') }}
        </x-slot>

        <x-slot name="headerActions">
            <a id="create-new-backup-button" href="{{ route('admin.backup.create') }}" class="btn btn-dark btn-elevate btn-icon-sm ladda-button mr-2" style="padding: 4px 6px !important;" data-toggle="tooltip" title="{{ __('Crear Nueva Copia de Seguridad') }}">
                <span class="ladda-label">
                    <i class="la la-plus"></i>
                    {{ __('Crear una copia de seguridad') }}
                </span>
            </a>
        </x-slot>

        <x-slot name="body">
            <input type="hidden" id="BackupQty" value="{{ count($backups) }}" />
            <div id="content">
                @if (count($backups) > 0)
                    <div class="table-responsive">
                        <table id="table-backups" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>{{ __('Ubicación') }}</th>
                                <th>{{ __('Fecha') }}</th>
                                <th>{{ __('Tamaño del fichero') }}</th>
                                <th class="w-20">&nbsp;</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($backups as $k => $b)
                                <tr>
                                    <th class="text-center" scope="row">{{ $k+1 }}</th>
                                    <td>{{ $b['disk'] }}</td>
                                    <td>{{ \Carbon\Carbon::createFromTimeStamp($b['last_modified'])->tz($logged_in_user->timezone)->format(get_full_date()) }}</td>
                                    <td>{{ round((int)$b['file_size']/1048576, 2).' MB' }}</td>
                                    <td class="text-center">
                                        @if ($b['download'])
                                            <a class="btn btn-warning btn-icon" href="@if($logged_in_user->id == 1) {{ route('admin.backup.download') }}?disk={{ $b['disk'] }}&path={{ urlencode($b['file_path']) }}&file_name={{ urlencode($b['file_name']) }} @endif" data-toggle="kt-tooltip-desktop" data-skin="brand" title="{{ __('Descargar') }}" readonly>
                                                <i class="fas fa-cloud-download-alt"></i>
                                            </a>
                                        @endif
                                        <a class="btn btn-danger btn-icon" data-button-type="delete" href="{{ route('admin.backup.delete', $b['file_name']) }}/?disk={{ $b['disk'] }}" data-toggle="kt-tooltip-desktop" data-skin="brand" title="{{ __('Eliminar') }}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                            <tfoot>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tfoot>
                        </table>
                    </div>
                @else
                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                    <h5>{{ __('No hay copias de seguridad disponibles') }}</h5>
                @endif
            </div>
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
    <script>
        jQuery(document).ready(function($) {
            var backupQuantity = parseInt($('#BackupQty').val());
            // capture the Create new backup button
            $("#create-new-backup-button").click(function(e) {
                e.preventDefault();
                var create_backup_url = $(this).attr('href');
                // Create a new instance of ladda for the specified button
                var l = Ladda.create( document.querySelector( '#create-new-backup-button' ) );
                // Start loading
                l.start();

                Swal.fire({
                    title: 'Proceso iniciado...',
                    html: 'Se ha iniciado el proceso de copia de seguridad.',
                    timer: 4000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    icon: 'success'
                });

                // Will display a progress bar for 10% of the button width
                l.setProgress( 0.1 );
                setTimeout(function(){ l.setProgress( 0.3 ); }, 2000);
                // do the backup through ajax
                $.ajax({
                    url: create_backup_url,
                    type: 'PUT',
                    success: function(result) {
                        l.setProgress( 0.9 );
                        // Show an alert with the result
                        if (result.indexOf('failed') >= 0) {
                            Swal.fire({
                                title: 'Estamos presentando problemas',
                                html: 'La copia de seguridad puede que no se haya realizado. Por favor verifica los logs para más detalles.',
                                timer: 4000,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                icon: 'warning'
                            });
                        } else {
                            Swal.fire({
                                title: 'Se ha completado la copia de seguridad',
                                html: 'Recargando la página en 3 segundos.',
                                timer: 3000,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                icon: 'success'
                            });
                        }
                        // Stop loading
                        l.setProgress( 1 );
                        l.stop();
                        // refresh the page to show the new file
                        setTimeout(function(){ location.reload(); }, 3000);
                    },
                    error: function(result) {
                        l.setProgress( 0.9 );
                        // Show an alert with the result
                        Swal.fire({
                            title: 'Error al realizar la copia de seguridad',
                            html: 'La copia de seguridad no se pudo crear.',
                            timer: 4000,
                            timerProgressBar: true,
                            showConfirmButton: false,
                            icon: 'warning'
                        });
                        // Stop loading
                        l.stop();
                    }
                });
            });

            // capture the delete button
            $("[data-button-type=delete]").click(function(e) {
                e.preventDefault();

                const delete_url = $(this).attr('href');
                const delete_button = $(this);
                const title = (delete_button.attr('data-trans-title')) ? delete_button.attr('data-trans-title') : 'Está seguro que desea hacer esto?';
                const cancel = (delete_button.attr('data-trans-button-cancel')) ? delete_button.attr('data-trans-button-cancel') : 'Cancelar';
                const confirm = (delete_button.attr('data-trans-button-confirm')) ? delete_button.attr('data-trans-button-confirm') : 'Continuar';

                Swal.fire({
                    title: title,
                    showCancelButton: true,
                    confirmButtonText: confirm,
                    cancelButtonText: cancel,
                    icon: 'info'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: delete_url,
                            type: 'DELETE',
                            success: function(result) {
                                backupQuantity--;
                                // Show an alert with the result
                                Swal.fire({
                                    title: 'Confirmado',
                                    html: 'La copia de seguridad ha sido eliminada.',
                                    timer: 4000,
                                    timerProgressBar: true,
                                    showConfirmButton: false,
                                    icon: 'success'
                                });
                                // delete the row from the table
                                delete_button.parentsUntil('tr').parent().remove();

                                if(backupQuantity <= 0) {
                                    $('#content').html(`
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                        <h5>{{ __('No hay copias de seguridad disponibles') }}</h5>
                                    `);
                                }
                            },
                            error: function(result) {
                                // Show an alert with the result
                                Swal.fire({
                                    title: 'Ups, ha ocurrido un error',
                                    html: 'La copia de seguridad no se pudo eliminar.',
                                    timer: 4000,
                                    timerProgressBar: true,
                                    showConfirmButton: false,
                                    icon: 'warning'
                                });
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'La operación ha sido cancelada',
                            html: 'La copia de seguridad no ha sido eliminada.',
                            timer: 4000,
                            timerProgressBar: true,
                            showConfirmButton: false,
                            icon: 'info'
                        });
                    }

                });
            });

            let table = $('#table-backups').DataTable({
                dom: "<'row mt-4'<'col-sm-6'l><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                "columnDefs": [ {
                    "targets": 4,
                    "orderable": false
                } ],
                "aaSorting": [[ 2, "desc" ]],
                initComplete: function () {
                    this.api().columns([0, 1, 2]).every(function () {
                        let column = this;
                        let holder = '{{ __('Buscar') }}';
                        let header = $('#table-backups').DataTable().column( this.index() ).header() ;
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
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, '{{ __('Todos') }}']],
            });

                @if($count > 0)
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
            @endif
        });
    </script>
@endpush
