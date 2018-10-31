<?php

namespace App;

use App\Grupo;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
	protected $table = 'responsable';
	protected $fillable = [
        'semestre', 'cod_doc', 'cod_grupo',
    ];

}
