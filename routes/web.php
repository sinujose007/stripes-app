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

Route::get('/', 'App\Http\Controllers\ProductsController@index')->middleware(['auth'])->name('dashboard');
Route::get('products/{id}', 'App\Http\Controllers\ProductsController@buy')->middleware(['auth'])->name('single');
Route::post('checkout', 'App\Http\Controllers\ProductsController@checkout')->middleware(['auth'])->name('checkout');

require __DIR__.'/auth.php';
