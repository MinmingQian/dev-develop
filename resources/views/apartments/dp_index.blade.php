@extends('app')

@section('content')
    <h1>Departments</h1>

    <hr>

    @foreach($apartments as $apartment)
        <article>
            {{$apartment}}
        </article>
    @endforeach

@endsection
