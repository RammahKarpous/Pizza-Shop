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

// =========== PagesController ===========
// Get requests
Route::get('/', 'PagesController@index');




// =========== PizzasController ===========
// Get requests
Route::get('/pizza/{slug}', 'PizzasController@pizza');




// =========== CustomPizzasController ===========
// Get requests
Route::get('/custom_pizza', 'CustomPizzasController@customPizza');

// Post requests
Route::post('/add', 'CustomPizzasController@add');

// Delete requests

// Put requests




// =========== HomeController ===========
// Get requests
Auth::routes();

// Auth routes
Route::get('/dashboard', 'HomeController@index');
