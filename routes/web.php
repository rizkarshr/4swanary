<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;


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

Route::get('/', function () {
    return view('login');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('logins', function () {
    return view('logins');
})->name('logins');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//admin
Route::get('user', function () {
    return view('user');
})->name('user');

//article
Route::get('article', function () {
    return view('article');
})->name('article');

//company
Route::get('company', function () {
    return view('company');
})->name('company');

//product
Route::get('product', function () {
    return view('product');
})->name('product');

//category
Route::get('category', function () {
    return view('category');
})->name('category');

//subcategory
Route::get('subcategory', function () {
    return view('subcategory');
})->name('subcategory');

//origins
Route::get('origins', function () {
    return view('origins');
})->name('origins');

//index
Route::get('index', function () {
    return view('index');
})->name('index');

//company profile
Route::get('home/companyprofile', function () {
    return view('home/companyprofile');
})->name('home/companyprofile');

//homepage
Route::get('no/index', function () {
    return view('no/index');
})->name('no/index');
Route::get('no/inner-page', function () {
    return view('no/inner-page');
})->name('no/portofolio-details');
Route::get('no/portofolio-details', function () {
    return view('no/portofolio-details');
})->name('no/portofolio-details');

//category product
Route::get('home/categoryproduct', function () {
    return view('home/categoryproduct');
})->name('home/catgoryproduct');

//category UMKM
Route::get('home/categoryumkm', function () {
    return view('home/categoryumkm');
})->name('home/catgoryumkm');

// Route::get('api/mail', function () {
//     return view('mail');
// });



//Route::get('product', 'ProductController@index')->name('product');
//Route::get('product', [ProductController::class, 'products'])->name('product');
//Route::get('/product', 'App\Http\Controllers\Api\ProductController@index');
