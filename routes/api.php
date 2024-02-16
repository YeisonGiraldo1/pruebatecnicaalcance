<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LogController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/list/users', [UserController::class, 'listusers']);

Route::get('/list/post', [PostController::class, 'listpost']);

Route::get('/users/{user_id}/albums', [AlbumController::class, 'consultalbumsuser']);


//LOGS
Route::get('/list/logs', [LogController::class, 'requestlist']);