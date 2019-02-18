@extends('welcome')
@section('content')
  <form action="{{ route('book.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title</label>
    <br>
    <input type="text" name="title" value="{{ $book->title }}">
    <br>
    
    <label for="author">Author</label>
    <br>
    <input type="text" name="author" value="{{ $book->author }}">
    <br>
    
    <label for="year">Year</label>
    <br>
    <input type="number" name="year" value="{{ $book->year }}">
    <br>

    <button>Simpan</button>
  </form>
@endsection