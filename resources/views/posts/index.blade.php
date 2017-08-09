@extends('layouts.main')
@section('content')
  <h1> Create a Post</h1>
  <hr>
  @foreach ($posts as $post)
    <div class="blog-post">
      <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
      </h2>
      {{-- <p class="blog-post-meta">{{Carbon\carbon::parse($post->published_at)->diffForHumans()}}
        by <a href="#">KarnzZ</a> --}}
        {{-- {{dd(Carbon\carbon::parse($post->published_at), $post->created_at)}} --}}
    <p class="blog-post-meta">{{$post->created_at->format('l jS \\of F Y h:i:s A')}}
      by <a href="#">KarnzZ</a>
    </p>
    {{$post->body}}

    </div>

  @endforeach


@endsection
