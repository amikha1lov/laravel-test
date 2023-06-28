@extends('layout.app')
@section('title','Статьи')
@section('content')

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <input type="text" name="title" placeholder="Заголовок">
        @error('title')
        <div>{{ $message }}</div>
        @enderror

        <input type="file" name="image" placeholder="Картинка">
        @error('image')
        <div>{{ $message }}</div>
        @enderror
        <textarea name="preview_text" placeholder="Короткие описание"></textarea>
        @error('preview_text')
        <div>{{ $message }}</div>
        @enderror
        <textarea name="detail_text" placeholder="Детальное описание"></textarea>
        @error('detail_text')
        <div>{{ $message }}</div>
        @enderror
        <input type="submit" value="Добавить статью">


    </form>

@endsection
