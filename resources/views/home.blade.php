@extends('template/layout')


@section('main')
<ul>
    @foreach ($users as $user)
        
            @foreach ($user->photos as $photo)
            <li><img src="{{$photo['path']}}" alt=""></li>
            @endforeach
            <li>nome: {{$user->name}}</li>
            <li>email: {{$user->email}}</li>
        
    @endforeach
</ul>
@endsection