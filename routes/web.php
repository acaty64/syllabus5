<?php 

use App\Curso;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Route::auth();

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


Route::get('/downloadGrupo/{siglas}', [
	'as'	=> 'downloadGrupo',
	'uses'	=> 'DownloadController@downloadGrupo'
]);

Route::get('/', function () {
	return view('welcome');
});

Route::get('/downloadFile/{fileName}/{type}', [
	'as'	=> 'download.file',
	'uses'	=> 'DownloadController@downloadFile'
]);

Route::get('/user/redirect', [
	'as'	=> 'user.redirect',
	'uses'	=> 'UserAccesoController@redirect'
]);

Route::get('/malla/{siglas}', [
	'as'	=> 'malla',
	'uses'	=> 'MallaController@index'
]);

Route::get('PDF/malla/{siglas}', [
	'as'	=> 'PDF.malla',
	'uses'	=> 'PDFController@malla'
]);

Route::get('/grupos/{type}', [
	'as'	=> 'grupos',
	'uses'	=> 'GrupoController@index'
]);

Route::get('/cursogrupo/{cod_grupo}', [
	'as'	=> 'cursogrupo.index',
	'uses'	=> 'CursoGrupoController@index'
]);

Route::get('/show/{semestre}/{cod_curso}', [
	'as'	=> 'show',
	'uses'	=> 'SyllabusController@show'
]);

Route::get('/edit/{semestre}/{cod_curso}', [
	'as'	=> 'edit',
	'uses'	=> 'SyllabusController@show'
]);

Route::get('/show/{semestre}/{cod_curso}', [
	'as'	=> 'curso.show',
	'uses'	=> 'CursoController@show'
]);

Route::get('/cursos/index', [
	'as'	=> 'cursos.index',
	'uses'	=> 'CursoController@index'
]);

Route::get('/PDF/syllabus/{semestre}/{cod_curso}/{view}', [
	'as'	=> 'PDF',
	'uses'	=> 'PDFController@ViewSyllabus'
]);

Route::get('/header/PDF/syllabus/{semestre}', function ($semestre) {
    return view('layouts.partials.header_PDF', ['semestre'=>$semestre]);
});

Route::get('/footer/PDF/syllabus/{semestre}', function ($semestre) {
    return view('layouts.partials.footer_PDF', ['semestre'=>$semestre]);
});

Route::get('/download/{cod_grupo}', [
	'as'	=> 'download.grupo',
	'uses'	=> 'DownloadController@Grupo'
]);


/*

Route::get('/PDFdompdf', [
	'as'	=> 'PDFdompdf',
	'uses'	=> 'PDFController@PDFdompdf'
]);

Route::get('/PDFshowSimple', [
	'as'	=> 'PDFshowSimple',
	'uses'	=> 'PDFController@showSimple'
]);

Route::get('/PDFSimple', [
	'as'	=> 'PDFSimple',
	'uses'	=> 'PDFController@PDFSimple'
]);

Route::get('/PDFshowExample', [
	'as'	=> 'PDFshowExample',
	'uses'	=> 'PDFController@showExample'
]);

Route::get('/PDFexample', [
	'as'	=> 'PDFexample',
	'uses'	=> 'PDFController@PDFexample'
]);


Route::post('/index', [
	'as'	=> 'index',
	'uses'	=> 'SyllabusController@index'
]);
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
