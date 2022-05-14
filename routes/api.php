<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){

    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);

});

Route::apiResource('/user', App\Http\Controllers\Api\SubCategoryController::class);
Route::apiResource('/category', App\Http\Controllers\Api\CategoryController::class);
Route::apiResource('/subcategory', App\Http\Controllers\Api\SubCategoryController::class);
Route::apiResource('/product', App\Http\Controllers\Api\ProductController::class);
Route::apiResource('/company', App\Http\Controllers\Api\CategoryController::class);