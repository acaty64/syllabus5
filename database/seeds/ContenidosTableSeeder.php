<?php

use App\Contenido;
use Illuminate\Database\Seeder;

class ContenidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contenido::create([
            'semestre' => '20191', 
            'cod_curso' => '100048', 
            'semana' => 1,
            'concepto' => 'La contabilidad gerencial.\n‐ Qué es la contabilidad. El ciclo contable. Los Estados Financieros.\n‐Qué es la contabilidad gerencial. Objetivos e importancia de la contabilidad gerencial.\n‐Diferencias entre la contabilidad gerencial y la contabilidad financiera. Usuarios de la información. Tipo de información. Normas de regulación.',
            'procedimiento' => 'Reconoce el recorrido de las operaciones empresariales en el ciclo contable de una empresa. Evalúa la utilidad de la información financiera y gerencial.',
            'actividad' => 'Exposición dialogada\nTaller',
		]);
		Contenido::create([
            'semestre' => '20191', 
            'cod_curso' => '100048', 
            'semana' => 2,
            'concepto' => 'La Contabilidad de Costos Empresariales.\n‐ Concepto. Importancia y su aplicación. Relación entre la contabilidad Gerencial y la Contabilidad de Costos.',
            'procedimiento' => 'Determinación, distribución y aplicación de los costos en una empresa mercantil.',
            'actividad' => 'Dinámica grupal/debate en clase',
		]);
        Contenido::create([
            'semestre' => '20191', 
            'cod_curso' => '100048', 
            'semana' => 3,
            'concepto' => 'Elementos de los Estados Financieros:\n‐ Balance General: Activo, pasivo y patrimonio.\n‐ Estado de Resultados: Ingresos y Gastos',
            'procedimiento' => 'Analizar y aplicar el marco legal normativo para la elaboración de los Estados Financieros.',
            'actividad' => 'Exposición dialogada',          
        ]);
		Contenido::create([
            'semestre' => '20191', 
            'cod_curso' => 'EG002', 
            'semana' => 3,
            'concepto' => 'Elementos de los Estados Financieros:\n‐ Balance General: Activo, pasivo y patrimonio.\n‐ Estado de Resultados: Ingresos y Gastos',
            'procedimiento' => 'Analizar y aplicar el marco legal normativo para la elaboración de los Estados Financieros.',
            'actividad' => 'Exposición dialogada',			
		]);
    }
}
