<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        // Mengambil data author dari model Author
        $authors = Author::all();

        // Mengirim data author ke view
        return response()->json([
            "succes" => true,
            "message" => "Get All Resource",
            "data" => $authors
        ], 200);
    }
}