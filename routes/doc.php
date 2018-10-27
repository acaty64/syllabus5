<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


/* Acceso Docente, Responsable, Administrador, Master */
Route::get('/edit/{semestre}/{cod_curso}', [
	'as'	=> 'syllabus.edit',
	'uses'	=> 'SyllabusController@show'
]);


Route::fallback(function()
{
	return response('Página no encontrada', 404);
});

