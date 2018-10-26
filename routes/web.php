<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
	return view('welcome');
});

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/downloadFile/{fileName}/{type}', [
	'as'	=> 'download.file',
	'uses'	=> 'DownloadController@downloadFile'
]);

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/user/redirect', [
	'as'	=> 'user.redirect',
	'uses'	=> 'UserAccesoController@redirect'
]);

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/malla/{siglas}', [
	'as'	=> 'malla',
	'uses'	=> 'MallaController@index'
]);

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('PDF/malla/{siglas}', [
	'as'	=> 'PDF.malla',
	'uses'	=> 'PDFController@malla'
]);


/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/show/{semestre}/{cod_curso}', [
	'as'	=> 'show',
	'uses'	=> 'SyllabusController@show'
]);

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/show/{semestre}/{cod_curso}', [
	'as'	=> 'curso.show',
	'uses'	=> 'CursoController@show'
]);

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/cursos/index', [
	'as'	=> 'cursos.index',
	'uses'	=> 'CursoController@index'
]);

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/PDF/syllabus/{semestre}/{cod_curso}/{view}', [
	'as'	=> 'PDF',
	'uses'	=> 'PDFController@ViewSyllabus'
]);

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/header/PDF/syllabus/{semestre}', function ($semestre) {
    return view('layouts.partials.header_PDF', ['semestre'=>$semestre]);
});

/* Acceso Consulta, Docente, Responsable, Administrador, Master  */
Route::get('/footer/PDF/syllabus/{semestre}', function ($semestre) {
    return view('layouts.partials.footer_PDF', ['semestre'=>$semestre]);
});


/* RUTAS DOC
/* Acceso Docente, Responsable, Administrador, Master 
Route::get('/edit/{semestre}/{cod_curso}', [
	'as'	=> 'edit',
	'uses'	=> 'SyllabusController@show'
]);
 */


/* RUTAS RESP
/* Acceso Responsable, Administrador, Master 
Route::get('/cursogrupo/{cod_grupo}', [
	'as'	=> 'cursogrupo.index',
	'uses'	=> 'CursoGrupoController@index'
]);
*/


/* RUTAS ADM
/* Acceso Administrador, Master  
Route::get('/grupos/{type}', [
	'as'	=> 'grupos',
	'uses'	=> 'GrupoController@index'
]);
/* Acceso Administrador, Master  
Route::get('/download/{cod_grupo}', [
	'as'	=> 'download.grupo',
	'uses'	=> 'DownloadController@Grupo'
]);
/* Acceso Administrador, Master  
Route::get('/downloadGrupo/{siglas}', [
	'as'	=> 'downloadGrupo',
	'uses'	=> 'DownloadController@downloadGrupo'
]);
*/

/*   RUTAS SYS
Route::get('backup', [
	'as'	=> 'backup.index',
	'uses'	=> 'BackupController@index'
]);

Route::get('backup/destroy/{file}', [
	'as'	=> 'backup.destroy',
	'uses'	=> 'BackupController@destroy'
]);

Route::get('backup/create', [
	'as'	=> 'backup.create',
	'uses'	=> 'BackupController@create'
]);

Route::get('backup/download/{file}', [
	'as'	=> 'backup.download',
	'uses'	=> 'BackupController@download'
]);

Route::get('backup/restore/{file}', [
	'as'	=> 'backup.restore',
	'uses'	=> 'BackupController@restore'
]);

*/