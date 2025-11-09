<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', [ArticleController::class,'index'])->name('home');
Route::get('/category/{categoryId}', [ArticleController::class,'filterByCategory'])->name('filterByCategory');
Route::get('/article/{articleId}', [ArticleController::class,'show'])->name('articleDetail');
Route::get('/writer', [ArticleController::class,'author'] )->name('writers');
Route::get('/aboutus', [ArticleController::class, 'aboutUs'] )->name('aboutUs');
Route::get('/popular', [ArticleController::class, 'popular'] )->name('popular');
