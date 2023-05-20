<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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

//Route des produits-----------------------------------------------------------------------

// Modifier un produit
Route::get('/editproduct/{id}', [App\Http\Controllers\ProductController::class, 'editproduct'])->name('editproduct');

// Supprimer un produit
Route::get('/deleteproduct/{id}', [App\Http\Controllers\ProductController::class, 'deleteproduct'])->name('deleteproduct');

// Ajouter un produit
Route::post('/addproductpost', [App\Http\Controllers\ProductController::class, 'addProductPost'])->name('add-productPost');


//Route des Catégories----------------------------------------------------------------------

// Supprimer une Catégorie
Route::get('/deletecategory/{id}', [App\Http\Controllers\ProductController::class, 'deletecategory'])->name('deletecategory');
Route::post('/editproductpost/{code}', [App\Http\Controllers\ProductController::class, 'editproductpost'])->name('editproductpost');


//Modifier Categorie
Route::get('/editcategory/{id}', [App\Http\Controllers\ClientsuggestionController::class, 'editcategory'])->name('editcategory');
Route::post('/editcategorypost/{id}', [App\Http\Controllers\ClientsuggestionController::class, 'editcategorypost'])->name('editcategorypost');


// ajouter une promotion
Route::get('/ajouterpromo', [App\Http\Controllers\PromoController::class, 'ajouterpromo'])->name('ajouterpromo');
Route::post('/addpromo', [App\Http\Controllers\PromoController::class, 'addpromo'])->name('addpromo');


// Aplliquer des Promotions
Route::post('/applypromo', [App\Http\Controllers\PromoController::class, 'applypromo'])->name('applypromo');

// Supprimer des Promotions
Route::get('/deletepromo/{id}', [App\Http\Controllers\PromoController::class, 'deletepromo'])->name('deletepromo');


// Deconnexion
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');

// catalogue
Route::get('/catalogue/{category}', [App\Http\Controllers\CatalogueController::class, 'catalogues'])->name('catalogue');

// Recherche
Route::post('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');


// Modifier Promotions
Route::get('/editpromo/{id}', [App\Http\Controllers\ClientsuggestionController::class, 'editpromo'])->name('editpromo');
Route::post('/editpromopost/{id}', [App\Http\Controllers\ClientsuggestionController::class, 'editpromopost'])->name('editpromopost');

