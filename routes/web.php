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

Route::get('/', 'indexController@index');

Route::get('/pizzas', 'ProdutosController@pizzas');

Route::get('/detalhe/{id}', 'ProdutosController@detalhePizza');
Route::post('/pizzas', 'ProdutosController@create');
Route::get('deletePizza/{id}', 'ProdutosController@deletePizza');
Route::get('editPizza','ProdutosController@editPizza');


Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );




