@extends('layouts.main')
@section('content')

@foreach ($articles as $article)
<div class="panel panel-default">
<div class="panel-heading">

<a href="{{url('articles/'.$article->id)}}">
  {{$article->title}}
</a>
</div>
  <div class="panel-body">{{$article->body}}</div>
</div>

@endforeach

@stop
