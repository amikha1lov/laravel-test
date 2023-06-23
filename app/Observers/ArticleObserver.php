<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class ArticleObserver
{
    public function created()
    {
        Cache::forget('articles');
    }
}
