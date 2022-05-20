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

//LOGIN ADMIN
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){


    Route::apiResource('/user', App\Http\Controllers\Api\UserController::class);

    //CATEGORY AND SUBCATEGORY TABLE
    Route::apiResource('/category', App\Http\Controllers\Api\CategoryController::class);
    Route::apiResource('/subcategory', App\Http\Controllers\Api\SubCategoryController::class);

    //PRODUCT TABLE
    Route::apiResource('/product', App\Http\Controllers\Api\ProductController::class);

    //COMPANY TABLE
    Route::apiResource('/company', App\Http\Controllers\Api\CategoryController::class);

    //ARTICLE TABLE
    Route::apiResource('/article', App\Http\Controllers\Api\ArticleController::class);

    //CITY AND PROVINCE TABLE
    Route::apiResource('/city', App\Http\Controllers\Api\CityController::class);
    Route::apiResource('/province', App\Http\Controllers\Api\ProvinceController::class);
    
    //LOGOUT ADMIN
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);

});