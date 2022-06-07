<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'index']);
Route::post('/authenticate', [App\Http\Controllers\Admin\AuthController::class, 'authenticate']);
// Route::post('/login/process', [App\Http\Controllers\Admin\AuthController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout']);

// Route::group(['middleware' => ['auth:sanctum']], function(){

// == DASHBOARD == //
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

//USER
Route::get('/admin/manage-user', [App\Http\Controllers\Admin\UserController::class, 'index']);
Route::post('/admin/manage-user', [App\Http\Controllers\Admin\UserController::class, 'store']);
Route::get('/admin/manage-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
Route::post('/admin/manage-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
Route::get('/admin/manage-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy']);


//CATEGORY
Route::get('/admin/manage-category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
Route::post('/admin/manage-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
Route::get('/admin/manage-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::post('/admin/manage-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
Route::get('/admin/manage-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

//SUBCATEGORY
Route::get('/admin/manage-subcategory', [App\Http\Controllers\Admin\SubcategoryController::class, 'index']);
Route::post('/admin/manage-subcategory', [App\Http\Controllers\Admin\SubcategoryController::class, 'store']);
Route::get('/admin/manage-subcategory/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'edit']);
Route::post('/admin/manage-subcategory/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'update']);
Route::get('/admin/manage-subcategory/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'destroy']);

//ORIGIN
Route::get('/admin/manage-origin', [App\Http\Controllers\Admin\OriginController::class, 'index']);
Route::post('/admin/manage-origin', [App\Http\Controllers\Admin\OriginController::class, 'store']);
Route::get('/admin/manage-origin/{id}', [App\Http\Controllers\Admin\OriginController::class, 'edit']);
Route::post('/admin/manage-origin/{id}', [App\Http\Controllers\Admin\OriginController::class, 'update']);
Route::get('/admin/manage-origin/{id}', [App\Http\Controllers\Admin\OriginController::class, 'destroy']);

//COMPANY
Route::get('/admin/manage-company', [App\Http\Controllers\Admin\CompanyController::class, 'index']);
Route::post('/admin/manage-company', [App\Http\Controllers\Admin\CompanyController::class, 'store']);
Route::get('/admin/manage-company/{id}', [App\Http\Controllers\Admin\CompanyController::class, 'edit']);
Route::post('/admin/manage-company/{id}', [App\Http\Controllers\Admin\CompanyController::class, 'update']);
Route::get('/admin/manage-company/{id}', [App\Http\Controllers\Admin\CompanyController::class, 'destroy']);

//PRODUCT
Route::get('/admin/manage-product', [App\Http\Controllers\Admin\ProductController::class, 'index']);
// Route::post('/admin/manage-category', [App\Http\Controllers\Admin\ProductController::class, 'create']);
Route::post('/admin/manage-product/store', [App\Http\Controllers\Admin\ProductController::class, 'store']);
// Route::get('/admin/manage-product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit']);
Route::post('/admin/manage-product/update/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update']);
Route::get('/admin/manage-product/delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy']);

//ARTICLE
Route::get('/admin/manage-article', [App\Http\Controllers\Admin\ArticleController::class, 'index']);
Route::post('/admin/manage-article', [App\Http\Controllers\Admin\ArticleController::class, 'store']);
Route::get('/admin/manage-article/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'edit']);
Route::post('/admin/manage-article/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'update']);
Route::get('/admin/manage-article/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'destroy']);

//COBA CRUD
Route::get('/admin/coba-edit/{id}', [App\Http\Controllers\Admin\CobaController::class, 'edit']);
Route::POST('/admin/update/{id}', [App\Http\Controllers\Admin\CobaController::class, 'update']);
Route::post('/admin/coba-update/{id}', [App\Http\Controllers\Admin\CobaController::class, 'update']);



// });

/*
|--------------------------------------------------------------------------
| VIEWER SECTION
|--------------------------------------------------------------------------
|
*/

//HOMEPAGE
Route::get('/home', [App\Http\Controllers\Viewer\HomeController::class, 'index']);

//ARTICLE PAGE
Route::get('/article', [App\Http\Controllers\Viewer\ArticleController::class, 'index']);

//SEARCH & FILTER PRODUCT
Route::get('/search/product', [App\Http\Controllers\Viewer\SearchProductController::class, 'index']);

//SEARCH & FILTER COMPANY
Route::get('/search/msme', [App\Http\Controllers\Viewer\SearchUMKMController::class, 'index']);

//PRODUCT CATALOG PAGE
Route::get('/product/{id}', [App\Http\Controllers\Viewer\ProductCatalogController::class, 'show']);

//COMPANY PROFIL PAGE
Route::get('/company/{id}', [App\Http\Controllers\Viewer\CompanyProfilController::class, 'show']);

//APPOINTMENT PAGE
Route::get('/appointment/{id}', [App\Http\Controllers\Viewer\AppointmentController::class, 'index']);
Route::get('/appointment/send/{id}', [App\Http\Controllers\Viewer\AppointmentController::class, 'mail']);

// Route::get('/mail', function () {
//     return view('test-mail');
// })->name('login');

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

//category product
 //Route::get('home/categoryproduct', function () {
   // return view('home/categoryproduct');
//})->name('home/catgoryproduct');

// //category UMKM
// Route::get('home/categoryumkm', function () {
//     return view('home/categoryumkm');
// })->name('home/catgoryumkm');