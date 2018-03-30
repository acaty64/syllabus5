<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
	protected $fillable = [
		'semestre', 
		'cod_curso', 
		'semana',
		'texto',
		'logro',
		'orden',		
    ];
}
