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
    <x-forms.post :action="route('admin.paciente.store')">
        <x-backend.card>
            <x-slot name="header">
                Registro de Pacientes
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
                                ->placeholder(__('Nombres'))
                                ->attribute('maxlength', 70)
                                ->autofocus() }}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Apellidos'))->for('apellido') }}
                            {{ html()->text('apellidos')
                                ->class('form-control')
                                ->placeholder(__('Apellidos'))
                                ->attribute('maxlength', 70) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        {{ html()->label(__('Sexo'))->for('sexo') }}
                        {{ html()->select('sexo')->options(['masculino' => 'Masculino', 'femenino' => 'Femenino'])
                            ->class('form-control')
                            ->placeholder(__('Seleccione el sexo'))
                            ->id('sexo') }}
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" id="dob" readonly="readonly" name="dob" placeholder="Seleccione una fecha">
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
                            {{ html()->select('pais', $paises, null)
                                ->class('form-control select2')
                                ->placeholder(__('Seleccione'))
                                ->id('paises')}}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Dirección'))->for('direccion')}}
                            {{ html()->text('direccion')
                                ->class('form-control')
                                ->placeholder(__('Dirección'))
                                ->attribute('maxlength', 70) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->label(__('Celular'))->for('celular')}}
                            {{ html()->text('celular')
                                ->class('form-control celular')
                                ->attribute('maxlength', 70) }}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>ARS</label>
                            {{ html()->select('ars_id', $seguros->pluck('nombre', 'id'))
                                ->class('form-control select2')
                                ->placeholder(__('Seleccione'))
                                ->id('seguros')}}
                        </div>
                    </div>
                </div>

            </x-slot>
            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">
                    Guardar
                </button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            // $.fn.selectpicker.Constructor.BootstrapVersion = '4';
            $('#dob').pickadate({
                format: 'd !de mmmm !de yyyy',
                formatSubmit: 'yyyy-mm-dd',
                hiddenName: true,
                firstDay: 1,
                selectMonths: true,
                selectYears: 18,
                max: true,
                monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'],
                weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                weekdaysShort: ['dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb'],
                today: 'Hoy',
                clear: 'Borrar',
                close: 'Cerrar',
            });
            @if(old('dob','') != '')
            var picker = $('#dob').pickadate('picker')
            picker.set('select', '{{ old('dob') }}', {format: 'yyyy-mm-dd'});
            @endif

            // $('.pais').selectpicker({
            //     dropupAuto: false
            // });

            // $('#seguros').selectpicker({
            //     dropupAuto: false
            // });
            $(".celular").inputmask("mask", {
                mask: "(999) 999-9999"
            });

            $('select').change(function() {
                if ($(this).children('option:first-child').is(':selected')) {
                    $(this).addClass('placeholder');
                } else {
                    $(this).removeClass('placeholder');
                }
            });

        });
    </script>
@endpush
