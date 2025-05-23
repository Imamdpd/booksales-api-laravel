<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        // Mengambil data genre dari model Genre
        $genres = Genre::all();

        if ($genres->IsEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!",
            ],200);
        }

        // Mengirim data genre ke view 'genres.index'
        return response()->json([
            "succes" => true,
            "message" => "Get All Resource",
            "data" => $genres
        ], 200);
    }

    public function store(Request $request) {
       // 1. validator
       $validator = Validator::make(request()->all(), [
        'name' => 'required|string',
        'description' => 'required|string'
    ]);
    // 2. check validator error
    if ($validator->fails()) {
        return response()->json([
            "success" => false,
            "message" => $validator->errors()
        ], 422);
    }
    // 3. insert data
    $genre = Genre::create([
        "name" => $request->name,
        "description" => $request->description
    ]);
    // 4. response 
    return response()->json([
        "success" => true,
        "message" => "Resource create successfully!",
        "data" => $genre
    ],201);
    }

    public function show(string $id) {
        $genre = Genre::find($id);

        if(!$genre) {
            return response()->json([
                "success" => false,
                "message" => 'Resource not found'
            ],404);
        }    
        return response()->json([
            "success" => true,
            "message" => 'Get detail resource',
            "data" => $genre
        ]);
    }

    public function destroy(string $id) {
        $genre = Genre::find($id);

        if(!$genre) {
            return response()->json([
                "success" => false,
                "message" => 'Resource not found'
            ],404);
        }    
        return response()->json([
            "success" => true,
            "message" => 'Resource delete successfully',
            "data" => null
        ]);

        $genre->delete();

        return response()->json([
            "success" => true,
            "message" => "Resource create successfully!",
            "data" => $genre
        ],201);
    }

    public function update(Request $request) {
        // 1. validator
        $validator = Validator::make(request()->all(), [
         'name' => 'required|string',
         'description' => 'required|string'
     ]);
     // 2. check validator error
     if ($validator->fails()) {
         return response()->json([
             "success" => false,
             "message" => $validator->errors()
         ], 422);
     }
     // 3. insert data
     $genre = update([
         "name" => $request->name,
         "description" => $request->description
     ]);
     // 4. response 
     return response()->json([
         "success" => true,
         "message" => "Resource update successfully!",
         "data" => $genre
     ],200);
     }
 
}