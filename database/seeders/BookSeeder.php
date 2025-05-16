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
            ]);
        
        Book::create(    
            [
                'id' => 2,
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah inspiratif tentang anak-anak miskin yang penuh semangat belajar di Belitong.',
                'price' => 95000,
                'stock' => 8,
            ]);

        Book::create(    
            [
                'id' => 3,
                'title' => 'Supernova',
                'description' => 'Novel futuristik yang menggabungkan sains, filsafat, dan cinta.',
                'price' => 99000,
                'stock' => 12,
            ]);

        Book::create(
            [
                'id' => 4,
                'title' => 'Bumi Manusia',
                'description' => 'Sebuah karya sastra klasik tentang cinta dan perjuangan di masa kolonial.',
                'price' => 105000,
                'stock' => 5,
            ]);

        Book::create(
            [
                'id' => 5,
                'title' => 'Ayat-Ayat Cinta',
                'description' => 'Kisah cinta bernuansa Islam yang berlatar Mesir dengan konflik batin mendalam.',
                'price' => 78000,
                'stock' => 15,
            ]);
    
    }
}
