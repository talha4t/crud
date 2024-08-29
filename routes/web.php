<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/cruds'));

Route::get('/cruds', [PostController::class, 'index']);

Route::get('/cruds/create', [PostController::class, 'create']);
Route::post('/cruds', [PostController::class, 'store']);

Route::get('/cruds/{crud}/edit', [PostController::class, 'edit']);
Route::patch('/cruds/{crud}', [PostController::class, 'update']);

Route::delete('/cruds/{crud}', [PostController::class, 'destroy']);




