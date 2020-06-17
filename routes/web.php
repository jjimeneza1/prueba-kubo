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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('/venta', 'WelcomeController@guardarVenta')->name('venta.guardar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/categorias/crear', 'CategoriasController@crear')->name('categorias.crear');
Route::post('/categorias/crear', 'CategoriasController@guardar')->name('categorias.guardar');
Route::get('/categorias/lista', 'CategoriasController@lista')->name('categorias.lista');





Route::get('/productos/crear', 'ProductosController@crear')->name('productos.crear');
Route::post('/productos/crear', 'ProductosController@guardar')->name('productos.guardar');
Route::get('/productos/lista', 'ProductosController@lista')->name('productos.lista');

Route::get('/ventas/lista', 'ProductosController@venta')->name('ventas.lista');