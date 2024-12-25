<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::resource('/dashboard/article',ArticleController::class);
Route::resource('/dashboard/category',CategoryController::class);
Route::resource('/dashboard/tag',TagController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/public', [App\Http\Controllers\HomeController::class, 'publicIndex'])->name('public.public.index');
Route::get('/public/article/{id}', [App\Http\Controllers\HomeController::class, 'publicShow'])->name('public.public.show');
