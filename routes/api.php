<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas de productos
Route::resource('productos', 'ProductoController');

// Rutas de clientes
Route::resource('clientes', 'ClienteController');

// Rutas de carrito
Route::resource('carritos', 'CarritoController');

// Rutas de carrito_producto
Route::resource('carrito-productos', 'CarritoProductoController');

// Rutas de carrito_producto
Route::resource('facturas', 'FacturaController');
