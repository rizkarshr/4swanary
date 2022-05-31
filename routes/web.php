<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;


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


//AUTHENTIFICATION

Route::get('/', function(){
    return view('login');
});
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route::group(['middleware' => ['auth:sanctum']], function(){

    //USER

    Route::get('/admin/manage-user', [UserController::class, 'index']);
    Route::post('/admin/manage-user', [UserController::class, 'store']);
    // Route::get('/Admin/Manage-user/{id}', [UserController::class, 'show']);
    Route::get('/admin/manage-user/{id}', [UserController::class, 'edit']);
    Route::post('/admin/manage-user/{id}', [UserController::class, 'update']);
    Route::get('/admin/manage-user/{id}', [UserController::class, 'destroy']);

    //CATEGORY

    Route::get('/admin/manage-category', [CategoryController::class, 'index']);
    Route::post('/admin/manage-category', [CategoryController::class, 'store']);
    Route::get('/admin/manage-category/{id}', [CategoryController::class, 'edit']);
    Route::post('/admin/manage-category/{id}', [CategoryController::class, 'update']);
    Route::get('/admin/manage-category/{id}', [CategoryController::class, 'destroy']);

// });

// Route::get('login', function () {
//     return view('login');
// })->name('login');

// Route::get('logins', function () {
//     return view('logins');
// })->name('logins');

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// //admin
// Route::get('user', function () {
//     return view('user');
// })->name('user');

// //article
// Route::get('article', function () {
//     return view('article');
// })->name('article');

// //company
// Route::get('company', function () {
//     return view('company');
// })->name('company');

// //product
// Route::get('product', function () {
//     return view('product');
// })->name('product');

// //category
// Route::get('category', function () {
//     return view('category');
// })->name('category');

// //subcategory
// Route::get('subcategory', function () {
//     return view('subcategory');
// })->name('subcategory');

// //origins
// Route::get('origins', function () {
//     return view('origins');
// })->name('origins');

// //index
// Route::get('index', function () {
//     return view('index');
// })->name('index');

// //company profile
// Route::get('home/companyprofile', function () {
//     return view('home/companyprofile');
// })->name('home/companyprofile');

// //homepage
// Route::get('no/index', function () {
//     return view('no/index');
// })->name('no/index');
// Route::get('no/inner-page', function () {
//     return view('no/inner-page');
// })->name('no/portofolio-details');
// Route::get('no/portofolio-details', function () {
//     return view('no/portofolio-details');
// })->name('no/portofolio-details');

// //category product
// Route::get('home/categoryproduct', function () {
//     return view('home/categoryproduct');
// })->name('home/catgoryproduct');

// //category UMKM
// Route::get('home/categoryumkm', function () {
//     return view('home/categoryumkm');
// })->name('home/catgoryumkm');