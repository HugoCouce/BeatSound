<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/usuario/login', function () {
    return view('/usuario/login');
});

/* Especificamos solo una ruta del controlador de usuarios*/
/* Route::get('/usuario/register', [UsuarioController::class, 'create']); */
/* Aquí especificamos todas las rutas que tiene el controlador */
Route::resource('usuario', UsuarioController::class);
