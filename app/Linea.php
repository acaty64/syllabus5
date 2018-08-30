<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
	protected $table = 'lineas';
	protected $fillable = [
        'row',
		'col',
        'cols',
        'align',
        'offset',
        'texto',
        'tipo',
        'subtipo',
        'html'		
    ];
}
