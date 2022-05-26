<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route
Route::group([], function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/about', [MainController::class, 'about'])->name('about');
    Route::get('/guide', [MainController::class, 'guide'])->name('guide');
    Route::get('/contact', [MainController::class, 'contact'])->name('contact');

    Route::post('search', [MainController::class, 'search'])->name('search');
    Route::post('category/{id}', [MainController::class, 'category'])->name('category');
});
