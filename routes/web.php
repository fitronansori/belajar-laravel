<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/post/{slug}', [PostController::class, 'show']);

// Route::get('/blog/post/{slug:slug}', function (Post $post) {
//     return view('pages.post', [
//         'post' => $post,
//     ]);
// });

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});
