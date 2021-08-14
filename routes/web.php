<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/user/login', function () {
    return view('/user/login');
});

/* Especificamos solo una ruta del controlador de users*/
/* Route::get('/user/register', [UserController::class, 'create']); */
/* Aquí especificamos todas las rutas que tiene el controlador */
Route::resource('user', UserController::class);
