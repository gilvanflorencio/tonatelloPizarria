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
  //PIZZAS //
Route::get('/pizzas', 'PizzaController@pizzas');
Route::get('/detalhe/{id}', 'PizzaController@detalhePizza');
Route::post('/pizzas', 'PizzaController@create');
Route::get('deletePizza/{id}', 'PizzaController@deletePizza');
Route::get('editPizza','PizzaController@editPizza');
//FIM PIZZAS//

//FOGAZZAS//
Route::get('/fogazzas', 'FogazzasController@fogazzas');
//FIM FOGAZZAS//
Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );




