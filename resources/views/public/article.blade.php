@extends('layout.app')
@section('title',$article->title)
@section('content')
    <ul>
        <li>Заголовок: {{ $article->title }}</li>
        <li><img src="{{ $article->image }}" alt="{{ $article->title }}"></li>
        <li>Детальный текст: {{ $article->detail_text }}</li>
        <li>Дата: {{ $article->created_at }}</li>
    </ul>



    <form method="POST" class="ajax-form ajax-form-comments">
        @csrf
        <input type="text" name="title" placeholder="Тема комментария">
        <input type="hidden" name="article_id" value="{{ $article->id }}">
        <textarea name="content" placeholder="Текст комментария"></textarea>
        <input type="submit" value="Оставить комментарий">
    </form>

    <x-comments :comments="$article->comments"></x-comments>


@endsection
