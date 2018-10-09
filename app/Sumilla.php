<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumilla extends Model
{
    protected $fillable = [
        'plan', 'cod_curso', 'texto', 'orden',
    ];
}
