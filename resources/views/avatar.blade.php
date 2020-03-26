@extends('template.layout')

@section('main')
    @foreach ($avatars as $avatar)
        <h2>{{$avatar->user->name}}</h2>
        <img src="{{$avatar->img}}" alt="">
    @endforeach
@endsection