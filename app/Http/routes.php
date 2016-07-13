<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
    ]);

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

// Select routes...
//Route::get('provincias/{id}', 'HomeController@getProvincias');
//Route::get('comunas/{id}', 'HomeController@getComunas');
Route::get('provincias/{id}', 'Admin\PropiedadController@getProvincias');
Route::get('comunas/{id}', 'Admin\PropiedadController@getComunas');



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'administracion']],function(){

		Route::get('/', 'admin\AdminController@index');

		Route::get('propiedades/provincias/{id}', 'admin\PropiedadController@getProvincias');
		Route::get('propiedades/comunas/{id}', 'admin\PropiedadController@getComunas');

		Route::resource('clientes', 'admin\ClienteController');
		Route::get('clientes/{id}/destroy',
		[
		'uses'=>'admin\ClienteController@destroy', 
		'as' => 'admin.clientes.destroy'
		]);
		Route::get('clientes/{id}/info',
		[
		'uses'=>'admin\ClienteController@info', 
		'as' => 'admin.clientes.info'
		]);

		Route::resource('propiedades', 'admin\PropiedadController');
		Route::get('propiedades/{id}/destroy',
		[
		'uses'=>'admin\PropiedadController@destroy', 
		'as' => 'admin.propiedades.destroy'
		]);

		Route::get('propiedades/{id}/info',
		[
		'uses'=>'admin\PropiedadController@info', 
		'as' => 'admin.propiedades.info'
		]);

		Route::resource('publicaciones', 'admin\PublicacionController');
		
		Route::get('publicaciones/{id}/destroy',
		[
		'uses'=>'admin\PublicacionController@destroy', 
		'as' => 'admin.publicaciones.destroy'
		]);


		Route::get('publicaciones/{id}/publicacion',
		[
		'uses'=>'admin\PublicacionController@create', 
		'as' => 'admin.publicaciones.create'
		]);

	});


// Admin routes...




Route::get('prueba','HomeController@inde');

//Route::resource('propiedades/cantidades','PropiedadesController@index');