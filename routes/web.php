<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function(){
  Route::post('/parceiros/{id}',  [
    'uses' => 'ParceiroController@editPost',
  ]);
  Route::resource('parceiros', 'ParceiroController');
  Route::resource('categoriaParceiros', 'CategoriaParceiroController');

});
