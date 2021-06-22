<?php

namespace App\Models\Consulta;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Altek\Eventually\Eventually;
use App\Models\Paciente\Paciente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model implements Recordable
{
    use RecordableTrait,
        Eventually,
        SoftDeletes;

    protected $table = 'consultas';

    protected $fillable = [
        'paciente_id',
        'motivo_consulta',
        'pa',
        'temperatura',
        'frecuencia_cardiaca',
        'frecuencia_respiratoria',
        'saturacion_oxigeno',
        'talla',
        'peso',
        'signos_sintomas',
        'diagnostico',
        'tratamiento',
        'plan',
    ];

    protected $casts = [
        'paciente_id' => 'integer',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
