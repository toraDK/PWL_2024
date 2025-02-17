<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/user/{name}', [AboutController::class, 'about']);

Route::get('/posts/{post}/comments/{comment}', [PageController::class, 'page']);

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/user/{name?}', [AboutController::class, 'aboutme']);

Route::resource('photos', PhotoController::class);