<?php

use App\Bibliografia;
use Illuminate\Database\Seeder;

class BibliografiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Bibliografia::create([
        	'semestre' => '20181',
            'cod_curso' => '100048',
            'tipo' => '1',
            'autor' => 'Flores Soria, Jaime',
            'titulo' => 'Contabilidad Gerencial',
            'editorial' => 'Centro de Especialización en Contabilidad y Finanzas',
            'year' => '2003',
            'codigo' => '657.4/F64',
            'orden' => 1,
		]);

        Bibliografia::create([
        	'semestre' => '20181',
            'cod_curso' => '100048',
            'tipo' => '1',
            'autor' => 'Pascual Chávez, Ackerman',
            'titulo' => 'Contabilidad para la toma de decisiones',
            'editorial' => 'San Marcos',
            'year' => '2003',
            'codigo' => '658.151.1/P27',
            'orden' => 2,
		]);

        Bibliografia::create([
        	'semestre' => '20181',
            'cod_curso' => '100048',
            'tipo' => '1',
            'autor' => 'Díaz Izquierdo, Pedro; Quiroz Pacheco, Juan',
            'titulo' => 'Contabilidad Gerencial II',
            'editorial' => 'USMP',
            'year' => '2001',
            'codigo' => '658.151.1/D69',
            'orden' => 3,
		]);
    }
}
