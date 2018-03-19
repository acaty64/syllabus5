<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
	protected $fillable = [
    	'semestre', 'cod_curso', 'tipo', 'texto', 'orden',
    ];
}
