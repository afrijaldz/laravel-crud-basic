@extends('welcome')
@section('content')
  <form action="{{ route('book.store') }}" method="POST">
    @csrf

    <label for="title">Title</label>
    <br>
    <input type="text" name="title">
    <br>
    
    <label for="author">Author</label>
    <br>
    <input type="text" name="author">
    <br>
    
    <label for="year">Year</label>
    <br>
    <input type="number" name="year">
    <br>

    <button>Simpan</button>
  </form>
@endsection