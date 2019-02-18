@extends('welcome')
@section('content')
  <a href="{{ route('book.create') }}">Tambah data</a>
  <hr>
  <table>
    <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Author</th>
      <th>Year</th>
      <th colspan="2">Action</th>
    </tr>
    @foreach ($books as $book)
        <tr>
          <td>
            {{ $loop->index + 1 }}
          </td>
          <td>
            <a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a>
          </td>
          <td>
            {{ $book->author }}
          </td>
          <td>
            {{ $book->year }}
          </td>
          <td>
            <a href="{{ route('book.edit', $book->id) }}">
              edit
            </a>
          </td>
          <td>
          <form action="{{ route('book.destroy', $book->id) }}" method="POST">
            @csrf
            @method('delete')
            <button>delete</button>
          </form>
          </td>
        </tr>
    @endforeach
  </table>
@endsection