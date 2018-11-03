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

/* Acceso Administrador, Master  */
Route::get('/send', [
	'as'	=> 'send.index',
	'uses'	=> 'SendController@index'
]);

/* Acceso Administrador, Master  */
Route::get('/send/create', [
	'as'	=> 'send.create',
	'uses'	=> 'SendController@create'
]);

/* Acceso Administrador, Master  */
Route::post('/send/store', [
	'as'	=> 'send.store',
	'uses'	=> 'SendController@store'
]);




Route::fallback(function()
{
	return response('Página no encontrada', 404);
});


