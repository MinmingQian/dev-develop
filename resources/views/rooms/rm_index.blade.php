@extends('app')

@section('content')
    <h1>Departments</h1>

    <hr>

    @foreach($rooms as $room)
        <article>
            {{$room}}
        </article>
    @endforeach

@endsection
