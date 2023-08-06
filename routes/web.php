<?php


use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;




Route::get('/', function() {
    $posts = [];
    if (auth()->check()) {
        $posts = auth()->user()->userPosts;
    }
    return view('home', ['posts' => $posts]);
});




Route::post('register', [UserController::class, 'register']
);


Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);


Route::post('/create', [PostController::class,  'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showtheEdit']);
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);


Route::delete('/edit-post/{post}', [PostController::class, 'deletePost']);
