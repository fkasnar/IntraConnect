<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegistryController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/registry', [RegistryController::class, 'index'])->name('registry.index');
// Additional routes can be added below
// Example: Route::get('/about', [HomeController::class, 'about'])->name('about');
=======

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
>>>>>>> 4d19dab (setting up environment)
