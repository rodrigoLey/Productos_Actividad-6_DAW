<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Vistas productos */
/*
Route::get('/productos', function () {
    return view('productos.index');
});

Route::get('/productos/create', function () {
    return view('productos.create');
});

Route::get('/productos/edit', function () {
    return view('productos.edit');
});
*/

/*Rutas de vista mediante Controlador*/

Route::get('/productos/edit',[ProductoController::class,'edit']);
Route::get('/productos/create',[ProductoController::class,'create']);
Route::get('/productos',[ProductoController::class,'index']);
