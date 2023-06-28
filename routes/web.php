<?php

use App\Http\Controllers\ArticleController as PublicArticleController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::controller(PublicArticleController::class)->prefix('/articles')->group(function () {
    Route::get('/','all')->name('public.articles');
    Route::get('/{article:slug}', 'show')->name('public.article');
});


Route::controller(AdminArticleController::class)->prefix('/admin/articles')->group(function (){
    Route::get('/','index')->name('admin.articles');
    Route::get('/{article}/edit','edit')->name('admin.articles.edit');
    Route::patch('/{article}/update','update')->name('admin.articles.update');
    Route::get('/create','create')->name('admin.articles.create');
    Route::post('/store','store')->name('admin.articles.store');
    Route::delete('/{article}','destroy')->name('admin.articles.delete');
});
