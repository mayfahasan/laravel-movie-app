<?php

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {
        Movie::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'genre_id' => 1,
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ]);

        Movie::create([
            'id' => 2,
            'title' => 'Noragami',
            'genre_id' => 2,
            'poster' => 'movie-02.jpg',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ]);

        Movie::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'genre_id' => 3,
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);

        Movie::create([
            'id' => 4,
            'title' => 'My Neighbor Totoro',
            'genre_id' => 4,
            'poster' => 'movie-04.jpg',
            'synopsis' => 'My Neighbor Totoro is a heartwarming tale of two sisters who discover friendly forest spirits in rural Japan.',
        ]);

        Movie::create([
            'id' => 5,
            'title' => 'The Shining',
            'genre_id' => 5,
            'poster' => 'movie-05.jpg',
            'synopsis' => 'The Shining is a psychological horror film directed by Stanley Kubrick, based on Stephen King\'s novel of the same name.',
        ]);
    }
}
