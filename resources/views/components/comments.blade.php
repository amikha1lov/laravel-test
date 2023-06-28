@props(['comments'])

<h2>Комментарии</h2>
@if(count($comments) < 1)
    Комментариев пока нет
@else
    @foreach($comments as $comment)
        <h3>{{ $comment->title }}</h3>
        <p>{{ $comment->content }}</p>
    @endforeach
@endif


