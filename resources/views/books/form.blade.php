@extends('layouts.index')

@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>
<form method="get" action="{{ route('update', ['id'=>$book->id]) }}">
<div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $book->title }}">
    </div>
</div>
<div class="form-group row">
    <label for="author" class="col-sm-2 col-form-label">Author</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="author" placeholder="Author" value="{{ $book->author }}">
    </div>
</div>
<div class="form-group row">
    <label for="category" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="category" placeholder="Category" value="{{ $book->category }}">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 text-right">
    <input type="submit" class="btn btn-secondary" value="Edit">
    </div>
</div>
{{ csrf_field() }}
</form>
@endsection