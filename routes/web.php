<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','DashboardController@index');
Route::get('/trabalhador', function () {
    return view('trabalhador');
});
Route::get('/tarefas', function () {
    return view('tarefas');
});
Route::get('/campo', function () {
    return view('campo');
});
Route::post('/form/form_tarefa', function () {
    return view('form_tarefa');
});

Route::get('/TableEstado',"EstadoController@getTable");
Route::get('/form/FormEstado',"EstadoController@getForm");
Route::post('/form/FormEstado',"EstadoController@add");
Route::post('/Estado/remove/{id}',"EstadoController@remove");

Route::get('/producao', function () {
    return view('producao');
});
Route::get('/login', function () {
    return view('login');
});
