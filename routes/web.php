<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::middleware("auth")->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name("logout");

    Route::get('create', [AuthController::class, 'showCreateForm'])->name("create");
    Route::post('create_process', [AuthController::class, 'create'])->name("create_process");

    Route::post('/posts/comment/{id}', [PostController::class, 'comment'])->name("comment");
});

Route::middleware("guest")->group(function () {

    Route::get('login', [AuthController::class, 'showLoginForm'])->name("login");
    Route::post('login_process', [AuthController::class, 'login'])->name("login_process");

    Route::get('register', [AuthController::class, 'showRegisterForm'])->name("register");
    Route::post('register_process', [AuthController::class, 'register'])->name("register_process");

    Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name("forgot");
    Route::post('/forgot_process', [AuthController::class, 'forgot'])->name("forgot_process");
});
