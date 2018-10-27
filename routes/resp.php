<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/* Acceso Responsable, Administrador, Master  */
Route::get('cursogrupo/{cod_grupo}', [
	'as'	=> 'cursogrupo.index',
	'uses'	=> 'CursoGrupoController@index'
]);

Route::fallback(function()
{
	return response('Página no encontrada', 404);
});

