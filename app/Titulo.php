<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
	protected $fillable = [
	    'plan', 'tipo', 'subtipo', 'texto', 'orden',
    ];
}
