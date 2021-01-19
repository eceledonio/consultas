<?php

namespace App\Models\Paciente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paciente extends Model
{
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

    /**
     * @return BelongsTo
     */
    public function pais(): BelongsTo
    {
        return $this->belongsTo(Pais::class);
    }

    public function aseguradora(): BelongsTo
    {
        return $this->belongsTo(Seguro::class);
    }
}





