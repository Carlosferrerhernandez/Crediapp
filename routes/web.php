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
Route::get('/search', 'GestionCreditoController@search');

Auth::routes();

Route::get('/panel', 'HomeController@index')->name('home');

/*
*	Susbcripcion route
*/
Route::get('/subscription', 'SubscriptionController@index')->name('subscription.index');
Route::post('/subscription', 'SubscriptionController@store')->name('subscription.store');


