<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => 1,
            'poster' => 'movie-01.jpg',
            'user' => 'Hakim Rajani',
            'rating' => 7.1,
            'date' => '2023-01-15'
        ]);

        Review::create([
            'id' => 2,
            'movie_id' => 2,
            'poster' => 'movie-02.jpg',
            'user' => 'Sky Dwi',
            'rating' => 6.4,
            'date' => '2023-02-20'
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => 3,
            'poster' => 'movie-03.jpg',
            'user' => 'Ocean',
            'rating' => 9.2,
            'date' => '2023-03-25'
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => 4,
            'poster' => 'movie-04.jpg',
            'user' => 'Juillet Nayaka',
            'rating' => 9.8,
            'date' => '2023-04-10'
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => 5,
            'poster' => 'movie-05.jpg',
            'user' => 'Juin Lakeswara',
            'rating' => 8.5,
            'date' => '2023-05-15'
        ]);
    }
}
