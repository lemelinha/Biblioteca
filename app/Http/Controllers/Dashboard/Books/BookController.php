<?php

namespace App\Http\Controllers\dashboard\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title')->get(); 

        return view('dashboard.books.index', compact('books'));
    }
}
