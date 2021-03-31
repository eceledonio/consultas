<?php

namespace App\Http\Controllers\Backend\Paciente;

use App\Http\Controllers\Controller;
use App\Http\Requests\PacienteRequest;
use App\Models\Paciente\Paciente;
use App\Models\Paciente\Pais;
use App\Models\Paciente\Seguro;
use App\Repositories\Paciente\PacienteRepository;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * @var PacienteRepository
     */
    protected $pacienteRepository;


    /**
     * UserController constructor.
     *
     * @param  PacienteRepository  $pacienteRepository
     */
    public function __construct(PacienteRepository $pacienteRepository)
    {
        $this->pacienteRepository = $pacienteRepository;
    }

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

//        $paises = Pais::pluck('descripcion', 'id')->toArray();
        $paises = Pais::pluck('descripcion', 'id')->toArray();
        //$paises = Pais::all();
        $seguros = Seguro::all();

        return view('backend.paciente.create', compact('paises', 'seguros', 'page_title', 'page_description'));
    }

    public function store(PacienteRequest $request)
    {
        $this->pacienteRepository->store($request->all());

        return redirect()->route('admin.paciente.index')->withFlashSuccess(__('El paciente se ha creado correctamente.'));
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

    public function edit(Paciente $paciente)
    {
        //dd($paciente->dob);

        $page_title = __('Administración de paciente');
        $page_description = __('Actualizando paciente :nombres', ['nombres' => $paciente->nombres]);

        $paises = Pais::all();
        $seguros = Seguro::all();

        return view('backend.paciente.edit', compact('paises', 'seguros'))
            ->withPaciente($paciente)
            ->with('page_title', $page_title)
            ->with('page_description', $page_description);
    }

    public function update(PacienteRequest $request, Paciente $paciente)
    {
        $this->pacienteRepository->update($paciente, $request->all());

        return redirect()->route('admin.paciente.edit', $paciente)->withFlashSuccess(__("El usuario $paciente->nombres fue actualizado correctamente."));
    }

    public function delete(Paciente $paciente)
    {
        $this->pacienteRepository->destroy($paciente);

        return redirect()->route('admin.paciente.index')->withFlashSuccess(__("El paciente $paciente->nombres ha sido eliminado correctamente."));
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
