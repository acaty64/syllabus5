<?php

namespace App\Http\Controllers\Api;

use App\Cambio;
use App\Curso;
use App\CursoCompetencia;
use App\CursoGrupo;
use App\CursoStatus;
use App\Evaluacion;
use App\Http\Controllers\Controller;
use App\Malla;
use App\Mcurso;
use App\Prereq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Maatwebsite\Excel\Facades\Excel;

class CambioController extends Controller
{
	public function tests()
	{


	}

    public function generate()
    {
    	
		/* Copiar nuevo archivo: /public/cambio.csv */

		// https://stackoverflow.com/questions/28799779/run-laravel-5-seeder-programmatically-instead-of-from-cli
		// Artisan::call('command:name', array('argument' => 'foo', '--option' => 'bar'));

    	/*  */
    	/* https://github.com/doctrine/dbal/issues/2848 */
    	/* AGREGAR EN composer.json:  */
    	/* 			"maatwebsite/excel": "~2.0", 
                    "doctrine/common": "2.7.0",
    	 			 "doctrine/dbal": "2.5.13", */

    	/* Copiando nuevos migrations */
    	$file = '2019_01_07_155647_create_cambios_table.php';
    	$source = base_path('database/migrations_new/').$file;
    	$dest = base_path('database/migrations/').$file;
    	copy($source, $dest);
    	echo "Copiando: " . $source . "<br>     a: " . $dest;
    	echo "<br>";

    	$file = '2019_01_08_213243_add_reconfig_wcurso.php';
    	$source = base_path('database/migrations_new/').$file;
    	$dest = base_path('database/migrations/').$file;
    	copy($source, $dest);
    	echo "Copiando: " . $source . "<br>     a: " . $dest;
    	echo "<br>";

    	Artisan::call('migrate');
    	echo "Correcciones migradas.";
    	echo "<br>";

    	/* Importando data de cambios (/public/cambios.csv) */
    	$this->import();

    	// echo "Copiando nuevo archivo: McursosTableSeeder.php ";
    	$file = 'McursosTableSeeder';
    	$source = base_path('database/seeds/').$file.".new";
    	$dest = base_path('database/seeds/').$file.".php";
    	copy($source, $dest);
    	echo "Copiando: " . $source . "<br>     a: " . $dest;
    	echo "<br>";

    	// echo "Copiando nuevo archivo: PrereqsTableSeeder.php ";
    	$file = 'PrereqsTableSeeder';
    	$source = base_path('database/seeds/').$file.".new";
    	$dest = base_path('database/seeds/').$file.".php";
    	copy($source, $dest);
    	echo "Copiando: " . $source . "<br>     a: " . $dest;
    	echo "<br>";

    	// echo "Copiando nuevo archivo: CursoCompetenciaTableSeeder.php ";
    	$file = 'CursoCompetenciaTableSeeder';
    	$source = base_path('database/seeds/').$file.".new";
    	$dest = base_path('database/seeds/').$file.".php";
    	copy($source, $dest);
    	echo "Copiando: " . $source . "<br>     a: " . $dest;
    	echo "<br>";

    	// echo "Copiando nuevo archivo: MallasTableSeeder.php ";
    	$file = 'MallasTableSeeder';
    	$source = base_path('database/seeds/').$file.".new";
    	$dest = base_path('database/seeds/').$file.".php";
    	copy($source, $dest);
    	echo "Copiando: " . $source . "<br>     a: " . $dest;
    	echo "<br>";

    	// echo "Copiando nuevo archivo: CursoGrupoTableSeeder.php ";
    	$file = 'CursoGrupoTableSeeder';
    	$source = base_path('database/seeds/').$file.".new";
    	$dest = base_path('database/seeds/').$file.".php";
    	copy($source, $dest);
    	echo "Copiando: " . $source . "<br>     a: " . $dest;
    	echo "<br>";

		// ELIMINANDO LOS REGISTROS DE LAS TABLAS mcursos, prereqs, cursocompetencia, malla, cursogrupo
		// EJECUTANDO SEEDERS

    	/************ MCURSOS  *****************/
    	$all = Mcurso::all();
    	echo "Tabla Mcursos: Registros eliminando: " . $all->count() . " registros.<br>";
    	foreach ($all as $item) {
    		Mcurso::destroy($item->id);
    	}
    	echo "Tabla Mcursos: Registros eliminados: " . $all->count() . " registros.<br>";
    	// echo "EJECUTANDO php artisan db:seed --class=McursosTableSeeder ";
    	echo "Tabla Mcursos: Agregando registros.<br>";
    	Artisan::call('db:seed',['--class'=>'McursosTableSeeder']);
    	$all = Mcurso::all();
    	echo "Tabla Mcursos: Registros agregados: " . $all->count() . " registros.<br><br>";
    	/************ END MCURSOS  *****************/

    	/************ PREREQS  *****************/
    	$all = Prereq::all();
    	echo "Tabla Prereqs: Registros eliminando: " . $all->count() . " registros.<br>";
    	foreach ($all as $item) {
    		Prereq::destroy($item->id);
    	}
    	echo "Tabla Prereqs: Registros eliminados: " . $all->count() . " registros.<br>";
    	// echo "EJECUTANDO php artisan db:seed --class=PrereqsTableSeeder ";
    	echo "Tabla Prereqs: Agregando registros.<br>";
    	Artisan::call('db:seed',['--class'=>'PrereqsTableSeeder']);
    	$all = Prereq::all();
    	echo "Tabla Prereqs: Registros agregados: " . $all->count() . " registros.<br><br>";
    	/************ END PREREQS  *****************/

    	/************ CURSOCOMPETENCIA  *****************/
    	$all = CursoCompetencia::all();
    	echo "Tabla CursoCompetencia: Registros eliminando: " . $all->count() . " registros.<br>";
    	foreach ($all as $item) {
    		CursoCompetencia::destroy($item->id);
    	}
    	echo "Tabla CursoCompetencia: Registros eliminados: " . $all->count() . " registros.<br>";
    	// echo "EJECUTANDO php artisan db:seed --class=CursoCompetenciaTableSeeder ";
    	echo "Tabla CursoCompetencia: Agregando registros.<br>";
    	Artisan::call('db:seed',['--class'=>'CursoCompetenciaTableSeeder']);
    	$all = CursoCompetencia::all();
    	echo "Tabla CursoCompetencia: Registros agregados: " . $all->count() . " registros.<br><br>";
    	/************ END CURSOCOMPETENCIA  *****************/

    	/************ MALLAS  *****************/
    	$all = Malla::all();
    	echo "Tabla Malla: Registros eliminando: " . $all->count() . " registros.<br>";
    	foreach ($all as $item) {
    		Malla::destroy($item->id);
    	}
    	echo "Tabla Malla: Registros eliminados: " . $all->count() . " registros.<br>";
    	// echo "EJECUTANDO php artisan db:seed --class=MallasTableSeeder ";
    	echo "Tabla Malla: Agregando registros.<br>";
    	Artisan::call('db:seed',['--class'=>'MallasTableSeeder']);
    	$all = Malla::all();
    	echo "Tabla Malla: Registros agregados: " . $all->count() . " registros.<br><br>";
    	/************ END MALLAS  *****************/

    	/************ CURSOGRUPO  *****************/
    	$all = CursoGrupo::all();
    	echo "Tabla CursoGrupo: Registros eliminando: " . $all->count() . " registros.<br>";
    	foreach ($all as $item) {
    		CursoGrupo::destroy($item->id);
    	}
    	echo "Tabla CursoGrupo: Registros eliminados: " . $all->count() . " registros.<br>";
    	// echo "EJECUTANDO CONSOLA php artisan db:seed --class=CursoGrupoTableSeeder ";
    	echo "Tabla CursoGrupo: Agregando registros.<br>";
    	Artisan::call('db:seed',['--class'=>'CursoGrupoTableSeeder']);
    	$all = CursoGrupo::all();
    	echo "Tabla CursoGrupo: Registros agregados: " . $all->count() . " registros.<br><br>";
    	/************ END CURSOGRUPO  *****************/

    	/************ CURSOS  *****************/
    	$all = Curso::all();
    	echo "Tabla Cursos: Registros eliminando: " . $all->count() . " registros.<br>";
    	foreach ($all as $item) {
    		Curso::destroy($item->id);
    	}
    	echo "Tabla Cursos: Registros eliminados: " . $all->count() . " registros.<br>";
    	// echo "EJECUTANDO php artisan db:seed --class=CursosTableSeeder ";
    	echo "Tabla Cursos: Agregando registros.<br>";
    	Artisan::call('db:seed',['--class'=>'CursosTableSeeder']);
    	$all = Curso::all();
    	echo "Tabla Cursos: Registros agregados: " . $all->count() . " registros.<br><br>";
    	/************ END CURSOS  *****************/

    	/************ EVALUACIONES  *****************/
    	$all = Evaluacion::all();
    	echo "Tabla Evaluaciones: Registros eliminando: " . $all->count() . " registros.<br>";
    	foreach ($all as $item) {
    		Evaluacion::destroy($item->id);
    	}
    	echo "Tabla Evaluaciones: Registros eliminados: " . $all->count() . " registros.<br>";
    	// echo "EJECUTANDO php artisan db:seed --class=EvaluacionesTableSeeder ";
    	echo "Tabla Evaluaciones: Agregando registros.<br>";
    	Artisan::call('db:seed',['--class'=>'EvaluacionesTableSeeder']);
    	$all = Evaluacion::all();
    	echo "Tabla Evaluacion: Registros agregados: " . $all->count() . " registros.<br><br>";
    	/************ END EVALUACIONES  *****************/

    	/************ CURSOSTATUS  *****************/
    	$all = CursoStatus::all();
    	echo "Tabla CursoStatus: Registros eliminando: " . $all->count() . " registros.<br>";
    	foreach ($all as $item) {
    		CursoStatus::destroy($item->id);
    	}
		$cursos = Malla::all();
		foreach ($cursos as $curso) {		
			$curso = Curso::where('cod_curso', $curso->cod_curso)->first();
			CursoStatus::create([
					'semestre' => '20191',
					'curso_id' => $curso->id,
					'check' => $curso->ConsistenciaBoolean,
					'open' => false
				]);
		}
    	$all = CursoStatus::all();
    	echo "Tabla CursoStatus: Registros agregados: " . $all->count() . " registros.<br><br>";
    	/************ END CURSOSTATUS  *****************/

    	/* CAMBIA LOS CODIGOS DE LOS CURSOS */
    	$modelos = ["Contenido", "Sumilla", "Estrategia", "Evaluacion", "Bibliografia", "Unidad", "CursoCompetencia"];
    	$cambios = Cambio::where('chg_codigo', 'cod_curso')->get();
    	foreach ($cambios as $cambio) {
    		foreach ($modelos as $modelo) {
	    		$modelo = "App\\".$modelo;
	    		$campo = "cod_curso";
	    		$valor_old = $cambio->codigo_old;
	    		$valor_new = $cambio->curso;
	    		$this->chg_codigo($modelo, $campo, $valor_old, $valor_new);
    		}
    	}
    	echo "Cambio de codigos de los cursos terminado.<br><br>";
    	/* END CAMBIA LOS CODIGOS DE LOS CURSOS */
    	
    }

    protected function chg_codigo($modelo, $campo, $valor_old, $valor_new)
    {
    	$all = $modelo::where($campo, $valor_old)->get();
    	foreach ($all as $item) {
    		$item->$campo = $valor_new;
    		$item->save();	
    	}
    }


	protected function import()
	{
		Excel::load('cambios.csv', function($reader) { 
		    foreach ($reader->get() as $cambio) {
		     	Cambio::create([
		     		'descripcio' => $cambio->descripcio,
		     		'curso' => $cambio->curso,
		     		'ciclo' => $cambio->ciclo,
		     		'tipo' => $cambio->tipo,
		     		'adm' => $cambio->adm,
		     		'con' => $cambio->con,
		     		'eco' => $cambio->eco,
		     		'neg' => $cambio->neg,
		     		'fin' => $cambio->fin,
		     		'chg_ciclo' => $cambio->chg_ciclo,
		     		'chg_codigo' => $cambio->chg_codigo,
		     		'codigo_old' => $cambio->codigo_old,
		     		'nuevo' => $cambio->nuevo,
		     		'modifica' => $cambio->modifica
		     	]);
		    }
		});
		echo "Datos en tabla cambios agregada.";
	}


}
