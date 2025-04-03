<?php

namespace App\Http\Controllers\dashboard\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); 

        return view('dashboard.books.index', compact('books'));
    }

    public function create()
    {
        return view('dashboard.books.create');
    }

    public function store(Request $request)
    {
        // Handle the request to store a new book
        // Validate and save the book data
        // Redirect or return a response
    }

    public function show($id)
    {
        return view('dashboard.books.show', ['id' => $id]);
    }

    public function edit($id)
    {
        return view('dashboard.books.edit', ['id' => $id]);
    }
}
