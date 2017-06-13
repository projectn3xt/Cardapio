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

Route::get('/home', 'HomeController@index')->name('home');

# Route Categorias

Route::get('/categorias', 'CategoriasController@show');

Route::get('/categorias/add', function () {
    return view('categorias.add');
});

Route::post('/categorias/add', 'CategoriasController@add');