<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
	protected $table = 'generales';
	protected $fillable = [
    	'semestre', 'texto', 'modelo', 'campo', 'orden'
    ];
}
