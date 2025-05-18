<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Mengambil data book dari model Book
        $books = Book::all();

        // Mengirim data book ke view
        return response()->json([
            "succes" => true,
            "message" => "Get All Resource",
            "data" => $books
        ], 200);
    }
}