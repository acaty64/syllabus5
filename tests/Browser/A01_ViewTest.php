<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class A01_ViewTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testView()
    {
        $this->artisan('db:seed');
        $this->browse(function (Browser $browser) {
            $browser->visit('/show/20181/100048')
                    ->waitFor('.SyllabusComponent', 20)
                    ->waitFor('.Vista', 20)
                    ->waitForText('I. DATOS GENERALES', 20)
                    ->assertSee('I. DATOS GENERALES')
                    ->press('Generalidades')
                    ->assertSee('I. DATOS GENERALES')
                    ->press('Sumillas')
                    ->assertSee('II. SUMILLA')
                    ->press('Competencias')
                    ->assertSee('III. SISTEMA DE COMPETENCIAS')
                    ->press('Unidades')
                    ->assertSee('UNIDADES')
                    ->press('Contenidos')
                    ->assertSee('IV. PROGRAMACIÓN DE CONTENIDOS')
                    ->press('Estrategias')
                    ->assertSee('V. ESTRATEGIAS METODOLÓGICAS')
                    ;
        });
    }
}
