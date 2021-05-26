<?php

namespace App\Models\Consulta;


use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Altek\Eventually\Eventually;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TipoCie10 extends Model implements Recordable
{
    use RecordableTrait,
        Eventually;

    protected $table = 'tipo_cie10';


    protected $fillable = [
        'codigo',
        'descripcion',
    ];
}
