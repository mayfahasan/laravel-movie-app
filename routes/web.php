<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/products', function () {
    return view('product');
});

use App\Http\Controllers\ReviewController;

Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/reviews/movie/{movie_id}', [ReviewController::class, 'index']);

use App\Http\Controllers\GenreController;

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/movie/{movie_id}', [GenreController::class, 'index']);