<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [HomeController::class, 'store_user']);
Route::post('/register', [HomeController::class, 'register_user']);
// Route::get('dashboard', [AdminController::class, 'index']);
Route::get('dashboard', [AdminController::class, 'index'])->middleware(['auth', 'session.expired']);

Route::get('login', [AdminController::class, 'showLoginForm']);
Route::post('login', [AdminController::class, 'login']);
Route::get('logout', [AdminController::class, 'logout']);


Route::get('student_list', [StudentController::class, 'index']);
Route::get('student_create', [StudentController::class, 'create']);
Route::post('students_store', [StudentController::class, 'store']);
Route::get('students_edit/{id}', [StudentController::class, 'edit']);
Route::post('students_update/{id}', [StudentController::class, 'update']);
Route::get('students_destroy/{id}', [StudentController::class, 'destroy']);

Route::get('user_list', [UserController::class, 'index']);
Route::get('user_create', [UserController::class, 'create']);
Route::post('user_store', [UserController::class, 'store']);
Route::get('user_edit/{id}', [UserController::class, 'edit']);
Route::post('user_update/{id}', [UserController::class, 'update']);
Route::get('user_destroy/{id}', [UserController::class, 'destroy']);

// routes/web.php
Route::post('user_approve/{id}', [UserController::class, 'approve']);
Route::post('users_reject/{id}', [UserController::class, 'reject']);
