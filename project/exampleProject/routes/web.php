<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;

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

// CRUD operations for shoppingcart
Route::resource('shoppingCart', 'ShoppingCartController')->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

// Category pages
Route::group(['prefix' => 'category', 'as' => 'category.'], function() {
    Route::get('/all', [CategoryController::class, 'categories'])->name('all');
    Route::get('/{id}', [CategoryController::class, 'category'])->name("byId");
});

// Product
Route::group(['prefix' => 'product', 'as' => 'product.'], function() {
    Route::get('/all', [ProductController::class, 'products'])->name('all');
    Route::get('/{id}', [ProductController::class, 'product'])->name("byId");
});