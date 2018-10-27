<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

Route::fallback(function()
{
	return response('Página no encontrada', 404);
});

