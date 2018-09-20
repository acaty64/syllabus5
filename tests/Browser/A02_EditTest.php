<?php

namespace Tests\Browser;

use Tests\DuskData;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

    /**
     * 1. Sumillas Ok
     * 2. Unidades Ok
     * 3. Competencias ---- REVISAR
     * 4. Contenidos Ok
     * 5. Estrategias ---- REVISAR
     * 6. Evaluaciones ---- REVISAR
     * 7. Bibliografias ---- REVISAR
     */

class A02_EditTest extends DuskTestCase
{

    use DatabaseMigrations;
    /**
     * An Edit test example.
     *
     * @return void
     */
    public function testEdit()
    {
        $this->artisan('db:seed');
        $this->artisan('cache:clear');
        
        // SUMILLAS
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitFor('.sumillas', 20)
                    ->press('Sumillas')
                    ->assertSee('II. SUMILLA')
                    ->assertSee('El curso tiene como propósito')
                    ->click('.btnEdit1')
                    ->waitFor('.id1.sumillas',20)
                    ->clear('.id1.sumillas')
                    ->type('.sumillas', 'xxxxx')
                    ->assertSee('xxxxx')
                    ->click('.btnSave1')
                    ->waitForText('Sumilla grabada.')
                    ->waitUntilMissing('.toast', 11);

            $this->assertDatabaseHas('sumillas', [
                        'texto' => 'xxxxx'
                    ]);
        });
        // End SUMILLAS

        // UNIDADES
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitFor('.unidades', 20)
                    ->press('Unidades')
                    ->assertSee('UNIDADES')
                    ->assertSee('LA CONTABILIDAD GERENCIAL.')
                    ->click('.btnEdit2')
                    ->clear('.id2.col-2')
                    ->type('.id2.col-2', 'yyyyy')
                    ->assertSee('yyyyy')
                    ->click('.btnSave2')
                    ->waitForText('Unidad grabada.')
                    ->assertSee('Unidad grabada.')
                    ->waitUntilMissing('.toast', 11);

        $this->assertDatabaseHas('unidades', [
                        'texto' => 'yyyyy'
                    ]);
        });
        // End UNIDADES

        // COMPETENCIAS
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitForText('Competencias', 10)
                    ->press('Competencias')
                    ->assertSee('COMPETENCIAS')
                    ->assertSee('Analiza y diagnostica los Estados financieros básicos de diferentes empresas,');
            $browser->driver->executeScript('window.scrollTo(0, 500);');
            $reg = 7;
            $col = 2;
            $selector = '.id' . $reg . '.col-' . $col; 
            $btnEdit = '.btnEdit' . $reg;
            $btnSave = '.btnSave' . $reg;
            $browser->waitFor($btnEdit)
                    ->click($btnEdit)
                    ->clear($selector)
                    ->type($selector, 'yyyyy')
                    ->assertSee('yyyyy')
                    ->click($btnSave)
                    ->waitForText('Competencia grabada.')
                    ->assertSee('Competencia grabada.')
                    ->waitUntilMissing('.toast', 11);

        $this->assertDatabaseHas('competencias', [
                        'texto' => 'yyyyy'
                    ]);
        });
        // End COMPETENCIAS

        // CONTENIDOS
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitFor('.contenidos', 20)
                    ->press('Contenidos')
                    ->assertSee('CONTENIDOS')
                    ->assertSee('La contabilidad gerencial.')
                    ->click('.btnEdit3')
                    ->clear('.id3.col-2')
                    ->type('.id3.col-2', 'zzzzzzz')
                    ->assertSee('zzzzzzz')
                    ->click('.btnSave3')
                    ->waitForText('Contenido grabado.')
                    ->assertSee('Contenido grabado.')
                    ->waitUntilMissing('.toast', 11);
 
        $this->assertDatabaseHas('contenidos', [
                        'concepto' => 'zzzzzzz'
                    ]);
        });


        // ESTRATEGIAS
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitForText('Estrategias', 10)
                    ->press('Estrategias')
                    ->assertSee('V. ESTRATEGIAS METODOLÓGICAS')
                    ->assertSee('Lecturas')
                    ->assertSee('Editar')
                    ->press('.btnEdit1')
                    ->clear('.estrategias')
                    ->type('.estrategias', 'xxxxx')
                    ->assertSee('xxxxx')
                    ->click('.btnSave1')
                    ->waitForText('Estrategias grabadas.')
                    ->assertSee('Estrategias grabadas.')
                    ->waitUntilMissing('.toast', 11);
        
        $this->assertDatabaseHas('estrategias', [
                        'texto' => 'xxxxx'
                    ]);
        });
        // End ESTRATEGIAS


        // EVALUACIONES
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitForText('Evaluaciones', 10)
                    ->press('Evaluaciones')
                    ->assertSee('EVALUACIÓN')
                    ->assertSee('Evaluación')
                    ->click('.btnEdit2')
                    ->clear('.id2.col-2')
                    ->type('.id2.col-2', 'yyyyy')
                    ->assertSee('yyyyy')
                    ->click('.btnSave2')
                    ->waitForText('Evaluación grabada.')
                    ->assertSee('Evaluación grabada.')
                    ->waitUntilMissing('.toast', 11);

        $this->assertDatabaseHas('evaluaciones', [
                        'texto' => 'yyyyy'
                    ]);
        });
        // End EVALUACIONES


        // BIBLIOGRAFIA
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitForText('Bibliografias', 10)
                    ->press('Bibliografias')
                    ->assertSee('BIBLIOGRAFÍA')
                    ->assertSee('Autor(es)')
                    ->click('.btnEdit2')
                    ->clear('.id2.col-2')
                    ->type('.id2.col-2', 'zzzzz')
                    ->assertSee('zzzzz')
                    ->click('.btnSave2')
                    ->waitForText('Bibliografía grabada.')
                    ->waitUntilMissing('.toast', 11);

        $this->assertDatabaseHas('bibliografias', [
                        'autor' => 'zzzzz'
                    ]);
        });
        // End BIBLIOGRAFIA


    }



}
