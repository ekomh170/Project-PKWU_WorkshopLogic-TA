<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\WorkshopController;

// Route untuk Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Route untuk About
Route::get('/about', [PageController::class, 'about'])->name('about');

// Route untuk Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route untuk Workshop
Route::get('/workshops/register', [WorkshopController::class, 'index'])->name('workshops.register'); // Menampilkan form
Route::post('/workshops/register', [WorkshopController::class, 'register'])->name('workshops.store'); // Menyimpan data