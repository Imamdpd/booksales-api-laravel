<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'id' => 1,
            'title' => 'Rindu',
        ],
        [
            'id' => 2,
            'title' => 'Laskar Pelangi',
        ],
        [
            'id' => 3,
            'title' => 'Supernova',
        ],
        [
            'id' => 4,
            'title' => 'Bumi Manusia',
        ],
        [
            'id' => 5,
            'title' => 'Ayat-Ayat Cinta',
        ],
    ];

    public function getBooks()
    {
        return $this->books;
    }
}
