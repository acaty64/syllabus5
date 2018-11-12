<?php

namespace App;

use App\Acceso;
use App\UserGrupo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;
    protected $appends = ['acceso', 'grupo'];

    protected function getAccesoAttribute()
    {
        //$val = UserAcceso::where('user_id', $this->id)->first();
        $val = $this->belongsTo(UserAcceso::class, 'id', 'user_id')->first();
        return $val->acceso;
    }

    protected function getUserAccesoAttribute()
    {
        //$val = UserAcceso::where('user_id', $this->id)->first();
        $val = $this->belongsTo(UserAcceso::class, 'id', 'user_id')->first();
        return $val;
    }

    protected function getGrupoAttribute()
    {
        $val = $this->belongsTo(UserGrupo::class, 'id', 'user_id')->first();
        return $val->grupo;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cod_doc'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
