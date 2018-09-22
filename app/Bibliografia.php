<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliografia extends Model
{
	protected $fillable = [
    	'semestre', 
    	'cod_curso',
    	'tipo', 
    	'autor',
    	'titulo',
    	'editorial',
    	'year', 
    	'codigo',
    	'orden',
    ];
}
