<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Bienvenido a la pagina de Posts";
    }

    public function create()
    {
        return "Bienvenido para crear un post";
    }

    public function show($post)
    {
        return "Aqui se mostrar el post de {$post}";
    }
}
