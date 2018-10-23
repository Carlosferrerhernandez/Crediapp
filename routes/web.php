<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

/*
*	Controladro buscar porcentaje-credito
*/

Route::get('/search', 'SearchController@search');

Auth::routes();

/*
*	Ruta de email
*/
Route::resource('mail', 'MailController');


/*
*	Ruta controlador resource porcentajes
*/
Route::resource('porcentajes', 'PorcentajeController');

/*Grupo de rutas solicitudes*/

Route::get('solicitudes/create', 'SolicitudController@create', function($id){
})->name('solicitudes.create');

/*
*	Middleware role:admin
*/
Route::get('solicitudes/{id}/user/{usuario}', 'SolicitudController@show', function($id){
})->name('solicitudes.show')->middleware('auth');

Route::get('solicitudes', 'SolicitudController@index', function($id){
})->name('solicitudes.index')->middleware('auth');

Route::resource('solicitudes', 'SolicitudController', ['except' => ['show', 'create', 'index']]);


/*
*	Ruta home principal
*/

Route::get('/panel', 'HomeController@index')->name('home');

/*
*	Susbcripcion route
*/
Route::get('suscripciones', 'SuscripcionController@index')->name('suscripciones.index')->middleware('auth');
Route::post('suscripciones', 'SuscripcionController@store')->name('suscripciones.store');

Route::resource('suscripciones', 'SuscripcionController', ['except' => ['index', 'store', 'index']]);



