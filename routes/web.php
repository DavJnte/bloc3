<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addproduct', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('add-product');
Route::get('/category', [App\Http\Controllers\ProductController::class, 'addCategory'])->name('add-category');
Route::post('/addcategory', [App\Http\Controllers\ProductController::class, 'addCategoryPost'])->name('add-categoryPost');
// editproduct
Route::get('/editproduct/{id}', [App\Http\Controllers\ProductController::class, 'editproduct'])->name('editproduct');
// deleteproduct
Route::get('/deleteproduct/{id}', [App\Http\Controllers\ProductController::class, 'deleteproduct'])->name('deleteproduct');
// post addproductpost
Route::post('/addproductpost', [App\Http\Controllers\ProductController::class, 'addProductPost'])->name('add-productPost');
// deletecategory
Route::get('/deletecategory/{id}', [App\Http\Controllers\ProductController::class, 'deletecategory'])->name('deletecategory');
// editproductpost
Route::post('/editproductpost/{code}', [App\Http\Controllers\ProductController::class, 'editproductpost'])->name('editproductpost');
// ajouterpromo
Route::get('/ajouterpromo', [App\Http\Controllers\PromoController::class, 'ajouterpromo'])->name('ajouterpromo');
// addpromo post
Route::post('/addpromo', [App\Http\Controllers\PromoController::class, 'addpromo'])->name('addpromo');
// applypromo
Route::post('/applypromo', [App\Http\Controllers\PromoController::class, 'applypromo'])->name('applypromo');
// deletepromo
Route::get('/deletepromo/{id}', [App\Http\Controllers\PromoController::class, 'deletepromo'])->name('deletepromo');
// logout 
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');

// catalogue
Route::get('/catalogue/{category}', [App\Http\Controllers\CatalogueController::class, 'catalogues'])->name('catalogue');

// search
Route::post('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');


// editpromo using clientsuggescontroller
Route::get('/editpromo/{id}', [App\Http\Controllers\ClientsuggestionController::class, 'editpromo'])->name('editpromo');
// editpromopost
Route::post('/editpromopost/{id}', [App\Http\Controllers\ClientsuggestionController::class, 'editpromopost'])->name('editpromopost');
// editcategory
Route::get('/editcategory/{id}', [App\Http\Controllers\ClientsuggestionController::class, 'editcategory'])->name('editcategory');
// editcategorypost
Route::post('/editcategorypost/{id}', [App\Http\Controllers\ClientsuggestionController::class, 'editcategorypost'])->name('editcategorypost');



