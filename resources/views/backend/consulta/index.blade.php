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
                <div class="col-xs-12 col-lg-5">
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
                                    <div class="row ">
                                        <div class="col-xl-8">
                                            <a href="{{route('admin.consulta.create', $paciente->id)}}" class="card card-custom bg-white btn-shadow mb-3 bg-body rounded border  card-stretch gutter-b">
                                                <div class="card-body">
                                                        <i class="flaticon-avatar icon-5x text-info float-right"></i>
                                                    <div class="text-left">
                                                        <h2 class="text-info font-weight-bold">{{$paciente->id}}</h2>
                                                        <span class="text-inverse-white font-weight-bolder font-size-h6">{{$paciente->nombres}} {{$paciente->apellidos}}</span>
                                                    </div>

                                                    <div class="text-left">
                                                        <span class="text-inverse-white font-weight-bolder font-size-h9">{{$paciente->dob->format('d-m-Y')}} | </span>
                                                        <span class="text-inverse-white font-weight-bolder font-size-h9">{{$years}} años </span>
                                                    </div>

                                                    <div class="text-left">
                                                        <span class="text-inverse-white font-weight-bolder font-size-h9">{{ucwords($paciente->sexo)}}</span>
                                                    </div>
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
