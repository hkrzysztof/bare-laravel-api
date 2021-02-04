<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::get('/posts', [PostController::class, 'index']);
//Route::get('/posts/{id}', [PostController::class, 'show']);
//Route::post('/posts/{id}', [PostController::class, 'store']);
//Route::put('/posts/{id}', [PostController::class, 'update']);
//Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::apiResource('posts', PostController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
