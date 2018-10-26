<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/* Acceso Administrador, Master  */
Route::get('grupos/{type}', [
	'as'	=> 'grupos.index',
	'uses'	=> 'GrupoController@index'
]);

/* Acceso Administrador, Master  */
Route::get('download/{cod_grupo}', [
	'as'	=> 'download.grupo',
	'uses'	=> 'DownloadController@Grupo'
]);

/* Acceso Administrador, Master  */
Route::get('/downloadGrupo/{siglas}', [
	'as'	=> 'downloadGrupo',
	'uses'	=> 'DownloadController@downloadGrupo'
]);

Route::fallback(function()
{
	return response('Página no encontrada', 404);
});


