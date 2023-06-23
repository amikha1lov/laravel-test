<?php

namespace App\Facades;

use App\Services\Comment\CommentService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void create(array $data)
 *
 * @see \App\Services\Article\ArticleService
 */
class Comment extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return CommentService::class;
    }

}
