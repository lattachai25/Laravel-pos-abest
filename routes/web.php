<?php
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'HomeController');
Route::resource('/home', 'HomeController');

// -----------------------------       -------------------------------------
Route::resource('/sku', 'sku\SkuController');
Route::resource('/plu', 'plu\PluController');
Route::resource('/price', 'price\PriceController');
Route::resource('/branch', 'branch\BranchController');
Route::resource('/master', 'master\MasterController');
Route::resource('/order', 'order\OrderController');
Route::resource('/brancheOrder', 'BrancheOrderController');

Route::resource('/mappingcode', 'mappingcode\MappingController');
Route::get('/mappingcode_edit','mappingcode\MappingController@mappingcode_edit')->name('mappingcode_edit');

Route::post('/order_show','order\OrderController@order_show')->name('order_show');
Route::get('/index2','order\OrderController@index2')->name('index2');
Route::post('/postData','order\OrderController@postData')->name('postData');

// -----------------------------      -------------------------------------