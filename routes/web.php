<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::post('/edit', [TodoController::class, 'update']);
Route::get('/delete', [TodoController::class, 'delete']);
Route::post('/delete', [TodoController::class, 'remove']);
