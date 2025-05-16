<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create ([
            'name' => 'Fiksi', 
            'description' => 'Cerita hasil imajinasi, bukan berdasarkan kejadian nyata.'
        ]);
        Genre::create ([
            'name' => 'Non-Fiksi', 
            'description' => 'Buku berdasarkan fakta, data, atau kejadian nyata.'
        ]);
        Genre::create ([
            'name' => 'Biografi', 
            'description' => 'Kisah hidup seseorang yang ditulis oleh orang lain.'
        ]);
        Genre::create ([
            'name' => 'Fantasi', 
            'description' => 'Genre dengan elemen magis, dunia khayalan, dan makhluk supernatural.'
        ]);
        Genre::create ([
            'name' => 'Sains', 
            'description' => 'Buku yang berisi informasi ilmiah dan pengetahuan berbasis riset.'
        ]);
    }
}
