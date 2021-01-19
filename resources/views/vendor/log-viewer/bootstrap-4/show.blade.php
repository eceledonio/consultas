<?php
/**
 * @var  Arcanedev\LogViewer\Entities\Log            $log
 * @var  Illuminate\Pagination\LengthAwarePaginator  $entries
 * @var  string|null                                 $query
 */
?>

@section('title', __('Visualizando Registro') .' '. $log->date)

@extends('backend.layout.default')

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Registro') }} [{{ $log->date }}]
        </x-slot>

        <x-slot name="headerActions">
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="col-lg-2">
                    {{-- Log Menu --}}
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-fw fa-flag blue-700 mr-2"></i>
                            {{ mb_strtoupper(__('Niveles')) }}
                        </div>

                        <div class="list-group list-group-flush log-menu">
                            @foreach($log->menu() as $levelKey => $item)
                                @if ($item['count'] === 0)
                                    <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                                        <span class="level-name">
                                            {!! $item['icon'] !!} {{ $item['name'] }}
                                        </span>

                                        <span class="badge empty">
                                            {{ $item['count'] }}
                                        </span>
                                    </a>
                                @else
                                    <a href="{{ $item['url'] }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center level-{{ $levelKey }}{{ $level === $levelKey ? ' active' : ''}}">
                                        <span class="level-name">
                                            {!! $item['icon'] !!} {{ $item['name'] }}
                                        </span>

                                        <span class="badge badge-level-{{ $levelKey }}">
                                            {{ $item['count'] }}
                                        </span>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-10">
                    {{-- Log Details --}}
                    <div class="card">
                        <div class="mb-2 mt-2">
                            <div class="float-left mt-3 ml-5">
                                <strong>{{ __('Información del registro') }}:</strong>
                            </div>

                            <div class="float-right mr-2">
                                <a href="{{ route('log-viewer::logs.download', [$log->date]) }}" class="btn btn-sm btn-light-success">
                                    <i class="fa fa-download"></i> {{ __('DESCARGAR') }}
                                </a>

                                <a href="#delete-log-modal" class="btn btn-sm btn-light-danger" data-toggle="modal">
                                    <i class="fa fa-trash"></i> {{ __('ELIMINAR') }}
                                </a>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-2">
                                        {{ __('Ruta del archivo') }}:
                                    </div>

                                    <div class="col-sm-10">
                                        {{ $log->getPath() }}
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-auto">
                                        {{ __('Registros') }}: <span class="badge badge-primary">{{ $entries->total() }}</span>
                                    </div>

                                    <div class="col-sm-auto">
                                        {{ __('Tamaño') }}: <span class="badge badge-primary">{{ $log->size() }}</span>
                                    </div>

                                    <div class="col-sm-auto">
                                        {{ __('Creación') }}: <span class="badge badge-primary">{{ $log->createdAt() }}</span>
                                    </div>

                                    <div class="col-sm-auto">
                                        {{ __('Actualización') }}: <span class="badge badge-primary">{{ $log->updatedAt() }}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- Search --}}
                    <form class="p-5" action="{{ route('log-viewer::logs.search', [$log->date, $level]) }}" method="GET">
                        <div class="form-group">
                            <div class="input-group">
                                <input id="query" name="query" class="form-control" value="{{ $query }}" placeholder="{{ __('Escriba su busqueda...') }}">

                                <div class="input-group-append">
                                    @unless (is_null($query))
                                        <a href="{{ route('log-viewer::logs.show', [$log->date]) }}" class="btn btn-light-primary">
                                            ({{ __(':count resultados', ['count' => $entries->count()]) }}) <i class="fa fa-fw fa-times"></i>
                                        </a>
                                    @endunless

                                    <button id="search-btn" class="btn btn-light-primary">
                                        <span class="fa fa-fw fa-search"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    {{-- Log Entries --}}
                    @if ($entries->hasPages())
                        <div class="card-header">
                            <span class="badge badge-info float-right">
                                {{ __('Página :current de :last', ['current' => $entries->currentPage(), 'last' => $entries->lastPage()]) }}
                            </span>
                        </div>
                    @endif

                    {!! $entries->appends(compact('query'))->render() !!}

                    {{-- DELETE MODAL --}}
                    <div id="delete-log-modal" class="modal fade" data-backdrop="static" data-keyboard="false"  tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <form id="delete-log-form" action="{{ route('log-viewer::logs.delete') }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="date" value="{{ $log->date }}">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            {{ __('Eliminar Archivo de Registro') }}
                                        </h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <p>
                                            {{ __('Está seguro que desea eliminar este archivo de registro: :date ?', ['date' => $log->date]) }}
                                        </p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-secondary mr-auto" data-dismiss="modal">
                                            {{ __('Cancelar') }}
                                        </button>

                                        <button type="submit" class="btn btn-sm btn-danger" data-loading-text="{{ __('Cargando') }}&hellip;">
                                            {{ __('Eliminar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <table id="entries" class="table table-head-custom table-responsive">
                            <thead>
                            <tr>
                                <th>{{ __('Ambiente') }}</th>
                                <th>{{ __('Nivel') }}</th>
                                <th>{{ __('Hora') }}</th>
                                <th>{{ __('Cabecera') }}</th>
                                <th>{{ __('Acciones') }}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse($entries as $key => $entry)
                                <?php /** @var  Arcanedev\LogViewer\Entities\LogEntry  $entry */ ?>
                                <tr>
                                    <td class="align-middle">
                                        <span class="badge badge-env">{{ $entry->env }}</span>
                                    </td>

                                    <td class="align-middle">
                                        <span class="badge badge-level-{{ $entry->level }}">
                                            {!! $entry->level() !!}
                                        </span>
                                    </td>

                                    <td class="align-middle">
                                        <span class="badge badge-secondary">
                                            {{ $entry->datetime->setTimezone('America/Santo_Domingo')->format('H:i:s') }}
                                        </span>
                                    </td>

                                    <td class="align-middle">
                                        {{ $entry->header }}
                                    </td>

                                    <td class="align-middle text-right">
                                        @if ($entry->hasStack())
                                            <a class="btn btn-sm btn-light" role="button" data-toggle="collapse"
                                               href="#log-stack-{{ $key }}" aria-expanded="false" aria-controls="log-stack-{{ $key }}">
                                                <i class="fa fa-toggle-on"></i> {{ __('Apilar') }}
                                            </a>
                                        @endif

                                        @if ($entry->hasContext())
                                            <a class="btn btn-sm btn-light" role="button" data-toggle="collapse"
                                               href="#log-context-{{ $key }}" aria-expanded="false" aria-controls="log-context-{{ $key }}">
                                                <i class="fa fa-toggle-on"></i> {{ __('Contexto') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>

                                @if ($entry->hasStack() || $entry->hasContext())
                                    <tr>
                                        <td colspan="5" class="stack py-0">
                                            @if ($entry->hasStack())
                                                <div class="stack-content collapse" id="log-stack-{{ $key }}">
                                                    {!! $entry->stack() !!}
                                                </div>
                                            @endif

                                            @if ($entry->hasContext())
                                                <div class="stack-content collapse" id="log-context-{{ $key }}">
                                                    <pre>{{ $entry->context() }}</pre>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <span class="badge badge-secondary">
                                            {{ __('El listado de registros está vacio!') }}
                                        </span>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
    <script>
        $(function () {
            var deleteLogModal = $('div#delete-log-modal'),
                deleteLogForm  = $('form#delete-log-form'),
                submitBtn      = deleteLogForm.find('button[type=submit]');

            deleteLogForm.on('submit', function(event) {
                event.preventDefault();
                submitBtn.button('loading');

                $.ajax({
                    url:      $(this).attr('action'),
                    type:     $(this).attr('method'),
                    dataType: 'json',
                    data:     $(this).serialize(),
                    success: function(data) {
                        submitBtn.button('reset');
                        if (data.result === 'success') {
                            deleteLogModal.modal('hide');
                            location.replace("{{ route('log-viewer::logs.list') }}");
                        }
                        else {
                            alert('UPS ! Esto es una falta de excepción de café !')
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        alert('AJAX ERROR ! Mira la consola !');
                        console.error(errorThrown);
                        submitBtn.button('reset');
                    }
                });

                return false;
            });

            @unless (empty(log_styler()->toHighlight()))
            @php
                $htmlHighlight = version_compare(PHP_VERSION, '7.4.0') >= 0
                    ? join('|', log_styler()->toHighlight())
                    : join(log_styler()->toHighlight(), '|');
            @endphp

            $('.stack-content').each(function() {
                var $this = $(this);
                var html = $this.html().trim()
                    .replace(/({!! $htmlHighlight !!})/gm, '<strong>$1</strong>');

                $this.html(html);
            });
            @endunless
        });
    </script>
@endpush
