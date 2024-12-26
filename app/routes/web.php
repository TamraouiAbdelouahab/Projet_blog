<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Public Routes
Route::get('/public', [App\Http\Controllers\HomeController::class, 'publicIndex'])->name('public.public.index');
Route::get('/public/article/{id}', [App\Http\Controllers\HomeController::class, 'publicShow'])->name('public.public.show');
Route::post('/public/article/{id}/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('public.public.article.comments.store');

// Admin Routes with 'admin' role middleware
Route::group(['middleware' => ['permission:view admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/dashboard/article', ArticleController::class);
    Route::resource('/dashboard/category', CategoryController::class);
    Route::resource('/dashboard/tag', TagController::class);
    Route::resource("/dashboard/user",UserController::class);
});
