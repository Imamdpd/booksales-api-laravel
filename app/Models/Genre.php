<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => 1, 
            'name' => 'Fiksi'
        ],
        [
            'id' => 2, 
            'name' => 'Drama'
        ],
        [
            'id' => 3, 
            'name' => 'Fiksi Ilmiah'
        ],
        [
            'id' => 4, 
            'name' => 'Sejarah'
        ],
        [
            'id' => 5, 
            'name' => 'Religi'
        ],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
