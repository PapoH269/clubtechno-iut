<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/events', [PageController::class, 'events'])->name('events'); // Vue publique
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Auth routes Breeze (login, register, etc.)
require __DIR__ . '/auth.php';

// Authenticated User Routes (CRUD)
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
    Route::resource('projects', ProjectController::class);
    Route::resource('events', EventController::class)->except(['show']);
    Route::post('/update-profile', [PageController::class, 'updateProfile'])->name('dashboard.updateProfile');
});

// Admin Routes (Filament with AdminMiddleware)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('filament.pages.dashboard');
    })->name('admin.dashboard');
});
