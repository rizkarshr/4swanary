<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\OriginController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ArticleController;

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

/*
|--------------------------------------------------------------------------
| ADMIN SECTION
|--------------------------------------------------------------------------
|
*/

//AUTHENTIFICATION

Route::get('/', function () {
    return view('login');
});
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route::group(['middleware' => ['auth:sanctum']], function(){

//USER


// == DASHBOARD == //
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

//SUBCATEGORY

Route::get('/admin/manage-subcategory', [SubcategoryController::class, 'index']);
Route::post('/admin/manage-subcategory', [SubcategoryController::class, 'store']);
Route::get('/admin/manage-subcategory/{id}', [SubcategoryController::class, 'edit']);
Route::post('/admin/manage-subcategory/{id}', [SubcategoryController::class, 'update']);
Route::get('/admin/manage-subcategory/{id}', [SubcategoryController::class, 'destroy']);

//ORIGIN

Route::get('/admin/manage-origin', [OriginController::class, 'index']);
Route::post('/admin/manage-origin', [OriginController::class, 'store']);
Route::get('/admin/manage-origin/{id}', [OriginController::class, 'edit']);
Route::post('/admin/manage-origin/{id}', [OriginController::class, 'update']);
Route::get('/admin/manage-origin/{id}', [OriginController::class, 'destroy']);

//COMPANY



// == HOME == //
//company profile
Route::get('home/companyprofile', function () {
    return view('home.companyprofile');
})->name('companyprofile');

//company profile
Route::get('home/appointment', function () {
    return view('home.appointment');
})->name('appointment');

//home index
Route::get('home/index', function () {
    return view('home.index');
})->name('index');

//home article
Route::get('home/article', function () {
    return view('home.article');
})->name('articles');

//home product catalog
Route::get('home/product-catalog', function () {
    return view('home.product-catalog');
})->name('product-catalog');

Route::get('/admin/manage-company', [CompanyController::class, 'index']);
Route::post('/admin/manage-company', [CompanyController::class, 'store']);
Route::get('/admin/manage-company/{id}', [CompanyController::class, 'edit']);
Route::post('/admin/manage-company/{id}', [CompanyController::class, 'update']);
Route::get('/admin/manage-company/{id}', [CompanyController::class, 'destroy']);

//PRODUCT

Route::get('/admin/manage-product', [ProductController::class, 'index']);
Route::post('/admin/manage-product', [ProductController::class, 'store']);
Route::get('/admin/manage-product/{id}', [ProductController::class, 'edit']);
Route::post('/admin/manage-product/{id}', [ProductController::class, 'update']);
Route::get('/admin/manage-product/{id}', [ProductController::class, 'destroy']);


//ARTICLE

Route::get('/admin/manage-article', [ArticleController::class, 'index']);
Route::post('/admin/manage-article', [ArticleController::class, 'store']);
Route::get('/admin/manage-article/{id}', [ArticleController::class, 'edit']);
Route::post('/admin/manage-article/{id}', [ArticleController::class, 'update']);
Route::get('/admin/manage-article/{id}', [ArticleController::class, 'destroy']);


////////////////////////////
//homepage
/*Route::get('no.index', function () {
    return view('no.index');
})->name('index');
Route::get('no/inner-page', function () {
    return view('no/inner-page');
})->name('no/portofolio-details');
Route::get('no/portofolio-details', function () {
    return view('no/portofolio-details');
})->name('no/portofolio-details');*/


//index
/*Route::get('index', function () {
    return view('index');
})->name('index');*/


// });

/*
|--------------------------------------------------------------------------
| VIEWER SECTION
|--------------------------------------------------------------------------
|
*/


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