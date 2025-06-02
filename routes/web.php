<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projects', [PageController::class, 'projects'])->name('projects'); // Vue publique
Route::get('/events', [PageController::class, 'events'])->name('events');       // Vue publique
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Auth routes Breeze (login, register, etc.)
require __DIR__ . '/auth.php';

// Authenticated User Routes (CRUD)
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
    Route::resource('projects', ProjectController::class);
    Route::resource('events', EventController::class)->except(['show']);
});

// Admin Routes (Filament with AdminMiddleware)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('filament.pages.dashboard');
    })->name('admin.dashboard');
});

// <?php

// use App\Http\Controllers\PageController;
// use App\Http\Controllers\ProjectController;
// use App\Http\Controllers\EventController;
// use Illuminate\Support\Facades\Route;


// Public Routes
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Authentication Routes (handled by Breeze)
Route::middleware('guest')->group(function () {
    Route::get('/login', [PageController::class, 'login'])->name('login');
    Route::get('/register', [PageController::class, 'register'])->name('register');
});

// Authenticated User Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});

// Optional Resource Routes for Projects (if using ProjectController)
Route::middleware('auth')->group(function () {
    Route::resource('projects', ProjectController::class)->except(['show']);
});

// Optional Resource Routes for Events (if using EventController)
Route::middleware('auth')->group(function () {
    Route::resource('events', EventController::class)->except(['show']);
});

// Filament Admin Routes (handled by Filament panel)
// No need for custom 'admin' middleware here; Filament handles it