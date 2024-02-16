<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LogController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/list/users', [UserController::class, 'listusers'])->name('users.list');

Route::get('/list/post', [PostController::class, 'listpost'])->name('posts.list');

Route::get('/users/{user_id}/albums', [AlbumController::class, 'consultalbumsuser'])->name('user.album.list');


//LOGS
Route::get('/list/logs', [LogController::class, 'requestlist'])->name('logs.list');

Route::delete('/delete/logs/{id}', [LogController::class, 'destroy'])->name('log.destroy');

Route::get('/edit/log/{id}', [LogController::class, 'edit'])->name('log.edit');

Route::put('/update/log/{id}', [LogController::class, 'update'])->name('log.update');