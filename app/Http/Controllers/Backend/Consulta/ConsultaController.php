<?php

namespace App\Http\Controllers\Backend\Consulta;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultaRequest;
use App\Models\Consulta\AntecedenteFamiliar;
use App\Models\Consulta\AntecedentePersonal;
use App\Models\Consulta\Consulta;
use App\Models\Consulta\TipoCie10;
use App\Models\Paciente\Paciente;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //dd($paciente->toArray());
        $diagnosticos = TipoCie10::all();

        return view('backend.consulta.create', compact('diagnosticos'))
                ->withPaciente($paciente);
    }

    public function store(ConsultaRequest  $request)
    {
        DB::beginTransaction();
        try {
            $consulta = new Consulta();
            $consulta->paciente_id = $request->paciente_id;
            $consulta->motivo_consulta = $request->motivo_consulta;
            $consulta->pa = $request->pa;
            $consulta->temperatura = $request->signos_temperatura;
            $consulta->frecuencia_cardiaca = $request->signos_fc;
            $consulta->frecuencia_respiratoria = $request->signos_fr;
            $consulta->saturacion_oxigeno = $request->signos_saturacion;
            $consulta->talla = $request->signos_talla_cms;
            $consulta->peso = $request->signos_peso;
            $consulta->tratamiento = $request->tratamiento;
            $consulta->plan = $request->plan;
            $consulta->save();

            /**Logica para guardar los antecedentes familiares**/
            // si tiene diagnosticos entra
            if ($request->diagnosticos_familiares) {
                foreach ($request->diagnosticos_familiares as $antecedente) {
                    $afamiliar = new AntecedenteFamiliar();
                    $afamiliar->paciente_id = $consulta->paciente_id;
                    $afamiliar->diagnostico = $antecedente['codigo'];
                    $afamiliar->parentesco = $request->parentesco;
                    $afamiliar->save();
                }
            }

            /**Logica para guardar los antecedentes familiares**/
            //si tiene diagnosticos entra
            if ($request->diagnosticos_personales) {
                foreach ($request->diagnosticos_personales as $ant) {
                    $aPersonal = new AntecedentePersonal();
                    $aPersonal->paciente_id = $consulta->paciente_id;
                    $aPersonal->diagnostico = $ant['codigo'];
                    $aPersonal->save();
                }
            }
        } catch (Exception $e) {
            \Log::error($e->getMessage());

            DB::rollBack();

            throw new GeneralException(__('Hubo un problema al guardar la historia. Inténtelo de nuevo.'));
        }

        DB::commit();

        return redirect()->route('admin.consulta.index')->withFlashSuccess(__('La historia se guardo correctamente.'));
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

    public function searchCIE10(Request $request)
    {
        $query = $request->input('q');
        $query = implode('%', explode(' ', $query));
        $list = TipoCie10::where('codigo', 'LIKE', "{$query}%")
                ->orWhere('descripcion', 'LIKE', "%{$query}%")
                ->take(30)
                ->get();

        $cie10 = [];

        if ($list->count() > 0) {
            foreach ($list as $diag) {
                $cie10[] = [
                        'id' => $diag->codigo,
                        'text' => "{$diag->descripcion} ({$diag->codigo})",
                    ];
            }
        }

        return response()->json([
                'results' => $cie10,
            ]);
    }
}
