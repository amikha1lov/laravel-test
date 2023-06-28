<?php

namespace App\Http\Controllers\Admin;

use App\Facades\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\Article\CreateArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article as ArticleModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = Article::fetchAll($request);

        return view('admin.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArticleRequest $request)
    {
        Article::create(
            $request->validated()
        );

        return redirect(route('admin.articles'));
    }

    public function show(ArticleModel $article)
    {
        //
    }

    public function edit(ArticleModel $article)
    {
        return view('admin.articles-edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, ArticleModel $article)
    {
        Article::update(
            $request->validated(),
            $article
        );

        return redirect(route('admin.articles'));
    }

    public function destroy(ArticleModel $article)
    {

        $article->delete();

        return redirect(route('admin.articles'));

    }
}
