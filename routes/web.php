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

Route::get('/test', function () {
    return view('home');
})->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
*	Susbcripcion route
*/

Route::get('/subscription', 'SubscriptionController@index')->name('subscription.index');

Route::post('/subscription', 'SubscriptionController@store')->name('subscription.store');

/*
*	Contacto route
*/

Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::post('/contact', 'ContactController@store')->name('contact.store');


