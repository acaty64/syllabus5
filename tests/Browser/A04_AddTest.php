<?php

namespace Tests\Browser;

use App\Estrategia;
use App\Sumilla;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskData;
use Tests\DuskTestCase;

    /**
     * 1. Sumillas Ok
     * 2. Unidades Ok
     * 3. Competencias ---- REVISAR
     * 4. Contenidos Ok
     * 5. Estrategias Ok
     * 6. Evaluaciones *********** Falta
     * 7. Bibliografias *********** Falta
     */

class A04_AddTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * An ADD test.
     *
     * @return void
     */
    public function testAdd()
    {
        $this->artisan('db:seed');
        $this->artisan('cache:clear');

        $id = 1;
        $sumilla = Sumilla::findOrFail($id);
        $sumilla->delete();
        // SUMILLAS
        $this->browse(function (Browser $browser) {
            $selector = '.col-1.sumillas';
            $texto = 'El curso tiene como proposito ...';
            $mess = 'Sumilla grabada.';
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitForText('Sumillas', 10)
                    ->press('Sumillas')
                    ->assertSee('II. SUMILLA')
                    ->waitFor('.btnEditarnew')
                    ->press('Nuevo Registro')
                    ->waitFor($selector, 20)
                    ->type($selector, $texto)
                    ->waitFor('.btnGrabarnew')
                    ->press('Grabar')
                    ->waitForText($mess)
                    ->waitUntilMissing('.toast', 11)
                    ->press('Vista')
                    ->waitForText($texto);

                $this->assertDatabaseHas('sumillas', [
                        'semestre' => '20181',
                        'cod_curso' => '100048',
                        'texto' => $texto
                    ]);
        });

        // End SUMILLAS

/*
        // COMPETENCIAS
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->press('Competencias')
                    ->assertSee('III. SISTEMA DE COMPETENCIAS')
                    ->assertSee('COMPETENCIAS GENERALES')
                    ->click('.btnEdit6');

            $selector = '.id6.col-2';
            $error = 'Inserte el texto.';
            $texto = $browser->text($selector);
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto);
            $browser->click('.btnSave6')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

        });
        // End COMPETENCIAS
*/
        // UNIDADES
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitForText('Unidades', 10)
                    ->press('Unidades')
                    ->assertSee('UNIDADES')
                    ->assertSee('LA CONTABILIDAD GERENCIAL.')
                    ->click('.btnEditarnew');

            $selector = '.idnew.col-1';
            $mess = 'Unidad grabada.';
            $browser->type('.idnew.col-1', 1)
                    ->type('.idnew.col-2', 'Nuevo texto UNIDAD.')
                    ->type('.idnew.col-3', 'Nuevo texto LOGRO.')
                    ->click('.btnGrabarnew')
                    ->waitForText($mess)
                    ->waitUntilMissing('.toast', 11)
                    ->press('Vista')
                    ->script('window.scrollTo(0, 1000);');

            $browser->waitForText('NUEVO TEXTO UNIDAD.')
                    ->waitForText('Nuevo texto LOGRO.');

                $this->assertDatabaseHas('unidades', [
                        'semestre' => '20181',
                        'cod_curso' => '100048',
                        'texto' => 'NUEVO TEXTO UNIDAD.',
                        'logro' => 'Nuevo texto LOGRO.'
                    ]);
        });
        // End UNIDADES

        // CONTENIDOS

        $this->artisan('cache:clear');
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->press('Contenidos')
                    ->assertSee('CONTENIDOS')
                    ->assertSee('La contabilidad gerencial.')
                    ->waitFor('.btnEditarnew', 20)
                    ->click('.btnEditarnew');

            $selector = '.idnew.col-1';
            $texto = 5;
            $browser->type('.idnew.col-1', 5)
                    ->type('.idnew.col-2', 'Nuevo Concepto')
                    ->type('.idnew.col-4', 'Nuevo Procedimiento')
                    ->type('.idnew.col-6', 'Nueva Actividad')
                    ->click('.btnGrabarnew')
                    ->waitForText('Contenido grabado.')
                    ->waitUntilMissing('.toast', 11)
                    ->press('Vista')
                    ->script('window.scrollTo(0, 1000);');

            $browser->waitForText('Nuevo Concepto')
                    ->waitForText('Nuevo Procedimiento')
                    ->waitForText('Nueva Actividad');


            $this->assertDatabaseHas('contenidos', [
                        'semestre' => '20181',
                        'cod_curso' => '100048',
                        'concepto' => 'Nuevo Concepto',
                        'procedimiento' => 'Nuevo Procedimiento',
                        'actividad' => 'Nueva Actividad',
                    ]);
        });

        // ESTRATEGIAS
        $id = 1;
        $estrategia = Estrategia::findOrFail($id);
        $estrategia->delete();

        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->press('Estrategias')
                    ->assertSee('V. ESTRATEGIAS METODOLÓGICAS')
                    ->waitFor('.btnEditarnew', 20)
                    ->click('.btnEditarnew');

            $selector = '.estrategias';
            $texto = 'Nueva estrategia';
            $mess = 'Estrategias grabadas.';
            $browser->type($selector, $texto)
                    ->assertSeeIn($selector, $texto)
                    ->click('.btnGrabarnew')
                    ->waitForText($mess)
                    ->waitUntilMissing('.toast', 11)
                    ->press('Vista')
                    ->script('window.scrollTo(0, 2000);');

            $browser->waitForText($texto);


            $this->assertDatabaseHas('estrategias', [
                        'semestre' => '20181',
                        'cod_curso' => '100048',
                        'texto' => 'Nueva estrategia',
                    ]);        
        });
        // End ESTRATEGIAS

/*

        // EVALUACIONES
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->press('Evaluaciones')
                    ->assertSee('EVALUACIÓN')
                    ->assertSee('Evaluación')
                    ->click('.btnEdit2');

            $selector = '.id2.col-2';
            $texto = $browser->text($selector);
            $error = 'Inserte el texto EVALUACION.';
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave2')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.id2.col-3';
            $texto = $browser->text($selector);
            $error = 'El PORCENTAJE debe ser un número entero mayor a 0.';
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave2')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.id2.col-4';
            $texto = $browser->text($selector);
            $error = 'La SEMANA debe ser un número entero menor a 17.';
            $browser->type($selector, '17')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave2')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

        });
        // End EVALUACIONES
*/

        // BIBLIOGRAFIA
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->press('Bibliografias')
                    ->assertSee('VII. BIBLIOGRAFÍA')
                    ->assertSee('Autor(es)')
                    ->click('.btnEditarnew');

            $browser
                    ->type('.idnew.col-1', 'Nuevo autor')
                    ->type('.idnew.col-2', 'Nuevo titulo')
                    ->type('.idnew.col-3', 'Nuevo editorial')
                    ->type('.idnew.col-4', '2016')
                    ->type('.idnew.col-5', 'UCSSxxx')
                    ->click('.btnGrabarnew')
                    ->waitForText('Bibliografía grabada.')
                    ->waitUntilMissing('.toast', 11)
                    ->press('Vista')
                    ->script('window.scrollTo(0, 2500);');

            $browser->waitForText('Nuevo autor');

            $this->assertDatabaseHas('bibliografias', [
                        "cod_curso"=> "100048",
                        "semestre"=>"20181",
                        "autor" => "Nuevo autor",
                        "titulo" => "Nuevo titulo",
                        "editorial" => "Nuevo editorial",
                        "year" => "2016",
                        "codigo" => "UCSSxxx",
                    ]);

        });

        // End BIBLIOGRAFIA

    }
}
