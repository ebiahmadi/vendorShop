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
    return view('clients.productsList');
});
Route::get('/products',[
    'uses' => 'productionsController@productsList',
    'as'   => 'products.list'
]);
Route::get('/product/{id}',[
    'uses' => 'productionsController@productPage',
    'as'   => 'product.page'
]);