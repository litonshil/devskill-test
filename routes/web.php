<?php

use App\Http\Controllers\Admin\MeetingController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/display', [PostController::class, 'display']);

Route::get('/post/update/{id}', [PostController::class, 'update']);
Route::get('/post/delete/{id}', [PostController::class, 'update']);
