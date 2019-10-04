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
Route::get('/blank', 'HomeController@blank')->name('blank');
Route::get('/form', 'HomeController@form')->name('form');
Route::get('/addmore', 'HomeController@addmore')->name('addmore');
Route::get('/crud', 'HomeController@crud')->name('crud');
Route::post('/crud', 'HomeController@crudgenarate')->name('crudgenarate');

