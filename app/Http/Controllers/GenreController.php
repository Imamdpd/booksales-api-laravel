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
        return view('genres.index', ['genres'=> $genres]);
    }
}