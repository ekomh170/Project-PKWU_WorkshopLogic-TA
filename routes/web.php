<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WorkshopController;

// Simple test route
Route::get('/test', function () {
    return 'Laravel is working on Vercel!';
});

// Health check route for Vercel
Route::get('/health', function () {
    return response()->json([
        'status' => 'OK',
        'timestamp' => now(),
        'environment' => app()->environment(),
        'laravel_version' => app()->version(),
        'php_version' => phpversion(),
        'database' => config('database.default')
    ]);
});

// Debug route
Route::get('/debug', function () {
    return response()->json([
        'app_name' => config('app.name'),
        'app_env' => config('app.env'),
        'app_debug' => config('app.debug'),
        'app_url' => config('app.url'),
        'database_path' => config('database.connections.sqlite.database'),
        'view_path' => config('view.compiled'),
        'timezone' => config('app.timezone'),
        'locale' => config('app.locale')
    ]);
});

// Route untuk Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Simple fallback for debugging
Route::get('/simple', function () {
    return '<h1>Laravel di Vercel Berhasil!</h1><p>Timestamp: ' . now() . '</p>';
});

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