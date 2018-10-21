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

Route::resource('porcentajes', 'PorcentajeController');

Route::resource('solicitudes', 'SolicitudController');

Route::get('/panel', 'HomeController@index')->name('home');

/*
*	Susbcripcion route
*/
Route::get('/suscripciones', 'SuscripcionController@index')->name('suscripciones.index');
Route::post('/suscripciones', 'SuscripcionController@store')->name('suscripciones.store');


