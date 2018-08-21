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

/**
 * Route: root
 * method get
 */
Route::get('/', function () {
    return view('clients.productsList');
});
/**
 * Route: products => it lists all products
 * method get
 */
Route::get('/products',[
    'uses' => 'productionsController@productsList',
    'as'   => 'products.list'
]);
/**
 * Route: product Page => will show product page by it'd id
 * method get
 */
Route::get('/product/{id}',[
    'uses' => 'productionsController@productPage',
    'as'   => 'product.page'
]);
/**
 * Route: Panels => all Panel route
 **/
Route::get('/admin','adminController@login');
//Route::get('/vendor','vendorController@login');
//Route::get('/users','userController@login');

/**
 * Route: Auth => it redirect to register and login Pages for Authentication
 *
 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
