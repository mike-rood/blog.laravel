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
        Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');        
        Route::patch('/{category}', UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', DeleteController::class)->name('admin.category.delete');
        Route::get('/{category}', ShowController::class)->name('admin.category.show');
        Route::post('/', StoreController::class)->name('admin.category.store');
        Route::get('/', IndexController::class)->name('admin.category.index');   
    });    
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Blog\Tag'], function () {
    Route::prefix('admin/tag')->group(function () {
        Route::get('/create', CreateController::class)->name('admin.tag.create');
        Route::get('/{tag}/edit', EditController::class)->name('admin.tag.edit');        
        Route::patch('/{tag}', UpdateController::class)->name('admin.tag.update');
        Route::delete('/{tag}', DeleteController::class)->name('admin.tag.delete');
        Route::get('/{tag}', ShowController::class)->name('admin.tag.show');
        Route::post('/', StoreController::class)->name('admin.tag.store');
        Route::get('/', IndexController::class)->name('admin.tag.index');   
    });    
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Blog'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', IndexController::class)->name('admin.index');    
    });    
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
