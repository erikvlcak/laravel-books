<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;

Route::get('/authors', [AuthorController::class, 'index'])->name('list.authors');

Route::get('/authors/create', [AuthorController::class, 'create'])->name('create.author');

Route::post('/authors/create', [AuthorController::class, 'store'])->name('store.author');

Route::get('/books', [BookController::class, 'index'])->name('list.books');

Route::get('/books/create', [BookController::class, 'create'])->name('create.book');

Route::post('/books/create', [BookController::class, 'store'])->name('store.book');

Route::get('/books/{book_id}', [BookController::class, 'edit'])->name('edit.book');

Route::post('/books/{book_id}', [BookController::class, 'update'])->name('update.book');
