<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }
    public function create(Post $post)
    {
        return view('posts.create', compact('post'));
        // return view('posts.create', ['post' => $post]);
    }
    public function store(Request $request)
    {
        $post = $request->user()->posts()->create([
            'title' => $title = $request->title,
            'slug' => Str::slug($title),
            'body' => $request->body,
        ]);
        return redirect()->route('posts.index', $post);
    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    public function update(Post $post)
    {
        dd('update');
        // return view('posts.edit', ['posts' => $post]);
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
