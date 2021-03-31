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
    </style>
@endpush

@section('content')
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
                                <h5>Motivo De Consulta</h5>
                            </div>
                        </div>

                        <div class="card-body">
                            <textarea name="motivo_consulta" id="motivo_consulta" class="form-control" rows="9" placeholder="Digite motivo aqui"></textarea>
                        </div>
                    </div>

                    <div class="card card-custom card-border mt-7 border-secondary ">
                        <div class="card-header bg-light">
                            <div class="card-title">
                                <span class="card-icon">
                                    <i class="flaticon2-correct icon-2x text-success"></i>
                                </span>
                                <h5>Signos y Sintomas</h5>
                            </div>
                        </div>

                        <div class="card-body">
                            <textarea name="antecedentes_personales" id="antecedentes_personales" class="form-control" rows="3" placeholder="Digite antecedentes personales aqui"></textarea>
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
                            <textarea name="antecedentes_familiares" id="antecedentes_familiares" class="form-control" rows="3" placeholder="Digite antecedentes aqui familiares"></textarea>
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
                            <textarea name="diagnostico" id="diagnostico" class="form-control" rows="3" placeholder="Digite el diagnostico aqui"></textarea>
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
                            <table class="table  ">
                                <tbody>
                                <tr>
                                    <td class="signosIcon"><img src="https://sga.hhm.gob.do/images/systole.svg" width="25" height="25"></td>
                                    <td class="signosTexto">P.A</td>
                                    <td class="signosInput"><input type="text" name="p.a" id="p.a" class="form-control border border-secondary"></td>
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
                                <h3 class="card-label">Signos y Sintomas</h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <textarea name="signos_sintomas" id="signos_sintomas" class="form-control" rows="3" placeholder="Digite signos y sintomas aqui"></textarea>
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
                            <textarea name=tratamiento" id="tratamiento" class="form-control" rows="3" placeholder="Digite el tratamiento"></textarea>
                        </div>
                    </div>

                </div>
            </div>

           
        </x-slot>
        <x-slot name="footer">
            <button class="btn btn-sm btn-success mr-5 ml-3 float-right" type="submit">
                 Guardar
            </button>

            <button class="btn btn-sm btn-danger   float-right" type="submit">
                 Cancelar
            </button>
        </x-slot>
    </x-backend.card>
@endsection

