<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\CartController;

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
    return view('landing_page');
})->name('landing_page');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/choice', function () {
    return view('products');
})->name('choice');

// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');


// Route::get('/categories', function () {
//     return view('categories');
// })->name('categories');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::post('/save-product',[ProductController::class, 'store'])->name('products.store');
    Route::get('/create-product',[ProductController::class, 'create'])->name('products.create');
    Route::get('/dashboard',[ProductController::class, 'index'])->name('dashboard');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('deleteproducts');
    Route::get('/products/{product}/edit', 'ProductController@edit')->name('dashboard.products.edit');
    Route::put('/products/{product}', 'ProductController@update')->name('dashboard.products.update');



    
Route::post('/save-category',[CategoryController::class, 'storeCategory']);
Route::get('/create-category',[CategoryController::class, 'create'])->name('categories.create');
Route::get('/all-categories',[CategoryController::class, 'getcategories'])->name('getcategories');
Route::get('/show-categories',[CategoryController::class, 'show'])->name('showcategories');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('deletecategory');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('dashboard.categories.edit');
Route::put('/categories/{category}', 'CategoryController@update')->name('dashboard.categories.update');

   
 

});
Route::get('/category/{id}/products', [ProductController::class, 'showByCategory'])->name('showByCategory');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/show-products/{product}',[ProductController::class, 'show'])->name('showproducts');
Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/bag', [CartController::class, 'show'])->name('bag');




 


