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

// -----------------------------   Product match    -------------------------------------