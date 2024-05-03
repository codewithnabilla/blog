<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Nabilla Maharani",
        "email" => "codewithnabilla@gmail.com",
        "image" => "photo.jpeg"
    ]);
});
Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category: $category->name",
        'posts' => $category->posts->load('category', 'author'),


    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by Author: $author->name",
        'posts' => $author->posts->load('category', 'author'),


    ]);
});
