<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        // Mengambil data genre dari model Genre
        $genres = Genre::all();

        // Mengirim data genre ke view 'genres.index'
        return response()->json([
            "succes" => true,
            "message" => "Get All Resource",
            "data" => $genres
        ], 200);
    }
}