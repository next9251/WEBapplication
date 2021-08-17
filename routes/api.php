<?php
use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\SharesController;
use APP\Http\Controllers\RegisterController;
use APP\Http\Controllers\LoginController;
use APP\Http\Controllers\LogoutController;
use APP\Http\Controllers\UsersController;
use APP\Http\Controllers\LikesController;
use APP\Http\Controllers\CommentsController;

Route::apiResource('/shares', SharesController::class);
Route::post('/register', [RegisterController::class, 'post']);
Route::post('/login', [LoginController::class, 'post']);
Route::post('/logout', [LogoutController::class, 'post']);
Route::get('/user', [UsersController::class, 'get']);
Route::put('/user', [UsersController::class, 'put']);
Route::post('/like', [LikesController::class, 'post']);
Route::delete('/like', [LikesController::class, 'delete']);
Route::post('/comment', [CommentsController::class, 'post']);
