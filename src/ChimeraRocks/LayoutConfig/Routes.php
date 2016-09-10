<?php

Route::group([
	'prefix' => 'admin/', 
	'namespace' => 'ChimeraRocks\LayoutConfig\Controllers',
	'as' => 'admin.',
	'middleware' => ['web', 'auth'. 'access_users']
	], function() {
	
	Route::group([
		'prefix' => 'layouts', 
		'as' => 'layouts.'
		], function() {
		Route::get('/', ['uses' => 'AdminLayoutController@index', 'as' => 'index']);
		Route::get('/create', ['uses' => 'AdminLayoutController@create', 'as' => 'create']);
		Route::post('/store', ['uses' => 'AdminLayoutController@store', 'as' => 'store']);
		Route::get('/active/{id}', ['uses' => 'AdminLayoutController@active', 'as' => 'active']);
	});

});