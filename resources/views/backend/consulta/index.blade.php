@extends('backend.layout.default')

@section('title', __('Administrar Consultas'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Consulta Médica') }}
        </x-slot>

        <x-slot name="headerActions">

        </x-slot>
        <x-slot name="body">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
                    <div class="panel panel-default">
                        <form action="" method="GET">
                            <div class="form-group">
                                <label>Buscar Paciente</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="paciente" placeholder="Digite el Record" />

                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        @if ($pacientes)
                            <hr />
                            @if ($pacientes->count() > 0)
                                @foreach ($pacientes as $paciente)
                                    <div class="row">
                                        <div class="col-xl-10">
                                            <a href="#" class="card card-custom bg-secondary card-stretch gutter-b">
                                                <div class="card-body">
                                                    <i class="flaticon2-user icon-3x text-dark"></i>
                                                    <small class="text-inverse-white font-weight-bolder font-size-h5 mb-2 mt-5">{{$paciente->id}}  </small>
                                                    <small class="text-inverse-white font-weight-bolder font-size-h6 mb-2 mt-5">{{$paciente->nombres}} {{$paciente->apellidos}} </small>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                @endforeach
                            @else
                                <div class="text-center">No se ha encontrado un paciente con el parametro de busqueda digitado.</div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endsection