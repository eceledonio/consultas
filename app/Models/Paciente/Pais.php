<?php

namespace App\Models\Paciente;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Altek\Eventually\Eventually;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model implements Recordable
{
    use RecordableTrait,
        Eventually;

    protected $table = 'countries';


    protected $fillable = [
        'iso',
        'descripcion',
        'nacionalidad',
    ];
}
