<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the Page";
});

Route::get('/posts', function(){
    return "Welcome to the Posts";
});

Route::get('/posts/create', function(){
    return "Welcome to the Create Post";
});

Route::get('/posts/{post}', function($post){
    return "Welcome to the Post {$post}";
});