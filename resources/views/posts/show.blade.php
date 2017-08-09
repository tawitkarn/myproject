@extends('layouts.main')
@section('content')
  <h1>{{$post->title}}</h1>
  <hr>
  <p>{{$post->title}}</p>
  <hr>
  <h1>Comment</h1>
  <div class="comments">
    <ul class="list-group">
    @foreach ($post->comments as $comment)
      <li class="list-group-item">
        <strong>
{{$comment->created_at->diffForHumans()}}: &nbsp;
        </strong>

        {{$comment->body}}
      </li>

    @endforeach
    </ul>
  </div>
@endsection
