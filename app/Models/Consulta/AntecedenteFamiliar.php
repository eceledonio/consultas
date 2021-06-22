<?php

namespace App\Models\Consulta;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Altek\Eventually\Eventually;
use App\Models\Paciente\Paciente;
use Illuminate\Database\Eloquent\Model;

class AntecedenteFamiliar extends Model implements Recordable
{
    use RecordableTrait,
        Eventually;

    protected $table = 'antecedentes_familiares';

    protected $fillable = [
        'paciente_id',
        'consulta_id',
        'diagnostico',
        'parentesco',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
