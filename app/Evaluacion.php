<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
	protected $table = 'evaluaciones';
	protected $fillable = [
    	'semestre', 'cod_curso', 'texto', 'porcentaje', 'semana',
    ];
}
