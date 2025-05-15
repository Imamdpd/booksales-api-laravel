<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Mengambil data book dari model Book
        $books = (new Book)->getBooks();

        // Mengirim data book ke view
        return view('books.index', compact('books'));
    }
}