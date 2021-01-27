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
            </x-slot>

            <x-slot name="body">

                <div class="row">

                    <div class="col-6">
                        <div class="form-group">
                            <label>Nombres
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nombres" placeholder="Nombres" value="{{ old('nombres') }}">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Apellidos
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-6">
                        <label for="sexo">Sexo<span class="text-danger">*</span></label>
                        <select class="form-control" name="sexo" id="sexo">
                            <option value="masculino" {{ old('sexo') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="femenino" {{ old('sexo') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Fecha de nacimiento
                                <span class="text-danger">*</span></label>
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
                            <label>Pais de nacimento
                                <span class="text-danger">*</span>
                            </label>
                            {{ html()->select('pais', $paises->pluck('descripcion', 'id'))
                                ->class('form-control selectpicker')
                                ->placeholder('Seleccione un pais')
                                ->id('paises')->attribute('data-live-search', true) }}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="{{ old('direccion') }}">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-6">
                        <div class="form-group">
                            <label>Celular</label>
                            <input type="text" class="form-control celular" name="celular" value="{{ old('celular') }}">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label>ARS</label>
                            {{ html()->select('ars_id', $seguros->pluck('nombre', 'id'))
                                ->class('form-control selectpicker')
                                ->placeholder('Seleccionar ARS')
                                ->id('seguros')
                                ->attribute('data-live-search', true) }}

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
