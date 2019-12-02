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



//======================== Category Route Start ===============================//
Route::get('/category/list','CategoryController@show');
Route::get('/category/create','CategoryController@create');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::get('/category/delete/{id}','CategoryController@destroy');
Route::get('/category','CategoryController@index');
Route::get('/category/export/excel','CategoryController@ExportExcel');
Route::get('/category/export/pdf','CategoryController@ExportPDF');
Route::post('/category','CategoryController@store');
Route::post('/category/ajax','CategoryController@ajaxSave');
Route::post('/category/datatable/ajax','CategoryController@datatable');
Route::post('/category/update/{id}','CategoryController@update');
//======================== Category Route End ===============================//
//======================== Testphase Route Start ===============================//
Route::get('/testphase/list','TestphaseController@show');
Route::get('/testphase/create','TestphaseController@create');
Route::get('/testphase/edit/{id}','TestphaseController@edit');
Route::get('/testphase/delete/{id}','TestphaseController@destroy');
Route::get('/testphase','TestphaseController@index');
Route::get('/testphase/export/excel','TestphaseController@ExportExcel');
Route::get('/testphase/export/pdf','TestphaseController@ExportPDF');
Route::post('/testphase','TestphaseController@store');
Route::post('/testphase/ajax','TestphaseController@ajaxSave');
Route::post('/testphase/datatable/ajax','TestphaseController@datatable');
Route::post('/testphase/update/{id}','TestphaseController@update');
//======================== Testphase Route End ===============================//
//======================== Testphased Route Start ===============================//
Route::get('/testphased/list','TestphasedController@show');
Route::get('/testphased/create','TestphasedController@create');
Route::get('/testphased/edit/{id}','TestphasedController@edit');
Route::get('/testphased/delete/{id}','TestphasedController@destroy');
Route::get('/testphased','TestphasedController@index');
Route::get('/testphased/export/excel','TestphasedController@ExportExcel');
Route::get('/testphased/export/pdf','TestphasedController@ExportPDF');
Route::post('/testphased','TestphasedController@store');
Route::post('/testphased/ajax','TestphasedController@ajaxSave');
Route::post('/testphased/datatable/ajax','TestphasedController@datatable');
Route::post('/testphased/update/{id}','TestphasedController@update');
//======================== Testphased Route End ===============================//
//======================== Cateh Route Start ===============================//
Route::get('/cateh/list','CatehController@show');
Route::get('/cateh/create','CatehController@create');
Route::get('/cateh/edit/{id}','CatehController@edit');
Route::get('/cateh/delete/{id}','CatehController@destroy');
Route::get('/cateh','CatehController@index');
Route::get('/cateh/export/excel','CatehController@ExportExcel');
Route::get('/cateh/export/pdf','CatehController@ExportPDF');
Route::post('/cateh','CatehController@store');
Route::post('/cateh/ajax','CatehController@ajaxSave');
Route::post('/cateh/datatable/ajax','CatehController@datatable');
Route::post('/cateh/update/{id}','CatehController@update');
//======================== Cateh Route End ===============================//
//======================== Datapull Route Start ===============================//
Route::get('/datapull/list','DatapullController@show');
Route::get('/datapull/create','DatapullController@create');
Route::get('/datapull/edit/{id}','DatapullController@edit');
Route::get('/datapull/delete/{id}','DatapullController@destroy');
Route::get('/datapull','DatapullController@index');
Route::get('/datapull/export/excel','DatapullController@ExportExcel');
Route::get('/datapull/export/pdf','DatapullController@ExportPDF');
Route::post('/datapull','DatapullController@store');
Route::post('/datapull/ajax','DatapullController@ajaxSave');
Route::post('/datapull/datatable/ajax','DatapullController@datatable');
Route::post('/datapull/update/{id}','DatapullController@update');
//======================== Datapull Route End ===============================//
//======================== Attendance Route Start ===============================//
Route::get('/attendance/list','AttendanceController@show');
Route::get('/attendance/create','AttendanceController@create');
Route::get('/attendance/edit/{id}','AttendanceController@edit');
Route::get('/attendance/delete/{id}','AttendanceController@destroy');
Route::get('/attendance','AttendanceController@index');
Route::get('/attendance/export/excel','AttendanceController@ExportExcel');
Route::get('/attendance/export/pdf','AttendanceController@ExportPDF');
Route::post('/attendance','AttendanceController@store');
Route::post('/attendance/ajax','AttendanceController@ajaxSave');
Route::post('/attendance/datatable/ajax','AttendanceController@datatable');
Route::post('/attendance/update/{id}','AttendanceController@update');
//======================== Attendance Route End ===============================//
//======================== Student Route Start ===============================//
Route::get('/student/list','StudentController@show');
Route::get('/student/create','StudentController@create');
Route::get('/student/edit/{id}','StudentController@edit');
Route::get('/student/delete/{id}','StudentController@destroy');
Route::get('/student','StudentController@index');
Route::get('/student/export/excel','StudentController@ExportExcel');
Route::get('/student/export/pdf','StudentController@ExportPDF');
Route::post('/student','StudentController@store');
Route::post('/student/ajax','StudentController@ajaxSave');
Route::post('/student/datatable/ajax','StudentController@datatable');
Route::post('/student/update/{id}','StudentController@update');
//======================== Student Route End ===============================//
//======================== Sitesettings Route Start ===============================//
Route::get('/sitesettings/list','SitesettingsController@show');
Route::get('/sitesettings/create','SitesettingsController@create');
Route::get('/sitesettings/edit/{id}','SitesettingsController@edit');
Route::get('/sitesettings/delete/{id}','SitesettingsController@destroy');
Route::get('/sitesettings','SitesettingsController@index');
Route::get('/sitesettings/export/excel','SitesettingsController@ExportExcel');
Route::get('/sitesettings/export/pdf','SitesettingsController@ExportPDF');
Route::post('/sitesettings','SitesettingsController@store');
Route::post('/sitesettings/ajax','SitesettingsController@ajaxSave');
Route::post('/sitesettings/datatable/ajax','SitesettingsController@datatable');
Route::post('/sitesettings/update/{id}','SitesettingsController@update');
//======================== Sitesettings Route End ===============================//