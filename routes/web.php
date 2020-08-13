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

Route::get('/pizzas', 'pizzasController@pizzas');
Route::get('/detalhe/{id}', 'PizzasController@detalhePizza');

Route::get('/cadastrarPizza', 'PizzasController@AreaCadastrar');

Route::get('/cadastrarPizza', function () {return view('cadastrarPizza');});
Route::post('/cadastrarPizza', 'PizzasController@cadastrarPizza');




