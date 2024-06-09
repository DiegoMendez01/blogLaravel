<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/prueba', function(){
    // $post = new Post();
    // $post->title = 'TiTUlo Prueba 3';
    // $post->content = 'Contenido Prueba 3';
    // $post->category = 'Categoria de Prueba 3';

    // $post->save();

    $post = Post::find(3);

    return $post;
});