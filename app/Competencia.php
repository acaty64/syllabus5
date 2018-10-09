<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
	protected $fillable = [
    	'plan', 'cod_curso', 'tipo', 'texto', 'orden',
    ];
}
