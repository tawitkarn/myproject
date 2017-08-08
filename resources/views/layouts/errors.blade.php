@if (count($errors))
<div class="form-group">
    <div class="alert alert-danger alert-dismissable fade in">
      <ul>
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif
