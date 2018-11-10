<?php

use App\Evaluacion;
use App\Malla;
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
        /* Generacion de evaluaciones del curso de prueba */
        Evaluacion::create([
            'semestre' => '20191',
            'cod_curso' => '100048',
            'semana' => 4,
            'texto' => 'Primer Examen Parcial',
            'porcentaje' => 10,
        ]);
        Evaluacion::create([
            'semestre' => '20191',
            'cod_curso' => '100048',
            'semana' => 8,
            'texto' => 'Segundo Examen Parcial',
            'porcentaje' => 20,
        ]);
        Evaluacion::create([
            'semestre' => '20191',
            'cod_curso' => '100048',
            'semana' => 12,
            'texto' => 'Tercer Examen Parcial',
            'porcentaje' => 20,
        ]);
        Evaluacion::create([
            'semestre' => '20191',
            'cod_curso' => '100048',
            'semana' => 17,
            'texto' => 'Examen Final',
            'porcentaje' => 30,
        ]);
        Evaluacion::create([
            'semestre' => '20191',
            'cod_curso' => '100048',
            'semana' => 0,
            'texto' => 'Evaluacion Continua',
            'porcentaje' => 20,
        ]);
        /* Generacion de evaluaciones de todos los cursos */
        $cursos = Malla::all();
        foreach ($cursos as $curso) {
            Evaluacion::create([
                'semestre' => '20191',
                'cod_curso' => $curso->cod_curso,
                'semana' => 4,
                'texto' => 'Primer Examen Parcial',
                'porcentaje' => 10,
            ]);
            Evaluacion::create([
                'semestre' => '20191',
                'cod_curso' => $curso->cod_curso,
                'semana' => 8,
                'texto' => 'Segundo Examen Parcial',
                'porcentaje' => 20,
            ]);
            Evaluacion::create([
                'semestre' => '20191',
                'cod_curso' => $curso->cod_curso,
                'semana' => 12,
                'texto' => 'Tercer Examen Parcial',
                'porcentaje' => 20,
            ]);
            Evaluacion::create([
                'semestre' => '20191',
                'cod_curso' => $curso->cod_curso,
                'semana' => 17,
                'texto' => 'Examen Final',
                'porcentaje' => 30,
            ]);
            Evaluacion::create([
                'semestre' => '20191',
                'cod_curso' => $curso->cod_curso,
                'semana' => 0,
                'texto' => 'Evaluacion Continua',
                'porcentaje' => 20,
            ]);            
        }
    }
}
