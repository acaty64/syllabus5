<?php 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/{semestre}/{cod_curso}', [
	'as'	=> 'show',
	'uses'	=> 'SyllabusController@show'
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

