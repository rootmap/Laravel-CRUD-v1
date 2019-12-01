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
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/create', 'HomeController@create')->name('create');
Route::get('/table', 'HomeController@table')->name('table');
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

Route::get('/test', function () {
    echo md5(rand())."<br>"; 
    echo md5(rand())."<br>"; 
    echo md5(rand())."<br>"; 
    echo md5(rand())."<br>"; 
    echo time()."<br>"; 
    echo microtime()."<br>"; 
});


//======================== Testpage Route Start ===============================//
Route::get('/testpage/list','TestpageController@show');
Route::get('/testpage/create','TestpageController@create');
Route::get('/testpage/edit/{id}','TestpageController@edit');
Route::get('/testpage/delete/{id}','TestpageController@destroy');
Route::get('/testpage','TestpageController@index');
Route::post('/testpage','TestpageController@store');
Route::post('/testpage/ajax','TestpageController@ajaxSave');
Route::post('/testpage/datatable/ajax','TestpageController@datatable');
Route::post('/testpage/update/{id}','TestpageController@update');
//======================== Testpage Route End ===============================//