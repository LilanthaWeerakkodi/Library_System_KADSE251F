<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class LendingController extends Controller
{
    // Show all issued books
    public function index()
    {
        $lendings = Lending::all();
        return view('lendings.index', compact('lendings'));
    }

    // Show form to issue a book
    public function create()
    {
        $books = Book::all();
        $members = Member::all();
        return view('lendings.create', compact('books', 'members'));
    }

    // Save the lending record
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'member_id' => 'required',
            'due_date' => 'required|date'
        ]);

        Lending::create($request->all());

        return redirect()->route('lendings.index')->with('success', 'Book Issued Successfully!');
    }
}
