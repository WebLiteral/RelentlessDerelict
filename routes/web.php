<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\FanartController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::view('/services', 'services');

Route::view('/portfolio', 'portfolio');

Route::view('/contact', 'contact');


Route::view('/gallery', 'gallery');


Route::get('/gallery', [CollectionController::class, 'index'])->name('gallery');
Route::get('/gallery/collection/{slug}', [CollectionController::class, 'show']);
Route::get('/gallery/artwork/{slug}', [ArtworkController::class, 'show']);




// Route::view('/community/fanart', [FanartController::class, 'index']);

// Route::get('/discography', [MusicController::class, 'index']);
// Route::get('/discography/{slug}', [MusicController::class, 'show']);




// Route::get('/articles', [ArticleController::class, 'index']);
// Route::get('/articles/{slug}', [ArticleController::class, 'show']);

// Route::view('/sitemap', 'sitemap');