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
	$product = App\Product::find(1);
    return view('welcome');
});




//Ruta vista de producto
Route::get('/ProductView/{id}', 'Product_View_Controller@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/compra', function () {
    return view('Compra');
});


Route::get('/compraproducto', 'purchasesController@ObtenerProducto');

Route::post('/compraproducto', 'purchasesController@SavePurchase');

Route::get('/Dash', 'ClientController@eva');

Route::get('/search', 'ControllerForSearching@showResults');
