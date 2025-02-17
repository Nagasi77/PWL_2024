<?php

use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', HomeController::class);
Route::get('/hello', [WelcomeController::class, 'hello']);

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);
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

Route::get('/world', function () {
    return 'World';
   });
   
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });

    Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($id) {
 return 'Halaman Artikel
dengan ID ' .$id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });



