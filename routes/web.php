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


//Route::get('/quienessomos', function () {return view ('quienessomos');});
// Route::get('/contactanos', function () {
// return view ('contactanos');
// });
// Route::get('/redes', function () {
// return view ('redes');
// });

Route::view('/quienessomos', 'quienessomos')->name('Quienessomos'); //Definir rutas
Route::view('/contactanos', 'contactanos')->name('contactanos');
Route::view('/redes', 'redes')->name('redes');
//Route::view('/', 'home', compact('colores'))->name('home');

Route::resource('colores', 'HomeController@index');
//Route::resource('colores', 'HomeController@index')->except(['index', 'show']); //Mostar todo menos...