<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index', [
    'posts' => Post::with(['comments', 'comments.user', 'user'])->orderBy('created_at', 'desc')->get(),
  ]);
})->name('index');

//Route::post('/images', function (\Illuminate\Http\Request $request) {
//  dd(time() . "-{$request->file('image')->getClientOriginalExtension()}.{$request->file('image')->guessClientExtension()}");
//});

Route::view('/profile', 'profile.profile')->name('profile.page');
Route::get('/profile-image/get', [UserController::class, 'getProfileImage'])->name('user.profile-image.get');
Route::post('/profile-image/upload', [UserController::class, 'uploadProfileImage'])->name('user.profile-image.upload');

Route::prefix('/posts')->group(function () {
  Route::post('/create', [PostController::class, 'createPost'])->name('post.create');
});
