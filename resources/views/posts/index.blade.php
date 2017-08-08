@extends('layouts.main')
@section('content')
  <h1> Create a Post</h1>
  <hr>
  @foreach ($posts as $post)
    @include('posts.post')

  @endforeach


@endsection
