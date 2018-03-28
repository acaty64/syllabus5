<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumilla extends Model
{
    protected $fillable = [
        'semestre', 'cod_curso', 'tipo', 'texto', 'orden',
    ];
}
