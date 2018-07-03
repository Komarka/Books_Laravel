@extends('layout.app')
@section('content')
@if(empty($books))
<div class="alert alert-danger" role="alert">
  There are no books!
</div>
@else
</br>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Author</th>
        <th>Title</th>
        <th>Pages</th>
        <th>Plot</th>
        <th>Image</th>
        <th>Delete</th>


      </tr>
    </thead>
    <tbody>
@foreach ($books as $book)
<tr>
        <td>{{ $book->author }}</td>
        <td><a href="{{route('books.show',['book'=>$book->id])}}">{{ $book->name }}</a></td>
        <td>{{ $book->pages }}</td>
        <td>{{ $book->plot }}</td>
        <td><img src="{{ asset($book->image) }}" width="100px" height="100px"></td>
        <td><form action={{route('books.destroy',['book'=>$book->id])}} method='POST'>
        	<input type="hidden" name="_method" value="delete" />
    {!! csrf_field() !!}
		<input hidden type='text'  name='id' value={$m['id']} />
		<button type='submit' class='btn btn-danger'>Delete</button>
		</form></td>
</tr>
    @endforeach
</tbody>
</table>

{{ $books->links() }}
@endif
  
@endsection