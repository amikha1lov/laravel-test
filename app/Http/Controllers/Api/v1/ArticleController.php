<?php

namespace App\Http\Controllers\Api\v1;

use App\Facades\Article;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Http\Resources\ArticleCollection;
use App\Models\Article as ArticleModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Article\CreateArticleRequest;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function all()
    {
        return new ArticleCollection(Article::fetchAll(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(CreateArticleRequest $request)
    {

        Article::create(
            $request->validated()
        );

        return [
          'status' => 'success'
        ];
    }

    public function show(ArticleModel $article)
    {
        return new ArticleResource($article);
    }

    public function update(UpdateArticleRequest $request, ArticleModel $article)
    {
        Article::update(
            $request->validated(),
            $article
        );

        return [
            'status' => 'success'
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(ArticleModel $article)
    {
        $article->delete();

        return [
            'status' => 'success'
        ];
    }
}
