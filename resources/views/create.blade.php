@extends('template.layout')

@section('main')
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="title" val="" placeholder="titolo">
        <input type="text" name="content" val="" placeholder="scrivi un testo">
        <input type="date" name="data" val="" placeholder="data">
        <input type="text" name="category" val="" placeholder="categoria">
        <button type="submit">Salva</button>
    </form>
@endsection