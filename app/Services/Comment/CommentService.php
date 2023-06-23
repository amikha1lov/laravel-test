<?php

namespace App\Services\Comment;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Arr;

class CommentService
{
    public function create(array $data)
    {

        $article = Article::find(Arr::get($data, 'article_id'));

        if (!$article) {
            throw new \Exception('Статья не найдена');
        }

        return Comment::query()->create([
            'title' => Arr::get($data, 'title'),
            'content' => Arr::get($data, 'content'),
            'article_id' => Arr::get($data, 'article_id')
        ]);
    }
}
