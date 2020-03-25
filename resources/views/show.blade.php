@extends('template.layout')

@section('main')

    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <ul>
        <li><p>Categoria: {{$post->category}}</p></li>
        <li><p>Pubblicato il {{$post->data}}</p> </li>
    </ul>
@endsection
