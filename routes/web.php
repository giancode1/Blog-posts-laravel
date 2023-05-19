<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    // simulado consultsa a db
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
    ];

    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    $post = $slug;
    return view('post', ['post' => $post]);
})->name('post');


// request : solicitud o peticion
Route::get('/buscar', function (Request $request) {
    // simulado consultsa a db
    return $request->all();
});

