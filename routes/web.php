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

Route::get('/', 'IndexController@index')->name('index-home');
Route::get('add-product', 'AddProductController@index')->middleware('auth')->name('add-product');
Route::post('add-product', 'AddProductController@getData')->name('add-product');
Route::get('edit-product/{id}', 'EditProductController@index')->middleware('auth')->name('edit-product');
Route::post('edit-product/{id}', 'EditProductController@editData')->name('edit-product');
Route::get('product/{id}', 'ProductPageController@index')->name('product-page');
Route::post('product/{id}', 'ProductPageController@buyProduct')->middleware('auth')->name('product-page');
Route::get('product-list/user/{id}', 'UserProductListController@index')->middleware('auth')->name('user-product-list');
Route::get('product-sale-list/user/{id}', 'UserProductListController@viewSaleProducts')->middleware('auth')->name('user-sale-products');
Route::get('product-buy-list/user/{id}', 'UserProductListController@viewBuyProducts')->middleware('auth')->name('user-buy-products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
