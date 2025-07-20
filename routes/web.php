<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// FrontEnd Controllers
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/another', [HomeController::class, 'another'])->name('another');
Route::get('/post/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'show'])->name('post.show');


// BackEnd Controllers

Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Category Routes
    Route::get('/categories', [App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [App\Http\Controllers\Backend\CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/edit/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'destroy'])->name('categories.destroy');

    // Post Routes
    Route::get('/posts', [App\Http\Controllers\Backend\PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [App\Http\Controllers\Backend\PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [App\Http\Controllers\Backend\PostController::class, 'store'])->name('posts.store');


});

require __DIR__.'/auth.php';
