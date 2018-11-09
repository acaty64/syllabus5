<?php 

use App\Mail\Welcome;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

Route::post('register', [
	'as'	=> '',
	'uses'	=> 'Auth\RegisterController@register'
]);
Route::get('register', [
	'as'	=> 'register',
	'uses'	=> 'Auth\RegisterController@showRegistrationForm'
]);

Route::get('users/index', [
	'as'	=> 'users.index',
	'uses'	=> 'UserController@index'
]);
Route::get('users/create', [
	'as'	=> 'users.create',
	'uses'	=> 'UserController@create'
]);
Route::post('users/store', [
	'as'	=> 'users.store',
	'uses'	=> 'UserController@store'
]);
Route::get('users/edit', [
	'as'	=> 'users.edit',
	'uses'	=> 'UserController@edit'
]);
Route::put('users/update', [
	'as'	=> 'users.update',
	'uses'	=> 'UserController@update'
]);
Route::get('users/destroy/{user_id}', [
	'as'	=> 'users.destroy',
	'uses'	=> 'UserController@destroy'
]);
Route::get('users/password', [
	'as'	=> 'users.password',
	'uses'	=> 'UserController@password'
]);
Route::get('users/acceso', [
	'as'	=> 'users.acceso',
	'uses'	=> 'UserController@acceso'
]);

/* Acceso Administrador, Master  */
Route::get('grupos/{type}', [
	'as'	=> 'grupos.index',
	'uses'	=> 'GrupoController@index'
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
/* Acceso Administrador, Master  */
Route::get('/send/show', [
	'as'	=> 'send.show',
	'uses'	=> 'SendController@show'
]);

Route::get('/send/test', function()
{
    $flimite = Carbon::now()->addWeek();
    $fecha = new Date($flimite);

    $datos = collect([
                    'name' => 'John Doe',
                    'email' => 'jdoe@gmail.com',
                    'limite' => $fecha->format('l d-M-Y')
                ]);

    Mail::to($datos['email'], $datos['name'])->send(new Welcome($datos)) ;
 //               ->send(new Welcome($datos));        
});

Route::fallback(function()
{
	return response('Página no encontrada', 404);
});

