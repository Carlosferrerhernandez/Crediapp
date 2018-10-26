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

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

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


/*-------------------------------*/
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

/*------------------------------*/



