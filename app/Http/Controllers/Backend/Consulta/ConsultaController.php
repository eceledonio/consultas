<?php

namespace App\Http\Controllers\Backend\Consulta;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Models\Paciente\Paciente;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(Request $request, Paciente $paciente)
    {
        $dateOfBirth = $paciente->dob;
        $years = Carbon::parse($dateOfBirth)->age;

        $pacientes = null;

        if ($request->has('paciente') && ! empty($request->input('paciente'))) {
            $pacientes = $this->search($request->input('paciente'));
        }

        if ($request->has('paciente') && empty($request->input('paciente'))) {
            throw new GeneralException(__('Debe digitar un nombre o hcn de paciente'));
        }

        return view('backend.consulta.index', compact('pacientes'))
        ->with('years', $years);
    }

    public function create(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('backend.consulta.create')
            ->withPaciente($paciente);
    }

    private function search($param)
    {
        if (is_numeric($param)) {
            $pacientes = Paciente::where('id', '=', $param);
        } else {
            $pacientes = Paciente::where(DB::raw("CONCAT( LTRIM(RTRIM(nombres)), ' ', LTRIM(RTRIM(apellidos)) )"), 'LIKE', "%{$param}%");
        }

        $pacientes = $pacientes
            ->take(11) // obtengo 11 para decir que hay mas de 10 registros que debe refinar la busqueda
            ->orderBy('nombres', 'ASC')
            ->orderBy('apellidos', 'ASC')
            ->get();

        return $pacientes;
    }
}
