<?php

namespace App\Http\Controllers;

use App\Acceso;
use App\User;
use App\UserAcceso;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::where('id','>',3)->paginate(10);
        return view('app.users.index')
                ->with('users', $users);
    }

    public function password($user_id)
    {
        dd('UserController.password');
    }

    public function acceso($user_id)
    {
        dd('UserController.acceso');
    }

    public function create()
    {
        dd('UserController.create');
    }

    public function store(Request $request)
    {
        $user = $request->user;
        $new_user = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt($user->password)
            ]);
        flash('El usuario ' . $user->name . ' ha sido creado con éxito.')->success();
        return redirect()->route('users.index');
    }

    public function show($user_id)
    {
        //
    }

    public function edit($user_id)
    {
        $user = User::findOrFail($user_id);
        return redirect()->route('users.edit');
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->user->id);
        $user->name = $request->user->name;
        $user->email = $request->user->email;
        $user->save();
        flash('El usuario ' . $request->user->name . ' ha sido modificado con éxito.')->success();
        return redirect()->route('users.index');
    }

    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);
        $acceso = UserAcceso::where('user_id', $user_id)->first();
        $acceso->delete();
        $user->delete();
        flash('El usuario ' . $user->name . ' ha sido eliminado con éxito.')->success();
        return redirect()->route('users.index');
    }
}
