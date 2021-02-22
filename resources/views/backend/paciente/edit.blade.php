@extends('backend.layout.default')

@section('title', __('Dashboard'))

@push('after-styles')
    <style>
        .picker__select--month, .picker__select--year {
            height: 2.50em !important;
        }
    </style>
@endpush

@section('content')
{{ html()->modelForm($paciente, 'PATCH', route('admin.paciente.update', $paciente->id))->class('form-horizontal')->open() }}
        <x-backend.card>
            <x-slot name="header">
                {{ __('Actualizar Paciente') }}
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="la la-arrow-left"
                    class="btn btn-light-danger font-weight-lighter mr-2"
                    :href="route('admin.paciente.index')"
                    :text="__('Regresar')" />
            </x-slot>

            <x-slot name="body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Nombre'))->for('nombre') }}
                            {{ html()->text('nombres')
                                ->class('form-control')
                                ->attribute('maxlength', 70)
                                ->autofocus() }}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Apellidos'))->for('apellido') }}
                            {{ html()->text('apellidos')
                                ->class('form-control')
                                ->attribute('maxlength', 70) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ html()->label(__('Sexo'))->for('sexo') }}
                        {{ html()->select('sexo')->options(['masculino' => 'Masculino', 'femenino' => 'Femenino'])
                            ->class('form-control')
                            ->id('sexo') }}
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Fecha de nacimiento'))->for('dob') }}
                            <div class="input-group date">
                                <input id="dob" class="form-control input-sm" type="text" name="dob" value="@unless(empty($paciente->dob) ){{ old('dob', $paciente->dob->format('d-m-Y')) }}@endunless" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Pais de nacimiento'))->for('pais_id') }}
                            {{ html()->select('pais', $paises->pluck('descripcion', 'id'))
                                ->class('form-control')
                                ->id('paises')->attribute('data-live-search', true) }}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Dirección'))->for('direccion')}}
                            {{ html()->text('direccion')
                                ->class('form-control')
                                ->attribute('maxlength', 70) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Celular'))->for('celular')}}
                            {{ html()->text('celular')
                                ->class('form-control')
                                ->attribute('maxlength', 70) }}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>ARS</label>
                            {{ html()->select('ars_id', $seguros->pluck('nombre', 'id'))
                                ->class('form-control')
                                ->id('seguros')
                                ->attribute('data-live-search', true)}}
                        </div>
                    </div>
                </div>

            </x-slot>
            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">
                    {{ __('Actualizar Paciente') }}
                </button>
            </x-slot>
        </x-backend.card>
        {{ html()->closeModelForm() }}
@endsection

@push('after-scripts')
    <script>
        $.fn.selectpicker.Constructor.BootstrapVersion = '4';
        $('#dob').pickadate({
            format: 'd !de mmmm !de yyyy',
            formatSubmit: 'yyyy-mm-dd',
            hiddenName: true,
            firstDay: 1,
            selectMonths: true,
            selectYears: 18,
            max:true,
            monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
            monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
            weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
            weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
            today: 'Hoy',
            clear: 'Borrar',
            close: 'Cerrar',
        });
        @if(old('dob','') != '')
            var picker = $('#dob').pickadate('picker')
            picker.set('select', '{{ old('dob') }}', { format: 'yyyy-mm-dd' });
        @endif

        $('#paises').selectpicker({
            dropupAuto: false
        });

        $('#seguros').selectpicker({
            dropupAuto: false
        });
        $(".celular").inputmask("mask", {
            mask: "(999) 999-9999"
        });
    </script>
@endpush
