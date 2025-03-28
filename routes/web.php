<?php

use App\Http\Controllers\ProductController;
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

// Product
// Read
Route::get('/data/product', [ProductController::class, 'index'])->name('product');

// Create
Route::get('/data/product/form-product', [ProductController::class, 'form'])->name('form-product');
Route::post('/data/product/proses-product', [ProductController::class, 'buat'])->name('buat-product');

// Destroy
Route::get('/data/product/hapus-data/{id}', [ProductController::class, 'destroy'])->name('hapus-product');

// Edit
Route::get('/data/product/edit-data/{id}', [ProductController::class, 'edit'])->name('edit-product');
Route::post('/data/product/update-data/{id}', [ProductController::class, 'update'])->name('update-product');
