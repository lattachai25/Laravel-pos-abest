<?php
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'HomeController');
Route::resource('/home', 'HomeController');

// -----------------------------   Sourcing    -------------------------------------
Route::resource('/SourMain', 'Sourcing\SourMainController');
Route::resource('/SourPartner', 'Sourcing\SourPartnerController');
Route::resource('/SourPrice', 'Sourcing\SourPriceController');
Route::resource('/SourProduct', 'Sourcing\SourProductController');

// -----------------------------   Sourcing    -------------------------------------

// -----------------------------   Products    -------------------------------------
Route::resource('/Product', 'Product\ProductController');

// -----------------------------   Products    -------------------------------------

// -----------------------------   Product match    -------------------------------------
Route::resource('/ProductMatch', 'ProductMatch\ProductMatchController');
Route::get('/ProductMatch2','ProductMatch\ProductMatchController@index2')->name('ProductMatch2.index2');;
// -----------------------------   Product match    -------------------------------------

// -----------------------------   Add Plu    -------------------------------------
Route::resource('/PluCode', 'plu_code\PluCodeController');
// -----------------------------   Add Plu    -------------------------------------
// -----------------------------   Add SKU    -------------------------------------
Route::resource('/SkuCode', 'sku_code\SkuCodeController');
// -----------------------------   Add SKU    -------------------------------------

// -----------------------------   Add SKU    -------------------------------------
Route::resource('/Order', 'order\OrderlisController');
// -----------------------------   Add SKU    -------------------------------------

// // -----------------------------   Add Order    -------------------------------------
// Route::resource('/Order', 'order\OrdersController');
// // -----------------------------   Add Order    -------------------------------------