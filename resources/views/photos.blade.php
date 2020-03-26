@extends('template/layout')

@section('main')
    @foreach ($photos as $photo)
    <h2>{{$photo->user->name}}</h2>
    <img src="{{$photo->path}}" alt="">
    <p>{{$photo->description}}</p>
    @endforeach
@endsection