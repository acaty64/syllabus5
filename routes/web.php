<?php 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/{semestre}/{cod_curso}', [
	'as'	=> 'show',
	'uses'	=> 'SyllabusController@show'
]);

Route::get('/PDF/{semestre}/{cod_curso}/{view}', [
	'as'	=> 'PDF',
	'uses'	=> 'PDFController@ViewSyllabus'
]);

Route::get('/PDF/syllabus/header', function () {
    return view('layouts.partials.header_PDF');
});

Route::get('/PDF/syllabus/footer', function () {
    return view('layouts.partials.footer_PDF');
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

