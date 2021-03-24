<?php

namespace App\Models\Paciente;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Altek\Eventually\Eventually;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paciente extends Model implements Recordable
{
    use RecordableTrait,
        Eventually;

    protected $table = 'pacientes';

    protected $fillable = [
        'nombres',
        'apellidos',
        'sexo',
        'dob',
        'pais_id',
        'direccion',
        'celular',
        'ars_id',
    ];

    protected $dates = [
        'dob',
    ];

    /**
     * @return BelongsTo
     */
    public function pais(): BelongsTo
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }

    public function aseguradora(): BelongsTo
    {
        return $this->belongsTo(Seguro::class, 'ars_id');
    }
}
