<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;


// Route untuk Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Route untuk About
Route::get('/about', [PageController::class, 'about'])->name('about');

// Route untuk Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route::get('/', function () {
//     return view('welcome');
// });