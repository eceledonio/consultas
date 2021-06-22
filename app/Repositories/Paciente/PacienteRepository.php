<?php

namespace App\Repositories\Paciente;

use App\Exceptions\GeneralException;
use App\Models\Paciente\Paciente;
use App\Repositories\BaseRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Class PacienteRepository.
 */
class PacienteRepository extends BaseRepository
{
    /**
     * PacienteRepository constructor.
     *
     * @param  Paciente  $paciente
     */
    public function __construct(Paciente $paciente)
    {
        $this->model = $paciente;
    }

    /**
     * @param  array  $data
     *
     * @return Paciente
     * @throws GeneralException
     * @throws Throwable
     */
    public function store(array $data = []): Paciente
    {
        DB::beginTransaction();

        try {
            $paciente = Paciente::create([
                'nombres' => $data['nombres'],
                'apellidos' => $data['apellidos'],
                'sexo' => $data['sexo'],
                'dob' => $data['dob'],
                'pais_id' => $data['pais'],
                'direccion' => $data['direccion'],
                'celular' => $data['celular'],
                'ars_id' => $data['ars_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('Hubo un problema al crear el paciente. Inténtelo de nuevo.'));
        }

        DB::commit();

        return $paciente;
    }

    /**
     * @param Paciente $paciente
     * @param array $data
     *
     * @return Paciente
     * @throws GeneralException
     * @throws Throwable
     */
    public function update(Paciente $paciente, array $data = []): Paciente
    {
        DB::beginTransaction();

        try {
            $paciente->update([
                'nombres' => $data['nombres'],
                'apellidos' => $data['apellidos'],
                'sexo' => $data['sexo'],
                'dob' => $data['dob'],
                'pais_id' => $data['pais'],
                'direccion' => $data['direccion'],
                'celular' => $data['celular'],
                'ars_id' => $data['ars_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('Hubo un problema al modificar el usuario. Inténtelo de nuevo.'));
        }

        DB::commit();

        return $paciente;
    }

    /**
     * @param  Paciente  $paciente
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Paciente $paciente): bool
    {
        if ($paciente) {
            $paciente->delete();

            return true;
        }

        throw new GeneralException(__('Hubo un problema al intentar eliminar permanentemente este pac. Inténtelo de nuevo.'));
    }
}
