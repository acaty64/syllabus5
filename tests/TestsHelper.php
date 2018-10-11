<?php

namespace Tests;

use App\Acceso;
use App\User;
use App\UserAcceso;
//use Illuminate\Support\Facades\Session;

//use Illuminate\Contracts\Console\Kernel;

trait TestsHelper
{
    protected $defaultUser;
    protected $defaultUserAcceso;
//    protected $authUser;

    public function defaultUser(array $attributes = [])
    {
        return $this->defaultUser = factory(User::class)->create($attributes);
    }

    public function defaultUserAcceso(array $attributes = [])
    {
//dd('defaultUserAcceso', $attributes);
        return $this->defaultUserAcceso = UserAcceso::create($attributes);
    }
}
