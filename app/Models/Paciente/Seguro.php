<?php

namespace App\Models\Paciente;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $table = 'seguros';


    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}

