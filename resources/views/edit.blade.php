@extends('template.layout')

@section('main')
    <form action="{{route('posts.update',$post->id)}}" method="post">
        @csrf
        @method('PATCH')
        <input type="text" name="title" value="{{$post->title}}" placeholder="titolo">
        <input type="text" name="content" value="{{$post->content}}" placeholder="scrivi un testo">
        <input type="date" name="data" value="{{$post->data}}" placeholder="data">
        <input type="text" name="category" value="{{$post->category}}" placeholder="categoria">
        <button type="submit">Aggiorna</button>
    </form>
@endsection