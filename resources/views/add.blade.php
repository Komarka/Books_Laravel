@extends('layout.app')
@section('content')
<div class="container">
<form action="{{route('books.store')}}" enctype="multipart/form-data" method="POST">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="author">Author:</label>
    <input type="text" class="form-control" required="true" name='author' id="author">
  </div>
 <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" required="true" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="plot">Plot:</label>
    <input type="text" class="form-control" required="true" name="plot" id="plot">
  </div>
  <div class="form-group">
    <label for="pages">Pages:</label>
    <input type="number"  min='1' class="form-control" required="true" name="pages" id="pages">
  </div>
  <span class="btn btn-default btn-file">
    Upload your image: <input  name='image'  required="true" type="file">
</span>
</br>
</br>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@endsection