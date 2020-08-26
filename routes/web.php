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

Route::get('/', ['as' => 'home', 'uses' => 'CrudController@index']);

// articulos

Route::get('items/listar', ['as' => 'lista', 'uses' => 'CrudController@list']);

Route::get('items/newItem', ['as' => 'item', 'uses' => 'CrudController@create']);

Route::post('items/store', ['as' => 'items.store', 'uses' => 'CrudController@store']);

Route::get('items/{id}/info', ['as' => 'item.info', 'uses' => 'CrudController@show']);

Route::get('items/{id}/editar', ['as' => 'item.edit', 'uses' => 'CrudController@edit']);

Route::put('items/{id}', ['as' => 'item.update', 'uses' => 'CrudController@update']);

Route::delete('items/{id}/delete', ['as' => 'item.destroy', 'uses' => 'CrudController@destroy']);

// categorias
Route::get('categorias', ['as' => 'categorias.listar', 'uses' => 'CatController@list']);

Route::get('categorias/create', ['as' => 'categorias.crear', 'uses' => 'CatController@create']);

Route::post('categorias/catStore', ['as' => 'categorias.store', 'uses' => 'CatController@store']);

Route::get('categorias/{id}', ['as' => 'categorias.info', 'uses' => 'CatController@show']);

Route::get('categorias/{id}', ['as' => 'categorias.edit', 'uses' => 'CatController@edit']);

Route::put('categorias/{id}', ['as' => 'categorias.update', 'uses' => 'CatController@update']);

