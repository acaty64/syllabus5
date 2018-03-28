<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
	protected $fillable = [
	    'semestre', 'cod_curso', 'tipo', 'subtipo', 'texto', 'orden',
    ];
}
