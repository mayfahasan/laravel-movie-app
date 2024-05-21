<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'title' => 'Jojo s Bizarre Adventure',
            'user' => 'Nana',
            'rating' => 6.5,
            'date' => '2024-05-20',
        ],

        [
            'id' => 2,
            'title' => 'Noragami',
            'user' => 'Gigi',
            'rating' => 6.4,
            'date' => '2024-05-21',
        ],

        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'user' => 'Muel',
            'rating' => 8.1,
            'date' => '2024-05-22',
        ],

        [
            'id' => 4,
            'title' => 'SPY X Family',
            'user' => 'Juli',
            'rating' => 8.5,
            'date' => '2024-05-23',
        ],

        [
            'id' => 5,
            'title' => 'Spirited Away',
            'user' => 'Ann',
            'rating' => 9.7,
            'date' => '2024-05-24',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }

    public function getReviewsByMovieId($movie_id)
    {
        return array_filter($this->reviews, function ($review) use ($movie_id) {
            return $review['movie_id'] == $movie_id;
        });
    }
}
