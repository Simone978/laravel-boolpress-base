@extends('template.layout')

@section('main')
    @foreach ($posts as $post)
    <img src="{{$post->imageUrl}}" alt="">
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <p>Categoria: {{$post->category}}</p>
    <p>Pubblicato il {{$post->data}}</p>
    <a href="{{route('posts.edit', $post)}}">Modifica</a>
    <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Cancella</button>
    </form>
    @endforeach
@endsection