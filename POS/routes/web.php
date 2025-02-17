<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/home', HomeController::class);

// Prefix untuk kategori produk
Route::prefix('category')->group(function () {
    Route::get('/{type}', [ProductController::class, 'category']);
});

// Parameter untuk user
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

Route::get('/sales', SalesController::class);

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
