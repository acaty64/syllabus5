<?php

use App\Evaluacion;
use Illuminate\Database\Seeder;

class EvaluacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluacion::create([
            'semestre' => '20181',
            'cod_curso' => '100048',
            'semana' => 4,
            'tipo' => '1',
            'texto' => 'Primer Examen Parcial',
            'porcentaje' => 10,
            'orden' => 1,
        ]);
        Evaluacion::create([
            'semestre' => '20181',
            'cod_curso' => '100048',
            'semana' => 8,
            'tipo' => '1',
            'texto' => 'Segundo Examen Parcial',
            'porcentaje' => 20,
            'orden' => 2,
        ]);
        Evaluacion::create([
            'semestre' => '20181',
            'cod_curso' => '100048',
            'semana' => 12,
            'tipo' => '1',
            'texto' => 'Tercer Examen Parcial',
            'porcentaje' => 20,
            'orden' => 3,
        ]);
        Evaluacion::create([
            'semestre' => '20181',
            'cod_curso' => '100048',
            'semana' => 17,
            'tipo' => '1',
            'texto' => 'Examen Final',
            'porcentaje' => 30,
            'orden' => 4,
        ]);
        Evaluacion::create([
            'semestre' => '20181',
            'cod_curso' => '100048',
            'semana' => 0,
            'tipo' => '2',
            'texto' => 'Evaluacion Continua',
            'porcentaje' => 20,
            'orden' => 5,
        ]);
    }
}
