<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', [
	'as'	=> 'show',
	'uses'	=> 'SyllabusController@show'
]);

Route::get('/edit', [
	'as'	=> 'edit',
	'uses'	=> 'SyllabusController@edit'
]);


Route::post('/index', [
	'as'	=> 'index',
	'uses'	=> 'SyllabusController@index'
]);




