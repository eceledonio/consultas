<?php

namespace App\Models\Consulta;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Altek\Eventually\Eventually;
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
}
