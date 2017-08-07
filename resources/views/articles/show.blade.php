@extends('layouts.main')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    {{$article->title}}
  </div>
  <div class="panel-body">
    {{$article->body}}
  </div>
</div>
@stop
