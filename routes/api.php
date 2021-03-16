<?php

use App\Http\Controllers\CategoriseController;
use App\Http\Controllers\ManagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TestController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('tasks', TasksController::class);
Route::resource('manages', ManagesController::class);
Route::resource('test', TestController::class);
Route::resource('products', ProductsController::class);
Route::resource('categories', CategoriseController::class);
