@extends('layout.app')
@section('title','Статьи')
@section('content')

    @foreach($articles as $article)

        <ul>
            <li> Заголовок: <a href="{{ route('public.article', $article->slug)}}">{{ $article->title }}</a></li>
            <li><img src="{{ $article->image }}" alt="{{ $article->title }}"></li>
            <li>Превью текст: {{ $article->preview_text }}</li>
            <li>Дата: {{ $article->created_at }}</li>
        </ul>

    @endforeach

    {{ $articles->links() }}
@endsection
