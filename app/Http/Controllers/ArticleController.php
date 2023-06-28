<?php

namespace App\Http\Controllers;

use App\Facades\Article;
use App\Models\Article as ArticleModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function all(Request $request)
    {
        $articles = Article::fetchAll($request);

        return view('public.articles', compact('articles'));
    }

    public function show(ArticleModel $article)
    {
        return view('public.article', compact('article'));
    }
}
