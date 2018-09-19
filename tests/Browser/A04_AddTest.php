<?php

namespace Tests\Browser;

use App\Sumilla;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskData;
use Tests\DuskTestCase;

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
/*
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

            $selector = '.idnew.col-6';
            $error = 'Inserte el texto ACTIVIDAD.';
            $texto = 'Nueva Actividad';
            $browser->click('.btnGrabarnew')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.idnew.col-4';
            $error = 'Inserte el texto PROCEDIMENTAL.';
            $texto = 'Nuevo Procedimiento';
            $browser->click('.btnGrabarnew')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.idnew.col-2';
            $error = 'Inserte el texto CONCEPTUAL.';
            $texto = 'Nuevo Concepto';
            $browser->click('.btnGrabarnew')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.idnew.col-1';
            $texto = 1;
            $error = 'La SEMANA debe ser un número entero mayor que 0 y menor a 17.';
            $browser->click('.btnGrabarnew')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $mess = 'Contenido grabado.';
            $browser->click('.btnGrabarnew')
                    ->waitForText($mess);

        });

/*
        // ESTRATEGIAS
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->press('Estrategias')
                    ->assertSee('V. ESTRATEGIAS METODOLÓGICAS')
                    ->assertSee('Lecturas');
//                    ->click('.btnEdit3');

            $selector = '.estrategias';
            $texto = $browser->text($selector);
            $error = 'Inserte el texto.';
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

        });
        // End ESTRATEGIAS


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

        // BIBLIOGRAFIA
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->press('Bibliografias')
                    ->assertSee('VII. BIBLIOGRAFÍA')
                    ->assertSee('Autor(es)')
                    ->click('.btnEdit2');

            $selector = '.id2.col-2';
            $texto = $browser->text($selector);
            $error = 'Inserte el texto AUTOR(ES).';
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave2')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.id2.col-3';
            $texto = $browser->text($selector);
            $error = 'Inserte el texto TÍTULO.';
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave2')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.id2.col-4';
            $texto = $browser->text($selector);
            $error = 'Inserte el texto EDITORIAL.';
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave2')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.id2.col-5';
            $texto = $browser->text($selector);
            $error = 'El AÑO debe ser un número entero mayor a 1900.';
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave2')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

            $selector = '.id2.col-6';
            $texto = $browser->text($selector);
            $error = 'Inserte el texto UBICACIÓN.';
            $browser->type($selector, ' ')
                    ->assertDontSeeIn($selector, $texto)
                    ->click('.btnSave2')
                    ->waitForText($error)
                    ->waitUntilMissing('.toast', 11)
                    ->type($selector, $texto)
                    ->assertSeeIn($selector, $texto);

        });

        // End BIBLIOGRAFIA

*/
    }
}
