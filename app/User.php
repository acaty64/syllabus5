<?php

namespace App;

use App\Acceso;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $appends = ['acceso'];

    protected function getAccesoAttribute()
    {
        //$val = UserAcceso::where('user_id', $this->id)->first();
        $val = $this->belongsTo(UserAcceso::class, 'id', 'user_id')->first();
        return $val->acceso;
    }

/*
    protected function getAccesoAttribute()
    {
        //$val = UserAcceso::where('user_id', $this->id)->first();
        $val = $this->belongsTo(UserAcceso::class, 'id', 'user_id');
        return $val;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
