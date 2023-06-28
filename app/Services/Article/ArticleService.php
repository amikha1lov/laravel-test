<?php

namespace App\Services\Article;

use App\Models\Article;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleService
{
    public function create(array $data)
    {
        $imagePath = $this->generateImagePath(Arr::get($data, 'image'));

        return Article::query()->create([
            'title' => Arr::get($data, 'title'),
            'image' => $imagePath,
            'preview_text' => mb_strimwidth(Arr::get($data, 'preview_text'), 0, 50, "..."),
            'detail_text' => Arr::get($data, 'detail_text')
        ]);
    }

    public function fetchAll(Request $request)
    {
        return Cache::remember('articles', 3600, function (){
            return Article::withCount('comments')->paginate(10);
        });
    }

    public function update(array $data, Article $article)
    {

        if (Arr::has($data, 'image')) {
            $imagePath = $this->generateImagePath(Arr::get($data, 'image'));
            Arr::set($data, 'image', $imagePath);
        }

        return $article->update(
            $data
        );
    }

    protected function generateImagePath($image): string
    {
        return Storage::put('articles/photos', $image);
    }

}
