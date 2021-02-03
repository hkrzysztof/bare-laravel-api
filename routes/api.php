<?php

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

Route::get('/test-the-api', function () {
    return ['message' => 'hello'];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// creasting a user route
Route::get('/user-create', function (Request $request) {
    User::create([
        'name' => '',
        'email' => '',
        'password' => '',
    ]);
});
