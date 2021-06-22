@extends('backend.layout.default')

@section('title', __('Administrar Consultas'))

@push('after-styles')
    <style>
        .signosIcon {
            width: 50px;
        }
        .signosTexto {
            padding-top: 10px !important;
            font-size: medium;
        }
        .signosInput{
            padding-left: 5px;
            padding-right: 5px;
            width: 100px;
        }

        .signosHelper{
            width: 80px;
            font-size: revert;
            font-weight: 200;
            padding-left: 5px;
            padding-top: 20px !important;
        }

        /*css personalozado*/
        .card-body .table{
            margin-bottom: 0;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('plugins/custom/bootstrap-select-ajax/ajax-bootstrap-select.min.css') }}">
@endpush

@section('content')
    <x-forms.post :action="route('admin.consulta.store')">
        <x-backend.card>
            <x-slot name="header">
                {{ __('Historial Clinico') }}
            </x-slot>

            <x-slot name="headerActions">

            </x-slot>
            <x-slot name="body">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="card card-custom card-border mt-9 border-secondary ">
                            <div class="card-header bg-light">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-correct icon-2x text-success"></i>
                                    </span>
                                    <h5>Antecedentes Familiares</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div id="antecedentes_familiares" class="col-12">

                                        <div class="form-group">
                                            <label class="font-size-16">Parentesco</label>
                                            <input name="parentesco" type="text" class="form-control"  placeholder=""/>
                                        </div>

                                        <div class="panel panel-default">
                                            <label class="font-size-16">Diagnostico</label>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <select class="form-control cie10" data-placeholder="Digite c&oacute;digo CIE10 o Descripci&oacute;n..." data-table="diagnosticos_familiares" style="width: 100%;">
                                                        <option value=""></option>
                                                    </select>
                                                </div>

                                                <table class="table table-bordered table-hover rounded" id="diagnosticos_familiares">
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="card card-custom card-border mt-9 border-secondary ">
                            <div class="card-header bg-light">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-correct icon-2x text-success"></i>
                                    </span>
                                    <h5>Antecedentes Personales</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div id="antecedentes_personales" class="col-12">
                                        <div class="panel panel-default">
                                            <label class="font-size-16">Diagnostico</label>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <select id="diagnosticos_personales" class="form-control select2" data-placeholder="Digite c&oacute;digo CIE10 o Descripci&oacute;n..." data-table="diagnosticos_personales" style="width: 100%;">
                                                        <option value=""></option>
                                                    </select>
                                                </div>

                                                <table class="table table-bordered table-hover rounded" id="diagnosticos_personales">
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="card card-custom card-border mt-9 border-secondary ">
                            <div class="card-header bg-light">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-correct icon-2x text-success"></i>
                                    </span>
                                    <h5>Motivo De Consulta</h5>
                                </div>
                            </div>

                            <div class="card-body">
                                {{ html()->textarea('motivo_consulta')
                                         ->class('form-control')
                                         ->attribute('rows', '9')
                                         ->placeholder('Digite motivo aqui') }}
                            </div>
                        </div>

                        <div class="card card-custom card-border mt-7 border-secondary ">
                            <div class="card-header bg-light">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-correct icon-2x text-success"></i>
                                    </span>
                                    <h3 class="card-label">Signos y Sintomas</h3>
                                </div>
                            </div>

                            <div class="card-body">
                                {{ html()->textarea('signos_sintomas')
                                         ->class('form-control')
                                         ->attribute('rows', '3')
                                         ->placeholder('Digite signos y sintomas aqui') }}
                            </div>
                        </div>

                        <div class="card card-custom card-border mt-7 border-secondary ">
                            <div class="card-header bg-light">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-correct icon-2x text-success"></i>
                                    </span>
                                    <h3 class="card-label">Diagnostico</h3>
                                </div>
                            </div>

                            <div class="card-body">
                                {{ html()->textarea('diagnostico_consulta')
                                         ->class('form-control')
                                         ->attribute('rows', '3')
                                         ->placeholder('Digite el diagnostico aqui') }}
                            </div>
                        </div>

                        <div class="card card-custom card-border mt-7 border-secondary ">
                            <div class="card-header bg-light">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-correct icon-2x text-success"></i>
                                    </span>
                                    <h3 class="card-label">Plan</h3>
                                </div>
                            </div>

                            <div class="card-body">
                                {{ html()->textarea('plan')
                                         ->class('form-control')
                                         ->attribute('rows', '3')
                                         ->placeholder('Digite el plan a seguir aqui') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="card card-custom card-border mt-9 border-secondary ">
                            <div class="card-header bg-light">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-correct icon-2x text-success"></i>
                                    </span>
                                    <h3 class="card-label">Exploración Fisica</h3>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="signosIcon"><img src="https://sga.hhm.gob.do/images/systole.svg" width="25" height="25"></td>
                                        <td class="signosTexto">P.A</td>
                                        <td class="signosInput"><input type="text" name="pa" id="pa" class="form-control border border-secondary"></td>
                                        <td class="signosHelper">mmHg</td>
                                    </tr>

                                    <tr>
                                        <td class="signosIcon"><img src="https://sga.hhm.gob.do/images/temperature.svg" width="25" height="25"></td>
                                        <td class="signosTexto">Temperatura</td>
                                        <td class="signosInput"><input type="text" name="signos_temperatura" id="signos_temperatura" class="form-control"></td>
                                        <td class="signosHelper">°C</td>
                                    </tr>

                                    <tr>
                                        <td class="signosIcon"><img src="https://sga.hhm.gob.do/images/heart_rate.svg" width="25" height="25"></td>
                                        <td class="signosTexto">Frecuencia Cardíaca</td>
                                        <td class="signosInput"><input type="text" name="signos_fc" id="signos_fc" class="form-control"></td>
                                        <td class="signosHelper">bpm</td>
                                    </tr>

                                    <tr>
                                        <td class="signosIcon"><img src="https://sga.hhm.gob.do/images/respiratory_rate.svg" width="25" height="25"></td>
                                        <td class="signosTexto">Frecuencia Respiratoria</td>
                                        <td class="signosInput"><input type="text" name="signos_fr" id="signos_fr" class="form-control"></td>
                                        <td class="signosHelper">r/m</td>
                                    </tr>

                                    <tr>
                                        <td class="signosIcon"><img src="https://sga.hhm.gob.do/images/oxygen_saturation.svg" width="25" height="25"></td>
                                        <td class="signosTexto">Saturación de Oxígeno</td>
                                        <td class="signosInput"><input type="text" name="signos_saturacion" id="signos_saturacion" class="form-control"></td>
                                        <td class="signosHelper">%</td>
                                    </tr>
                                    <tr>
                                        <td class="signosIcon"><img src="https://sga.hhm.gob.do/images/height.svg" width="25" height="25"></td>
                                        <td class="signosTexto">Talla</td>
                                        <td class="signosInput"><input type="text" name="signos_talla_cms" id="signos_talla_cms" class="form-control"></td>
                                        <td class="signosHelper">cm</td>
                                    </tr>
                                    <tr>
                                        <td class="signosIcon"><img src="https://sga.hhm.gob.do/images/weight.svg" width="25" height="25"></td>
                                        <td class="signosTexto">Peso</td>
                                        <td class="signosInput"><input type="text" name="signos_peso" id="signos_peso" class="form-control"></td>
                                        <td class="signosHelper">Lb</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card card-custom card-border mt-7 border-secondary ">
                            <div class="card-header bg-light">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-correct icon-2x text-success"></i>
                                    </span>
                                    <h3 class="card-label">Tratamiento</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                {{ html()->textarea('tratamiento')
                                         ->class('form-control')
                                         ->attribute('rows', '3')
                                         ->placeholder('Digite el tratamiento aqui') }}
                            </div>
                        </div>

                    </div>
                </div>
                <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
            </x-slot>
            <x-slot name="footer">
                <button class="btn btn-sm btn-success mr-5 ml-3 float-right" type="submit">
                     Guardar
                </button>

                <a class="btn btn-sm btn-danger float-right" href="{{ route('admin.consulta.index') }}">Cancelar</a>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function () {
            $('.cie10').select2({
                html: true,
                ajax:{
                    url :  '{{ route('admin.get.cie10') }}',
                    dataType: 'json',
                    delay: 250,
                },
                minimumInputLength: 3,
                language: {
                    inputTooShort: function (args) {
                        // args.minimum is the minimum required length
                        // args.input is the user-typed text
                        return 'Favor digitar 3 o mas caracteres...';
                    },
                }
            });

            $('#diagnosticos_personales').select2({
                html: true,
                ajax:{
                    url :  '{{ route('admin.get.cie10') }}',
                    dataType: 'json',
                    delay: 250,
                },
                minimumInputLength: 3,
                language: {
                    inputTooShort: function (args) {
                        // args.minimum is the minimum required length
                        // args.input is the user-typed text
                        return 'Favor digitar 3 o mas caracteres...';
                    },
                }
            });

            //------------/
            //------------//

            $('.cie10').on('select2:select', function(e){
                let allowContinue = true;
                let codigo = $(this).children(':selected').val();
                let descripcion = $(this).children(':selected').text();
                let targetTable = $(this).data('table');

                $(this).val('').trigger('change');


                $.each( $(`#${targetTable} > tbody > tr`), function(k,v){
                    if($(this).data('codigo') == codigo){
                        swal("Error", "Ya ha seleccionado este diagnostico!", "error");
                        allowContinue = false;
                        return false;
                    }
                });

                if(!allowContinue){
                    return false;
                }

                $(`#${targetTable} > tbody`).append(`
                    <tr id="${targetTable}cie10${codigo}" data-codigo="${codigo}">
                        <td class="align-middle">
                            ${descripcion}
                            <input type="hidden" name="${targetTable}[${codigo}][codigo]" value="${codigo}" />
                        </td>
                        <td class="align-middle text-center"><button type="button" class="btn btn-xs red-thunderbird" onclick="$('#${targetTable}cie10${codigo}').remove();"><i class="fa fa-trash text-danger"></i></button></td>
                    </tr>
                `);
            });

            $('#diagnosticos_personales').on('select2:select', function(e){
                let allowContinue = true;
                let codigo = $(this).children(':selected').val();
                let descripcion = $(this).children(':selected').text();
                let targetTable = $(this).data('table');

                $(this).val('').trigger('change');


                $.each( $(`#${targetTable} > tbody > tr`), function(k,v){
                    if($(this).data('codigo') == codigo){
                        swal("Error", "Ya ha seleccionado este diagnostico!", "error");
                        allowContinue = false;
                        return false;
                    }
                });

                if(!allowContinue){
                    return false;
                }

                $(`#${targetTable} > tbody`).append(`
                    <tr id="${targetTable}personales${codigo}" data-codigo="${codigo}">
                        <td class="align-middle">
                            ${descripcion}
                            <input type="hidden" name="${targetTable}[${codigo}][codigo]" value="${codigo}" />
                        </td>
                        <td class="align-middle text-center"><button type="button" class="btn btn-xs red-thunderbird" onclick="$('#${targetTable}personales${codigo}').remove();"><i class="fa fa-trash text-danger"></i></button></td>
                    </tr>
                `);
            });

        });
    </script>
@endpush


