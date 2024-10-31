<?php

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Api\LatestBookController;
use App\Http\Controllers\Api\SearchController;


Route::get('/', [LatestBookController::class, 'latest'])->name('home');
Route::get('/home', [LatestBookController::class, 'latest'])->name('home');
Route::get('about-us', function () {
    return view('about/about-us');
})->name('about');
Route::get('/search', function () {
    return view('/common/search');
})->name('searchView');
Route::get('/book/{book_id}', [BookController::class, 'show'])->name('book.show');
Route::post('/book/{book_id}/submit', [BookController::class, 'submit'])->name('review.submit');
Route::post('/search', [SearchController::class, 'search'])->name('search');

Route::get('/register', function () {
    return view('/auth/register');
})->name('register');

Route::get('/login', function () {
    return view('/auth/login');
})->name('login');
