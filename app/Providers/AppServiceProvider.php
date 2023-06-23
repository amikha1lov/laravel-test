<?php

namespace App\Providers;

use App\Services\Article\ArticleService;
use App\Services\Comment\CommentService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ArticleService::class, ArticleService::class);
        $this->app->bind(CommentService::class, CommentService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
