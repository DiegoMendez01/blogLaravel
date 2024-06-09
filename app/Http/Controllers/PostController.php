<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts/index', compact('posts'));
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect('posts');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts/show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect("posts/{$id}");
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('posts');
    }
}
