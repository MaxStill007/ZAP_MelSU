<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;

Route::get('/', [MainController::class, 'index']);
Route::get('/about',[MainController::class, 'about']);
Route::get('/product',[MainController::class, 'product']);
Route::get('/review',[MainController::class, 'review']);

Route::post('/post', [PostController::class, 'store']);
//Route::post('posts', 'PostController@store');