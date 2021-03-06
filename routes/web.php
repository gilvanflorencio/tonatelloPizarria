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
Route::get('/', 'indexController@pizzas');//->name('pizzas')->middleware('auth');
Route::get('/detalhe/{id}', 'PizzaController@detalhePizza');


  //PIZZAS //
Route::get('/pizzas', 'PizzaController@pizzas');//->name('pizzas')->middleware('auth');
Route::get('/detalhe/{id}', 'PizzaController@detalhePizza');
Route::post('/pizzas', 'PizzaController@create');
Route::get('deletePizza/{id}', 'PizzaController@deletePizza');
Route::get('editPizza','PizzaController@editPizza');
//FIM PIZZAS//

//FOGAZZAS//
Route::get('/fogazzas', 'FogazzasController@fogazzas');
//FIM FOGAZZAS//

//ESFIHAS//
Route::get('/esfihas', 'EsfihasController@esfihas');
//FIM ESFIHAS//
Route::get('/file/img/{id}', ['uses'=>'FileController@sendfile'] );


//LOGIN//
Route::get('/login', 'UsuariosController@loginView')->name('login');

Route::post('/login', 'UsuariosController@login');
Route::get('/usuarios/logout', 'UsuariosController@logout');
// FIM LOGIN//

