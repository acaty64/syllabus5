<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cambio extends Model
{
    protected $table = "cambios";
    protected $fillable = ['descripcio','curso','ciclo','tipo','adm','con','eco','neg','fin','chg_ciclo','chg_codigo','codigo_old','nuevo','modifica','creditos', 'ht', 'hp', 'horas'];    
}
