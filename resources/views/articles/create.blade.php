@extends('layouts.main')
@section('content')

<form class="" action="../articles" method="post">
  {{csrf_field()}}
  <div class="form-group">
<label for="title">Title: </label>
    <input type="text" class="form-control" name="title">
  </div>

  <div class="form-group">
<label for="body">Body: </label>
<textarea class="form-control" name="body" ></textarea>
</div>
<div class="form-group">
  <label for="published_at">Publish on</label>
  <input type="date" class="form-control" name="date" value="2017-10-25">


</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Submit</button>
</div>
</form>

@endsection
