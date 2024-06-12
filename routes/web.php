<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/movies', MovieController::class);
Route::get('/products', [ProductController::class, 'index']);





Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/movies', MovieController::class);
Route::resource('/genres', MovieController::class);
Route::resource('/reviews', MovieController::class);




require __DIR__.'/auth.php';
