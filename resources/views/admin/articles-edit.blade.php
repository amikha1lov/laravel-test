@extends('layout.app')
@section('title','Статьи')
@section('content')

    <form action="{{ route('admin.articles.update',$article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <input type="text" name="title" placeholder="Заголовок" value="{{ $article->title }}">
        @error('title')
        <div>{{ $message }}</div>
        @enderror

        <input type="file" name="image" placeholder="Картинка">
        @error('image')
        <div>{{ $message }}</div>
        @enderror
        <textarea name="preview_text" placeholder="Короткие описание">{{ $article->preview_text }}</textarea>
        @error('preview_text')
        <div>{{ $message }}</div>
        @enderror
        <textarea name="detail_text" placeholder="Детальное описание" >{{ $article->detail_text }}</textarea>
        @error('detail_text')
        <div>{{ $message }}</div>
        @enderror
        <input type="submit" value="Добавить статью">


    </form>

@endsection
