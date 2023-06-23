<?php

namespace App\Facades;

use App\Services\Article\ArticleService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void create(array $data)
 * @method static void update(array $data, \App\Models\Article $article)
 * @method static void fetchAll()
 *
 * @see \App\Services\Article\ArticleService
 */
class Article extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return ArticleService::class;
    }

}
