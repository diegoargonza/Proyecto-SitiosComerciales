<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\SaleController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AdminAuthenticate;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return view('compra/buy_form');
});




//Route::get('home', [PostController::class, 'index']);

Route::resource('sale', SaleController::class)->middleware(AdminAuthenticate::class);
Route::resource('cart', CartController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');



Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');