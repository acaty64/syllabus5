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
            $browser->visit('/show')
                    ->waitFor('.SyllabusComponent', 10);
        });
    }
}
