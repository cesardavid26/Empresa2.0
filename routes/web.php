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

Route::get('/', [App\Http\Controllers\EmpresaController::class, 'replace'])->name('welcome');
Route::get('/', [App\Http\Controllers\ProductoController::class, 'list'])->name('welcome');


Route::resource('/categoria', '\App\Http\Controllers\CategoriaController')->middleware('auth');
Route::resource('/marca', '\App\Http\Controllers\MarcaController')->middleware('auth');
Route::resource('/empresa', '\App\Http\Controllers\EmpresaController')->middleware('auth');
Route::resource('/producto', '\App\Http\Controllers\ProductoController')->middleware('auth');




Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
