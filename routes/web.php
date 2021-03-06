<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {return view('dashboard');})->name('dashboard');

Route::get('/productos',[\App\Http\Controllers\products\ProductosController::class,'index'])->name('productos');
Route::get('/productos/create',[\App\Http\Controllers\products\ProductosController::class,'create'])->name('productos.crear');
Route::post('/productos/create',[\App\Http\Controllers\products\ProductosController::class,'store'])->name('productos.guardar');
Route::get('/productos/editar/{id}',[\App\Http\Controllers\products\ProductosController::class,'edit'])->name('productos.editar');
Route::post('/productos/update/{id}',[\App\Http\Controllers\products\ProductosController::class,'update'])->name('productos.actualizar');


