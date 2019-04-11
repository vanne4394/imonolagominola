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
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'Controller@index')->name('home');


//---------------------------------ENTRENAMIENTOS-------------------------------
Route::get('/entrenamientos', "entrenamientosController@Entrenamientos")->name('entrenamientos');

//---------------------------------HISTORIAL-----------------------------------
Route::get('/historial', "historialController@Historial")->name('historial');

//---------------------------------DOCUMENTOS-----------------------------------
Route::get('/documentos', "documentosController@Documentos")->name('documentos');

//---------------------------------COMPETICIONES-----------------------------------
Route::get('/competiciones', "competicionesController@Competiciones")->name('competiciones');
