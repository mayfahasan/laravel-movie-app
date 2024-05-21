<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo s Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],

        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],

        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],

        [
            'id' => 4,
            'title' => 'SPY X Family',
            'poster' => 'movie-04.jpg',
            'genre' => 'Romance',
            'synopsis' => 'Your Name follows two teenagers who mysteriously swap bodies and embark on a quest to find each other.',
        ],

        [
            'id' => 5,
            'title' => 'Spirited Away',
            'poster' => 'movie-05.webp',
            'genre' => 'Fantasy',
            'synopsis' => 'Spirited Away is a tale of a young girl who finds herself trapped in a mysterious and magical world.',
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
