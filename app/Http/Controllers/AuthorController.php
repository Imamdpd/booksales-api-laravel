<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        // Mengambil data author dari model Author
        $authors = Author::all();

        if ($authors->IsEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!",
            ],200);
        }

        // Mengirim data author ke view
        return response()->json([
            "succes" => true,
            "message" => "Get All Resource",
            "data" => $authors
        ], 200);
    }

    public function store(Request $request) {
        // 1. validator
        $validator = Validator::make(request()->all(), [
         'name' => 'required|string',
         'bio' => 'required|string'
     ]);
     // 2. check validator error
     if ($validator->fails()) {
         return response()->json([
             "success" => false,
             "message" => $validator->errors()
         ], 422);
     }
     // 3. insert data
     $author = Author::create([
         "name" => $request->name,
         "bio" => $request->bio
     ]);
     // 4. response 
     return response()->json([
         "success" => true,
         "message" => "Resource create successfully!",
         "data" => $author
     ],201);
     }
}