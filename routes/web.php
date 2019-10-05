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

//site

Route::get('/index', function () {
    return view('site.pages.index');
});
Route::get('/category', function () {
    return view('site.pages.category');
});
Route::get('/about', function () {
    return view('site.pages.about');
});
Route::get('/product/detail', function () {
    return view('site.pages.product_details');
});
Route::get('/shopping/cart', function () {
    return view('site.pages.shopping_cart');
});
Route::get('/checkout', function () {
    return view('site.pages.checkout');
});
Route::get('/account', function () {
    return view('site.pages.account');
});
Route::get('/wishlist', function () {
    return view('site.pages.wishlist');
});
Route::get('/orders_list', function () {
    return view('site.pages.orders_list');
});
Route::get('/register', function () {
    return view('site.pages.register');
});
