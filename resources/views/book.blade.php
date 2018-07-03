@extends('layout.app')
@section('content')
@if(empty($book))

<div class="alert alert-danger" role="alert">
  There are no books!
</div>
@else
<div class="container">
<div class="row">
  <div class="col-sm-8 col-md-8">
    <div class="thumbnail">
      <img src="{{ asset($book->image) }}" width="100px" height="100px">
      <div class="caption">
      	<h3>{{$book->name}}</h3>
        <h2>{{$book->author}}</h2>
        <p>{{$book->plot}}</p>
      </div>
    </div>
  </div>
</div>
</div>
@endif
@endsection