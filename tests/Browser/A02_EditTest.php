<?php

namespace Tests\Browser;

use Tests\DuskData;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

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

        // SUMILLAS
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitFor('.sumillas', 20)
                    ->press('Sumillas')
                    ->assertSee('II. SUMILLA')
                    ->assertSee('El curso tiene como propósito')
                    ->waitFor('.sumillas',20)
                    ->clear('.sumillas')
                    ->type('.sumillas', 'xxxxx')
                    ->assertSee('xxxxx')
                    ->click('.btnSave')
                    ->waitForText('Sumilla grabada.')
                    ->waitUntilMissing('#toastr')
                    ->pause(1000);
        
        $this->assertDatabaseHas('sumillas', [
                        'texto' => 'xxxxx'
                    ]);
        });
        // End SUMILLAS

        // UNIDADES
        $this->browse(function (Browser $browser) {
            $browser->press('Unidades')
                    ->assertSee('UNIDADES')
                    ->assertSee('LA CONTABILIDAD GERENCIAL.')
                    ->click('.btnEdit2')
                    ->clear('.id2.col-2')
                    ->type('.id2.col-2', 'yyyyy')
                    ->assertSee('yyyyy')
                    ->click('.btnSave2')
                    ->waitForText('Unidad grabada.')
                    ->assertSee('Unidad grabada.')
                    ->waitUntilMissing('#toastr')
                    ->pause(1000);

        $this->assertDatabaseHas('unidades', [
                        'texto' => 'yyyyy'
                    ]);
        });
        // End UNIDADES

        // CONTENIDOS
        $this->browse(function (Browser $browser) {
            $browser->press('Contenidos')
                    ->assertSee('CONTENIDOS')
                    ->assertSee('La contabilidad gerencial.')
                    ->click('.btnEdit3')
                    ->clear('.id3.col-2')
                    ->type('.id3.col-2', 'zzzzzzz')
                    ->assertSee('zzzzzzz')
                    ->click('.btnSave3')
                    ->waitForText('Contenido grabado.')
                    ->assertSee('Contenido grabado.')
                    ->waitUntilMissing('#toastr')
                    ->pause(1000);

        $this->assertDatabaseHas('contenidos', [
                        'concepto' => 'zzzzzzz'
                    ]);
        });


        // ESTRATEGIAS
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->press('Estrategias')
                    ->assertSee('V. ESTRATEGIAS METODOLÓGICAS')
                    ->assertSee('Lecturas')
                    ->clear('.estrategias')
                    ->type('.estrategias', 'xxxxx')
                    ->assertSee('xxxxx')
                    ->click('.btnSave')
                    ->waitForText('Estrategias grabadas.')
                    ->assertSee('Estrategias grabadas.')
                    ->waitUntilMissing('#toastr')
                    ->pause(1000);
        
        $this->assertDatabaseHas('estrategias', [
                        'texto' => 'xxxxx'
                    ]);
        });
        // End ESTRATEGIAS


        // EVALUACIONES
        $this->browse(function (Browser $browser) {
            $browser->press('Evaluaciones')
                    ->assertSee('EVALUACIÓN')
                    ->assertSee('Evaluación')
                    ->click('.btnEdit2')
                    ->clear('.id2.col-2')
                    ->type('.id2.col-2', 'yyyyy')
                    ->assertSee('yyyyy')
                    ->click('.btnSave2')
                    ->waitForText('Evaluación grabada.')
                    ->assertSee('Evaluación grabada.')
                    ->waitUntilMissing('#toastr')
                    ->pause(1000);

        $this->assertDatabaseHas('evaluaciones', [
                        'texto' => 'yyyyy'
                    ]);
        });
        // End EVALUACIONES


        // BIBLIOGRAFIA
        $this->browse(function (Browser $browser) {
            $browser->press('Bibliografias')
                    ->assertSee('BIBLIOGRAFÍA')
                    ->assertSee('Autor(es)')
                    ->click('.btnEdit2')
                    ->clear('.id2.col-2')
                    ->type('.id2.col-2', 'zzzzz')
                    ->assertSee('zzzzz')
                    ->click('.btnSave2')
                    ->waitForText('Bibliografía grabada.')
                    ->waitUntilMissing('#toastr')
                    ->pause(1000);

        $this->assertDatabaseHas('bibliografias', [
                        'autor' => 'zzzzz'
                    ]);
        });
        // End BIBLIOGRAFIA


    }



}
