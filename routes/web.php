<?php

use App\Http\Controllers\CategoryController;
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
    return view('landing_page');
})->name('landing_page');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/category', 'CategoryController@index');
// Route::get('/categories', function () {
//     return view('categories');
// })->name('categories');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.products');
    })->name('dashboard');

    Route::get('/create', function () {
        return view('dashboard.create');
    })->name('create');

    Route::group(['as' =>'dashboard'],function(){
    });
});


