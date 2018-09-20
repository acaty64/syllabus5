<?php

namespace Tests\Browser;

use App\Sumilla;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskData;
use Tests\DuskTestCase;

class A05_EraseTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * An ERASE test.
     *
     * @return void
     */
    public function testDelete()
    {
        $this->artisan('db:seed');
        $this->artisan('cache:clear');

        $id = 1;
        // SUMILLAS
        $this->browse(function (Browser $browser) {
            $selector = '.col-1.sumillas';
            $texto = 'El curso tiene como ';
            $mess = 'Sumilla eliminada.';
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitForText('Sumillas', 10)
                    ->press('Sumillas')
                    ->assertSee('II. SUMILLA')
                    ->waitFor('.btnEdit1')
                    ->waitFor('.btnErase1')
                    ->press('.btnErase1')
                    ->waitForText($mess)
                    ->waitUntilMissing('.toast', 11)
                    ->press('Vista')
                    ->assertDontSee($texto);

                $this->assertDatabaseMissing('sumillas', [
                        'semestre' => '20181',
                        'cod_curso' => '100048',
                        'texto' => $texto
                    ]);
        });

        // End SUMILLAS

/*
        // COMPETENCIAS

        // End COMPETENCIAS
        // UNIDADES

        // End UNIDADES


        // CONTENIDOS

        // End CONTENIDOS

        // ESTRATEGIAS


        // End ESTRATEGIAS


        // EVALUACIONES

        // End EVALUACIONES

        // BIBLIOGRAFIA

        // End BIBLIOGRAFIA

*/
    }
}
