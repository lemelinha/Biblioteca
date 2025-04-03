<?php

namespace App\Http\Controllers\Dashboard\Books;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\BookCreationRequest;
use App\Models\Author;
use App\Models\Gender;
use App\Models\Book;

class BookCreationController extends Controller
{
    public function create()
    {
        $authors = Author::orderBy('name')->get();
        $genders = Gender::orderBy('name')->get();

        return view('dashboard.books.create', compact('authors', 'genders'));
    }

    public function store(BookCreationRequest $request)
    {
        Book::create($request->all());
        return redirect()->route('dashboard.books')->with('message', 'Livro cadastrado com sucesso.');
    }
}
