<?php

use App\Http\Controllers\Admin\MeetingController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [StudentController::class, 'index']);
Route::get('/signup', [AuthController::class, 'signup']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/student/create', [AdminStudentController::class, 'create']);
Route::get('/meeting/{id}/edit', [MeetingController::class, 'edit']);
