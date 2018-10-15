<?php

namespace Tests\Browser;

use App\Acceso;
use App\Sumilla;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskData;
use Tests\DuskTestCase;

    /**
     * 1. Master Ok
     * 2. Administrador Ok
     * 3. Responsable Ok
     * 4. Docente Ok
     * 5. Consulta Ok
     */

class A06_MenuTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * An ERASE test.
     *
     * @return void
     */
    public function testMainMenu()
    {
        $this->artisan('db:seed');
        $this->artisan('cache:clear');

        // Menu MASTER
        $user = $this->defaultUser();
        $acceso_id = Acceso::where('cod_acceso', 'master')->first()->id;
        $userAcceso = $this->defaultUserAcceso([
                'user_id' => $user->id,
                'acceso_id' => $acceso_id 
            ]);

        $this->browse(function (Browser $browser) use ($user) {
                    
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertSee('Consulta')
                    ->assertSee('Descarga de Archivos')
                    ->click('.consulta')
                    ->click('.xCurso')
                    ->assertSee('Syllabus por Curso')
                    ->click('.consulta')
                    ->click('.malla')
                    ->assertSee('Administración')
                    ->assertSee('Contabilidad')
                    ->assertSee('Economía')
                    ->click('.consulta')
                    ->click('.xGrupo')
                    ->assertSee('Visualización o Edición de Syllabus')
                    ->click('.download')
                    ->assertSee('Descarga de Syllabus por Grupo Temático')
                    ;
        });

        // Menu ADMINISTRADOR
        $user = $this->defaultUser();
        $acceso_id = Acceso::where('cod_acceso', 'adm')->first()->id;
        $userAcceso = $this->defaultUserAcceso([
                'user_id' => $user->id,
                'acceso_id' => $acceso_id 
            ]);

        $this->browse(function (Browser $browser) use ($user) {
                    
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertSee('Consulta')
                    ->assertSee('Descarga de Archivos')
                    ;
        });

        // Menu RESPONSABLE
        $user = $this->defaultUser();
        $acceso_id = Acceso::where('cod_acceso', 'resp')->first()->id;
        $userAcceso = $this->defaultUserAcceso([
                'user_id' => $user->id,
                'acceso_id' => $acceso_id 
            ]);

        $this->browse(function (Browser $browser) use ($user) {
                    
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertSee('Consulta')
                    ->assertDontSee('Descarga de Archivos')
                    ;

        });

        // Menu DOCENTE
        $user = $this->defaultUser();
        $acceso_id = Acceso::where('cod_acceso', 'doc')->first()->id;
        $userAcceso = $this->defaultUserAcceso([
                'user_id' => $user->id,
                'acceso_id' => $acceso_id 
            ]);

        $this->browse(function (Browser $browser) use ($user) {
                    
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertSee('Consulta')
                    ->assertDontSee('Descarga de Archivos')
                    ;

        });

        // Menu CONSULTA
        $user = $this->defaultUser();
        $acceso_id = Acceso::where('cod_acceso', 'cons')->first()->id;
        $userAcceso = $this->defaultUserAcceso([
                'user_id' => $user->id,
                'acceso_id' => $acceso_id 
            ]);

        $this->browse(function (Browser $browser) use ($user) {
                    
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertSee('Consulta')
                    ->assertDontSee('Descarga de Archivos')
                    ;

        });


    }
}
