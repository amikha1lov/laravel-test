<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::controller(ArticleController::class)->prefix('/articles')->group(function () {
    Route::get('/','all')->name('public.articles');
    Route::get('/{article:slug}', 'show')->name('public.article');
});
