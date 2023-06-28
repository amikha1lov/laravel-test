@extends('layout.app')
@section('title','Статьи')
@section('content')
    <a href="{{ route('admin.articles.create') }}">Добавить статью</a>
    <table>
        <caption>Список статей</caption>

        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Изображение</th>
            <th>Короткое описание</th>
            <th>Комментариев</th>
            <th>Действия</th>
        </tr>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td><img src="{{ $article->image }}" alt="{{ $article->title }}" width="50px" height="50px"></td>
                <td>{{ $article->preview_text }}</td>
                <td>{{ $article->comments_count }}</td>
                <td>
                    <div>

                        <form action="{{ route('admin.articles.delete', $article->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить">
                        </form>
                        <a href="{{ route('admin.articles.edit', $article->id) }}">Редактировать</a>
                    </div>
                </td>
            </tr>
            @endforeach

    </table>

@endsection
