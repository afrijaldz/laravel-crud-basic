@extends('welcome')
@section('content')
  <a href="{{ route('book.index') }}">Kembali</a>
  <hr>

  <h2>Book title</h2>
  <p>{{ $book->title }}</p>
  
  <h2>Book author</h2>
  <p>{{ $book->author }}</p>
  
  <h2>Book year</h2>
  <p>{{ $book->year }}</p>

@endsection