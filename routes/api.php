<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('tasks', [TaskController::class, 'index']);
Route::post('task', [TaskController::class, 'create']);
Route::get('task/{id}', [TaskController::class, 'read']);
Route::get('delete/task/{id}', [TaskController::class, 'delete']);
Route::post('task/{id}', [TaskController::class, 'update']);
