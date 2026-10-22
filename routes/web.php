<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [TaskController::class, 'welcome'])->name('welcome');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::view('/about', 'about')->name('about');