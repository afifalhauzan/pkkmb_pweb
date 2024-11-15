<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('welcome');
Route::get('/profile', [UserController::class, 'edit'])->name('profile');
Route::post('/profile', [UserController::class, 'update'])->name('profile.update');
