<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Additional routes can be added below
// Example: Route::get('/about', [HomeController::class, 'about'])->name('about');