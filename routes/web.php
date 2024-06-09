<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

// Route::get('/posts', [PostController::class, 'index'])
//     ->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create'])
//     ->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])
//     ->name('posts.store');
// Route::get('/posts/{post}', [PostController::class, 'show'])
//     ->name('posts.show');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
//     ->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class, 'update'])
//     ->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])
//     ->name('posts.delete');

Route::resource('posts', PostController::class);

// Route::apiResource('posts', PostController::class);

// Route::resource('articulos', PostController::class)
//     ->parameters(['articulos' => 'posts'])
//     ->names('posts');

// Route::resource('posts', PostController::class)
//     ->except(['destroy', 'index']);

// Route::resource('posts', PostController::class)
//     ->only(['index', 'create']);