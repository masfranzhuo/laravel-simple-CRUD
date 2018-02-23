@extends('layouts.index')

@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Author</th>
      <th>Category</th>
      <th>Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->category }}</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Option">
                    <button type="button" class="btn btn-secondary" onClick="location.href='{{ route('updateform', ['id'=>$book->id]) }}'">
                        Update
                    </button>
                    <button type="button" class="btn btn-secondary" onClick="location.href='{{ route('delete', ['id'=>$book->id]) }}'">
                        Delete
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
    <form method="post" action="{{ route('create') }}">
        <tr>
            <th>#</th>
            <td><input type="text" class="form-control" name="title" placeholder="Title"></td>
            <td><input type="text" class="form-control" name="author" placeholder="Author"></td>
            <td><input type="text" class="form-control" name="category" placeholder="Category"></td>
            <td>
            {{ csrf_field() }}
            <input type="submit" class="btn btn-secondary" value="Add New">
            </td>
        </tr>
    </form>
  </tbody>
</table>
@endsection