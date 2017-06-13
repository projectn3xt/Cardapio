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

/*
|--------------------------------------------------------------------------
| Categoria Rotas | Route Categories
|--------------------------------------------------------------------------
|
*/

# /categorias
Route::get('/categorias', 'CategoriasController@show')->name('/categorias');

Route::post('/categorias', 'CategoriasController@save');

Route::get('/categorias/add', function () {
    $categorias = \App\Models\Categorias::all();
    return view('categorias.add',compact('categorias',$categorias));
})->name('/categorias/add');

Route::get('/categorias/delete/{id}', function ($id) {
    \App\Models\Categorias::destroy($id);
    return redirect()->route('/categorias');
});

Route::get('/categorias/edit/{id}', function ($id) {

    # Lista todas as categorias / List All Categories
    $data['categorias'] = \App\Models\Categorias::all();

    # Retorna 1 cateoria por id / Return 1 category
    $data['categoria'] = \App\Models\Categorias::find($id);
    
    return view('categorias.edit',$data);
});
