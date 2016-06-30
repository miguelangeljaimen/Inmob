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

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('admin/propiedades/provincias/{id}', 'Admin\PropiedadController@getProvincias');
Route::get('admin/propiedades/comunas/{id}', 'Admin\PropiedadController@getComunas');

// Admin routes...
Route::resource('admin/clientes', 'Admin\ClienteController');
Route::get('admin/clientes/{id}/destroy',['uses'=>'ClienteController@destroy', 'as' => 'admin.clientes.destroy']);

Route::resource('admin/propiedades', 'Admin\PropiedadController');

Route::get('prueba','HomeController@inde');

//Route::resource('propiedades/cantidades','PropiedadesController@index');