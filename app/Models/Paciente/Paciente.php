<?php

namespace App\Models\Paciente;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Altek\Eventually\Eventually;
//use App\Models\Consulta\Consulta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Consulta\AntecedenteFamiliar;
use App\Models\Consulta\AntecedentePersonal;

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

    protected $with = [
      'antecedentesPesonales',
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

    public function antecedentesFamiliares()
    {
        return $this->hasMany(AntecedenteFamiliar::class);
    }

    public function antecedentesPesonales()
    {
        return $this->hasMany(AntecedentePersonal::class);
    }


}
