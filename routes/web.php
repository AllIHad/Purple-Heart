<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\heartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/post', [AuthController::class, 'create'])->name('register.create');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [heartController::class, 'index'])->name('dahsboard');
Route::get('/form', [heartController::class, 'form'])->name('form');
Route::post('/form/store', [heartController::class, 'store'])->name('store');

