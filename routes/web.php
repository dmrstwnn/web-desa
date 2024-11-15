<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    $articles = Post::all(); 
    return view('index', compact('articles'));
});


// Route::get('/index', [PageController::class, 'index']);
Route::get('/profil', [PageController::class, 'profil']);


Route::get('/dashboard', function () {
    return view('dashboard', ['articles' => Post::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts', [PostController::class, 'posts'])->name('posts');
Route::get('/post/{id}', [PostController::class, 'post'])->name('post');
Route::post('/addpost', [PostController::class, 'addpost'])->name('addpost');

Route::get('/create', function () {
    return view('create',  ['title' => 'Hal contact']);
});

Route::get('/articles/{article}/edit', [PostController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [PostController::class, 'update'])->name('articles.update');

Route::get('delete/{id}', [PostController::class, 'delete'])->name('delete');


require __DIR__.'/auth.php';
