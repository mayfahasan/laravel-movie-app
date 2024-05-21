<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Jojo s Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],

        [
            'id' => 2,
            'name' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],

        [
            'id' => 3,
            'name' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],

        [
            'id' => 4,
            'name' => 'SPY X Family',
            'poster' => 'movie-04.jpg',
            'genre' => 'Romance',
            'description' => 'Your Name follows two teenagers who mysteriously swap bodies and embark on a quest to find each other.',
        ],

        [
            'id' => 5,
            'name' => 'Spirited Away',
            'poster' => 'movie-05.webp',
            'genre' => 'Fantasy',
            'description' => 'Spirited Away is a tale of a young girl who finds herself trapped in a mysterious and magical world.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
