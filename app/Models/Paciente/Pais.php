<?php

namespace App\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'countries';


    protected $fillable = [
        'iso',
        'descripcion',
        'nacionalidad',
    ];
}

