<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/movies');  // Redirect root URL ke /movies
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');


// Rute CRUD untuk Movie dengan menggunakan resource controller
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('casts', CastController::class);
Route::resource('genres', GenreController::class);
Route::resource('movies', MovieController::class);
Route::resource('reviews', ReviewController::class);
