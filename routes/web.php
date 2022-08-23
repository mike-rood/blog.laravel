<?php

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

Route::group(['namespace' => 'App\Http\Controllers\Blog'], function () {
    Route::get('/', IndexController::class);
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Blog\Category'], function () {
    Route::prefix('admin/category')->group(function () {
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::get('/{category}', ShowController::class)->name('admin.category.show');
        Route::post('/', StoreController::class)->name('admin.category.store');
        Route::get('/', IndexController::class)->name('admin.category.index');    
    });    
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Blog'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', IndexController::class)->name('admin.index');    
    });    
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
