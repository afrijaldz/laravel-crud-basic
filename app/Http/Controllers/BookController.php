<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);

        return view('book.show', compact('book'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $book = [
            "title" => $request->title,
            "author" => $request->author,
            "year" => $request->year
        ];

        Book::create($book);

        return redirect()->route('book.index');
    }

    public function edit($id)
    {
        $book = Book::find($id);

        return view('book.edit', compact('book'));
    }

    public function update($id, Request $request)
    {
        $book = Book::find($id);

        $newBook = [
            "title" => $request->title,
            "author" => $request->author,
            "year" => $request->year
        ];

        $book->update($newBook);

        return redirect()->route('book.index');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('book.index');
    }
}
