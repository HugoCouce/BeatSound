<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

/* Especificamos las rutas para las nuevas funciones que vayamos incluyendo en el controlador.
Deben escribirse antes que las automáticas del propio controlador */
Route::get('product/buy', [ProductController::class, 'buy']);
Route::post('product/buy', [ProductController::class, 'buy']);
Route::get('product/buy/vinyl', [ProductController::class, 'vinyl']);
Route::post('product/buy/vinyl', [ProductController::class, 'vinyl']);
Route::get('product/buy/cd', [ProductController::class, 'cd']);
Route::post('product/buy/cd', [ProductController::class, 'cd']);

/* Aquí especificamos todas las rutas que tiene el controlador User.*/
Route::resource('user', UserController::class);

/* Aquí especificamos todas las rutas que tiene el controlador Product. */
Route::resource('product', ProductController::class)->middleware('auth');

/* Aquí especificamos todas las rutas que tiene el controlador Order. */
Route::get('order/customer/{nif}', [OrderController::class, 'customerOrders'])->where(['nif' => '[0-9]{8}[A-Z]']);
Route::get('order/confirmacionCompra', function () {
    return view('order.confirmacionCompra');
});
Route::resource('order', OrderController::class);
Route::post('order/create', [OrderController::class, 'create']);

/* Especificamos las rutas de autenticación. Están en sus correspondientes controladores */
Auth::routes();
