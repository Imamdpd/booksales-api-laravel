<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(
            [
                'id' => 1,
                'title' => 'Rindu',
                'description' => 'Sebuah kisah spiritual dan romantis dalam perjalanan panjang di atas kapal haji.',
                'price' => 85000,
                'stock' => 10,
                'cover_photo' => 'rindu.jpg',
                'genre_id' => 1,
                'author_id' => 1,


            ]);
        
        Book::create(    
            [
                'id' => 2,
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah inspiratif tentang anak-anak miskin yang penuh semangat belajar di Belitong.',
                'price' => 95000,
                'stock' => 8,
                'cover_photo' => 'laskar pelangi.jpg',
                'genre_id' => 2,
                'author_id' => 2,
            ]);

        Book::create(    
            [
                'id' => 3,
                'title' => 'Supernova',
                'description' => 'Novel futuristik yang menggabungkan sains, filsafat, dan cinta.',
                'price' => 99000,
                'stock' => 12,
                'cover_photo' => 'supernova.jpg',
                'genre_id' => 3,
                'author_id' => 3,
            ]);

        Book::create(
            [
                'id' => 4,
                'title' => 'Bumi Manusia',
                'description' => 'Sebuah karya sastra klasik tentang cinta dan perjuangan di masa kolonial.',
                'price' => 105000,
                'stock' => 5,
                'cover_photo' => 'bumi manusia.jpg',
                'genre_id' => 4,
                'author_id' => 4,
            ]);

        Book::create(
            [
                'id' => 5,
                'title' => 'Ayat-Ayat Cinta',
                'description' => 'Kisah cinta bernuansa Islam yang berlatar Mesir dengan konflik batin mendalam.',
                'price' => 78000,
                'stock' => 15,
                'cover_photo' => 'Ayat-ayat cinta.jpg',
                'genre_id' => 5,
                'author_id' => 5,
            ]);
    
    }
}
