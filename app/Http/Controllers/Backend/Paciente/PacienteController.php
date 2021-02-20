<?php

namespace App\Http\Controllers\Backend\Paciente;

use App\Http\Controllers\Controller;
use App\Http\Requests\PacienteRequest;
use App\Models\Paciente\Paciente;
use App\Models\Paciente\Pais;
use App\Models\Paciente\Seguro;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;

class PacienteController extends Controller
{
    public function getDataTables(Request $request)
    {
        return Datatables::of($this->getForDataTable())
            ->escapeColumns(['nombres'])
            ->editColumn('dob', function ($paciente) {
                $dateOfBirth = $paciente->dob;
                $years = Carbon::parse($dateOfBirth)->age;

                return $years;
            })
            ->editColumn('pais_id', function ($paciente) {
                return $paciente->pais->descripcion;
            })
            ->addColumn('actions', function ($paciente) {
                return view('backend.paciente.includes.actions', ['paciente' => $paciente]);
            })
            ->make(true);
    }

    public function index()
    {
        $page_title = __('Administración de pacientes');
        $page_description = __('Listado de paciente');

        $pacientes = Paciente::all();

        return view('backend.paciente.index', compact('pacientes', 'page_description', 'page_title'));
    }

    public function create()
    {
        $page_title = __('Administración de pacientes');
        $page_description = __('Nuevo Paciente');

        $paises = Pais::all();
        $seguros = Seguro::all();

        return view('backend.paciente.create', compact('paises', 'seguros', 'page_title', 'page_description'));
    }

    public function store(PacienteRequest $request)
    {

        //dd($request->all());
        $paciente = new Paciente();
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->sexo = $request->sexo;
        $paciente->dob = $request->dob;
        $paciente->pais_id = $request->pais;
        $paciente->direccion = $request->direccion;
        $paciente->celular = $request->celular;
        $paciente->ars_id = $request->ars_id;

        $paciente->save();

        return redirect()->route('admin.paciente.create')->withFlashSuccess(__('El paciente se ha creado correctamente.'));
    }

    public function show(Paciente $paciente)
    {
        $page_title = __('Administración de paciente');
        $page_description = __('Visualizando paciente :nombres', ['nombres' => $paciente->nombres]);
        $dateOfBirth = $paciente->dob;
        $years = Carbon::parse($dateOfBirth)->age;

        return view('backend.paciente.show')
            ->withPaciente($paciente)
            ->with('page_title', $page_title)
            ->with('page_description', $page_description)
            ->with('years', $years);
    }

    public function getForDataTable()
    {
        $dataTableQuery = Paciente::with('pais', 'aseguradora')
            ->select([
                'pacientes.*',
            ]);

        return $dataTableQuery;
    }
}
