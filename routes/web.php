<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});


Route::get('/tasks', [\App\Http\Controllers\TasksController::class, 'index']);
Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');

Route::resource('tasks', 'App\Http\Controllers\TasksController');

