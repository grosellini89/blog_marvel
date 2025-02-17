<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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


Auth::routes();

Route::get('/', [PostController::class, 'index'])->name('homepage');

Route::get('/create', [PostController::class, 'create'])->name('post.create');

Route::post('/create/store', [PostController::class, 'store'])->name('post.store');

Route::get('/show/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/edit/{post}', [PostController::class, 'edit'])->name('post.edit');

Route::put('/update/{post}', [PostController::class, 'update'])->name('post.update');

Route::delete('/destroy/{post}', [PostController::class, 'destroy'])->name('post.destroy');
