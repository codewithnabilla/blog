<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\DashboardPostController;
use App\Http\Middleware\IsAdmin;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});

// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category: $category->name",
//         'posts' => $category->posts->load('category', 'author'),


//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post by Author: $author->name",
//         'posts' => $author->posts->load('category', 'author'),


//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => "Dashboard"
    ]);
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class], 'checkSlug')->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware(IsAdmin::class);
