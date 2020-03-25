@extends('template.layout')

@section('main')
    @foreach ($posts as $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <p>Categoria: {{$post->category}}</p>
    <p>Pubblicato il {{$post->data}}</p>
    <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Cancella</button>
    </form>
    @endforeach
@endsection