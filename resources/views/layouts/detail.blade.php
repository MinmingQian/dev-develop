@extends('layouts.default')


@section('title')
  @yield('page_title')
@endsection

@section('content')

  @yield('searchbar')

  @yield('page_content')

@endsection