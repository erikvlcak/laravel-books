<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\LatestBookController;
use App\Http\Controllers\Api\SearchController;

Route::get('/test/array', [TestController::class, 'arrayResponse'])->name('array.response');

Route::get('/test/model', [TestController::class, 'modelResponse'])->name('model.response');

Route::get('/test/collection', [TestController::class, 'collectionResponse'])->name('collection.response');

Route::get('/books/latest', [LatestBookController::class, 'latest']);

Route::post('/books/search', [SearchController::class, 'search'])->name('api.search');
