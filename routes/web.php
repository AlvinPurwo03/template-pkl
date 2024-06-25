<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('data', function () {
    return view('data');
});

Auth::routes(
    // ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('brand', BrandController::class);
    Route::resource('product', ProductController::class);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('user', UserController::class);
});
