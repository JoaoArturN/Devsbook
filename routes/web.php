<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'renderPosts'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {  // / se estiver logado {sitema do breeze auth}

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/createpost', [PostController::class, 'createpost'])->name('createpost');

    Route::get('/user/profile/{id}', [UserController::class, 'renderperfil'])->name('renderperfil');

    Route::get('/follow/{id}', [UserController::class, 'followuser'])->name('followuser');
    Route::get('/unfollow/{id}', [UserController::class, 'unfollowuser'])->name('unfollowuser');

    Route::get('/user/friends/{id}', [UserController::class, 'renderfriends'])->name('renderfriends');

    Route::get('/user/photos/{id}', [UserController::class, 'renderphotos'])->name('renderphotos');
    Route::get('/user/config', [UserController::class, 'renderconfig'])->name('renderconfig');

    Route::post('/user/edit', [UserController::class, 'edituser'])->name('edituser');
});

require __DIR__.'/auth.php';
