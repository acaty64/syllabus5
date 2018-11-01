<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/* Acceso Responsable, Administrador, Master  */
Route::get('cursogrupo/{cod_grupo}', [
	'as'	=> 'cursogrupo.index',
	'uses'	=> 'CursoGrupoController@index'
]);

/* Acceso Responsable, Administrador, Master  */
Route::get('consistencia/show/{curso_id}', [
	'as'	=> 'consistencia.show',
	'uses'	=> 'ConsistenciaController@show'
]);


Route::fallback(function()
{
	return response('Página no encontrada', 404);
});

