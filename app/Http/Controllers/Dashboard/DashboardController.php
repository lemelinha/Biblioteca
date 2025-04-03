<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_books = \App\Models\Book::count();
        $total_authors = \App\Models\Author::count();
        return view('dashboard.index', compact('total_books', 'total_authors'));
    }
}
