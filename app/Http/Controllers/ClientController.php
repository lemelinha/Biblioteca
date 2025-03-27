<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ClientController extends Controller
{
    public function home()
    {
        $books = Book::all();
        return view('home.landing', compact('books'));
    }
}
