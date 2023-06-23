<?php

use App\Http\Controllers\Api\v1\ArticleController;
use App\Http\Controllers\Api\v1\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(CommentController::class)->prefix('/comments')->group(function () {
    Route::post('create','create');
});

Route::controller(ArticleController::class)->prefix('/articles')->group(function () {
    Route::get('/','all');
    Route::post('create','create');
    Route::get('/{article}','show');
    Route::patch('/{article}','update');
    Route::delete('/{article}','delete');

});

