@extends('layout.app')
@section('title',$article->title)
@section('content')
    <ul>
        <li>Заголовок: {{ $article->title }}</li>
        <li><img src="{{ $article->image }}" alt="{{ $article->title }}"></li>
        <li>Детальный текст: {{ $article->detail_text }}</li>
        <li>Дата: {{ $article->created_at }}</li>
    </ul>
@endsection
