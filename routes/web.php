<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     return 'Selamat Datang Di Website Dengan Laravel';
// });
// Route::get('/about', function(){
//     return 'NIS : 25996/2197.063
//     NAMA : HAFIDZY
//     KELAS : XI-RPLA';
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Ini adalah halaman Artikel dengan ID : '. $id;
// });

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('home', [HomeController::class, 'index']);

Route::prefix('')->group(function(){
    Route::get('/product', [ProductController::class, 'produk']);
});
 
Route::prefix('')->group(function(){
    Route::get('/program', [ProgramController::class, 'program']);
});


Route::get('/news/{id}', function ($id) {
    return 'Ini adalah halaman News dengan ID : '. $id;
});
Route::get('/about', function(){
   return 'NIS : 25996/2197.063
    NAMA : HAFIDZY
    KELAS : XI-RPLA';
}); 
