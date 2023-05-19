<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        // $posts = Post::get();
        // $posts = Post::first();
        // $posts = Post::find(5);


        //$posts = Post::latest()->paginate(); //ordena por fecha: created_at
        $posts = Post::oldest('id')->paginate(); //ordenados por id ascendente

        // dd($posts);

        return view('blog', ['posts' => $posts]);
    }
    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
