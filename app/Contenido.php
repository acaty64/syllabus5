<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
	protected $fillable = [
	    'semestre', 
	    'cod_curso', 
	    'semana', 
	    'concepto', 
	    'procedimiento', 
	    'actividad', 
	    'orden'
    ];
}
