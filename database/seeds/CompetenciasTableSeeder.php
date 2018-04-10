<?php

use App\Competencia;
use Illuminate\Database\Seeder;

class CompetenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '1',
			'texto' => 'Comprende el papel de la información contable en los Negocios. Relación entre la contabilidad y la Administración y la toma de decisiones.',
			'orden' => 1,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '1',
			'texto' => 'Conoce y ejecuta los Estados Financieros de una empresa comercial, industrial y de servicios.',
			'orden' => 2,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '1',
			'texto' => 'Toma de decisiones, en base a un análisis financiero, dentro de las funciones de operación, inversión y financiamiento y análisis de los costos.',
			'orden' => 3,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '1',
			'texto' => 'Planifica la gestión de la empresa a futuro.',
			'orden' => 4,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '1',
			'texto' => 'Capacidad de trabajo en equipo.',
			'orden' => 5,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '2',
			'texto' => 'Conoce, Analiza y describe las diferentes empresas que se desarrollan en nuestro país y la importancia que tiene en ellas la contabilidad gerencia, desde la óptica de los estados financieros: Estado de Situación Financiera y Estado de Resultados.',
			'orden' => 1,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '2',
			'texto' => 'Analiza y diagnostica los Estados financieros básicos de diferentes empresas, mediante el análisis vertical y horizontal así como los ratios financieros.',
			'orden' => 2,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '2',
			'texto' => 'Desarrolla un plan financiero para una empresa: Presupuesto de ventas, Presupuesto de cobranzas, presupuesto de producción, presupuesto de compras, presupuesto de pagos, presupuesto de pagos, presupuesto de gastos, entre otros.',
			'orden' => 3,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '2',
			'texto' => 'Estudia la importancia de la estructura de costos de una empresa y su implicancia en la planificación financiera.',
			'orden' => 4,
		]);
    	Competencia::create([
			'semestre' => '20181',
			'cod_curso' => '100048', 
			'item' => '2',
			'texto' => 'Elabora estados financieros proyectados, para diagnosticar el futuro de la empresa.',
			'orden' => 5,
		]);


    }
}
