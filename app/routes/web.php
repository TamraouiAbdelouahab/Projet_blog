<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


Route::resource('/dashboard/article',ArticleController::class);
Route::resource('/dashboard/category',CategoryController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'publicIndex'])->name('public.public.index');
Route::get('/article/{id}', [HomeController::class, 'publicShow'])->name('public.public.show');

