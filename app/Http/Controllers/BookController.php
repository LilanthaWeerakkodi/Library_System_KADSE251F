<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show the list of books
    public function index()
    {
        $books = Book::all(); // This gets everything from your 'books' table
        return view('books.index', compact('books'));
    }

    // Show the form to add a book
    public function create()
    {
        return view('books.create');
    }

    // Store the book in database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book Registered Successfully!');
    }
}
