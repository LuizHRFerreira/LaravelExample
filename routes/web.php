<?php

use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',  [TestController::class, 'index'])->name('tests.index');

Route::get('/products',         [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create',  [ProductController::class, 'create'])->name('products.create');
Route::post('/products',        [ProductController::class, 'store'])->name('products.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware([
    AuthMiddleware::class,
])->group(function () {

    Route::group(['prefix' => 'users'], function () {
        Route::get('/',                         [UserController::class, 'index'])->name('users.index');
        Route::get('/profile',                  [UserController::class, 'profile'])->name('users.profile');
        Route::post('{user_id}/update',                  [UserController::class, 'update'])->name('users.update');
    });

    Route::group(['prefix' => 'clients'], function () {
        Route::get('/',                         [ClientController::class, 'index'])->name('clients.index');
    });

});

