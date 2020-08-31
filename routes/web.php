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

Route::get('/pizzas', 'PizzasController@pizzas');

Route::get('/detalhe/{id}', 'PizzasController@detalhePizza');
Route::post('/pizzas', 'PizzasController@create');
Route::get('deletePizza/{id}', 'PizzasController@deletePizza');
Route::get('editPizza','PizzasController@editPizza');


Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );




