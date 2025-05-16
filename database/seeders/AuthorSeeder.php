<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create (
            [
                'id' => 1,
                'name' => 'Tere Liye',
                'bio' => 'Tere Liye adalah penulis produktif asal Indonesia yang dikenal dengan karya-karya bertema kehidupan, cinta, dan nilai-nilai spiritual.',
            ]);

        Author::create (    
            [
                'id' => 2,
                'name' => 'Andrea Hirata',
                'bio' => 'Andrea Hirata adalah penulis novel Indonesia yang terkenal lewat Laskar Pelangi, yang terinspirasi dari kisah hidupnya sendiri di Belitung.',
            ]);

        Author::create (
            [
                'id' => 3,
                'name' => 'Dewi Lestari',
                'bio' => 'Dewi Lestari, dikenal juga sebagai Dee Lestari, adalah penulis dan musisi Indonesia yang terkenal dengan novel-novel fiksi ilmiah dan spiritual.',
            ]);

        Author::create (
            [
                'id' => 4,
                'name' => 'Pramoedya Ananta Toer',
                'bio' => 'Pramoedya adalah sastrawan besar Indonesia yang dikenal luas melalui karya-karya berlatar sejarah dan perjuangan rakyat Indonesia.',
            ]);

        Author::create (
            [
                'id' => 5,
                'name' => 'Habiburrahman El Shirazy',
                'bio' => 'Habiburrahman adalah penulis novel religi populer di Indonesia yang sering mengangkat tema cinta dan nilai-nilai Islam dalam karyanya.',
            ]);
    }
}
