<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WorkshopController;

// Route untuk Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Route untuk About
Route::get('/about', [PageController::class, 'about'])->name('about');
// Route untuk Product
Route::get('/product', [PageController::class, 'product'])->name('product');
// Route untuk Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Route untuk mengirim pesan
Route::post('/kirim-pesan', [ContactController::class, 'sendMessage']);

// Route untuk Workshop
Route::get('/workshops/register', [WorkshopController::class, 'index'])->name('workshops.register'); // Menampilkan form
Route::post('/workshops/store', [WorkshopController::class, 'store'])->name('workshops.store'); // Menyimpan data