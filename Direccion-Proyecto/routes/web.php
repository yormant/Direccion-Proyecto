<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\InventariosController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\ComprasController;
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
    return view('welcome');
});

Route::get('/index',[\App\Http\Controllers\VistaController::class,'index'])->name('index');
Route::get('/recordar',[\App\Http\Controllers\VistaController::class,'recordar'])->name('recordar');
Route::get('/inicio',[\App\Http\Controllers\VistaController::class,'inicio'])->name('inicio');

Route::resource('productos', ProductosController::class);
Route::resource('inventarios', InventariosController::class);
Route::resource('vendedores', VendedoresController::class);
Route::resource('compras', ComprasController::class);
