<?php

namespace Tests\Unit;


use App\Acceso;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class A00_UsersTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    public function administrador_can_create_a_user()
    {
        // Usuario Administrador
        $user = $this->defaultUser();
        $userAcceso = $this->defaultUserAcceso([
                    'cod_acceso'=>'adm',
                    'user_id' => $user->id
                ]);
        $this->actingAs($user);

        $new_user = new User([
                    'name' => 'Nuevo Usuario',
                    'email' => 'usuario@gmail.com',
                    'password' => 'password'
                ]);
        $request = [
                '_token' => csrf_token(),
                'user' => $new_user
            ];
        $this->post(route('users.store'),$request);

        $this->assertDatabaseHas("users", [
            'name' => $new_user->name,
            'email' => $new_user->email,
        ]);
    }

    /** @test */
    public function administrador_can_edit_a_user()
    {
        // Usuario Administrador
        $user = $this->defaultUser();
        $userAcceso = $this->defaultUserAcceso([
                    'cod_acceso'=>'adm',
                    'user_id' => $user->id
                ]);
        $this->actingAs($user);

        $new_user = User::create([
                    'name' => 'Nuevo Usuario',
                    'email' => 'usuario@gmail.com',
                    'password' => 'password'
                ]);

        $new_user->name = 'Usuario modificado';
        $new_user->email = 'otrousuario@gmail.com';
        $request = [
                '_token' => csrf_token(),
                'user'  =>$new_user
            ];
        $this->put(route('users.update'), $request);

        $this->assertDatabaseHas("users", [
            'name' => $new_user->name,
            'email' => $new_user->email,
        ]);
    }

    /** @test */
    public function administrador_can_delete_a_user()
    {
        // Usuario Administrador
        $admin = $this->defaultUser();
        $adminAcceso = $this->defaultUserAcceso([
                    'cod_acceso'=>'adm',
                    'user_id' => $admin->id
                ]);
        $this->actingAs($admin);

        $user = User::create([
                    'name' => 'Nuevo Usuario',
                    'email' => 'usuario@gmail.com',
                    'password' => 'password'
                ]);

        $userAcceso = $this->defaultUserAcceso([
                    'cod_acceso'=>'resp',
                    'user_id' => $user->id
                ]);

        $this->get(route('users.destroy', $user->id));

        $this->assertDatabaseMissing("users", [
            'name' => $user->name,
            'email' => $user->email,
        ]);

        $this->assertDatabaseMissing("user_accesos", [
            'user_id' => $user->id,
            'acceso_id' => $userAcceso->id,
        ]);
    }
}
