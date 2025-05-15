<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Data Author
    private $authors = [
        [
            'id' => 1, 
            'name' => 'Tere Liye'
        ],
        [
            'id' => 2, 
            'name' => 'Andrea Hirata'
        ],
        [
            'id' => 3, 
            'name' => 'Dewi Lestari'
        ],
        [
            'id' => 4, 
            'name' => 'Pramoedya Ananta Toer'
        ],
        [
            'id' => 5, 
            'name' => 'Habiburrahman El Shirazy'
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}