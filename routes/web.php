<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\SaleController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AdminAuthenticate;

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
