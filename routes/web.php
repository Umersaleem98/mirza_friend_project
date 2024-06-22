<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


Route::get('/', [HomeController::class, 'index']);
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
