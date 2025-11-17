<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    // Route baru untuk artikel milik user yang sedang login
    Route::get('/dashboard', [ArticleController::class, 'myArticles'])->name('dashboard');

    // Route Resource (Pastikan method myArticles() ditaruh sebelum route resource untuk menghindari konflik)
    Route::resource('articles', ArticleController::class);
});


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('articles', ArticleController::class);
});

require __DIR__.'/auth.php';
