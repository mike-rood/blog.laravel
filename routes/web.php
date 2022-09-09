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

Route::group(['namespace' => 'App\Http\Controllers\Admin\Blog\Post'], function () {
    Route::prefix('admin/post')->group(function () {
        Route::get('/create', CreateController::class)->name('admin.post.create');
        Route::get('/{post}/edit', EditController::class)->name('admin.post.edit');        
        Route::patch('/{post}', UpdateController::class)->name('admin.post.update');
        Route::delete('/{post}', DeleteController::class)->name('admin.post.delete');
        Route::get('/{post}', ShowController::class)->name('admin.post.show');
        Route::post('/', StoreController::class)->name('admin.post.store');
        Route::get('/', IndexController::class)->name('admin.post.index');   
    });    
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Blog'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', IndexController::class)->name('admin.index');    
    });    
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Account'], function () {
    Route::prefix('admin/account')->group(function () {
        Route::get('/create', CreateController::class)->name('admin.account.create');
        Route::get('/{account}/edit', EditController::class)->name('admin.account.edit');        
        Route::patch('/{account}', UpdateController::class)->name('admin.account.update');
        Route::delete('/{account}', DeleteController::class)->name('admin.account.delete');
        Route::get('/{account}', ShowController::class)->name('admin.account.show');
        Route::post('/', StoreController::class)->name('admin.account.store');
        Route::get('/', IndexController::class)->name('admin.account.index');   
    });    
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
