<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
{
    $reviews = Review::all();

    return view('reviews.show', compact('reviews'));
}
    public function create()
{
    $movies = Movie::all();
    return view('review.create', compact('movies'));
}
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'movie_id' => 'required',
        'poster' => 'required',
        'poster' => 'required',
        'user' => 'required',
        'rating' => 'required',
        'date' => 'required',
    ]);

    Review::create($validatedData);

    return redirect('/reviews')->with('success', 'Review added successfully!');
}
public function destroy(Review $review)
{
    $review->delete();
    return redirect('/reviews')->with('success', 'Review deleted successfully!');
}
}
