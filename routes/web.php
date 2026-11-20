<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;


Route::get('/', [ProductController::class, 'home']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/products', [AdminProductController::class, 'index'])
        ->name('products.index');

    Route::get('/products/create', [AdminProductController::class, 'create'])
    ->name('products.create');
    
    Route::post('/products', [AdminProductController::class, 'store'])
    ->name('products.store');

    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])
    ->name('products.edit');

    Route::put('/products/{id}', [AdminProductController::class, 'update'])
    ->name('products.update');

    Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])
    ->name('products.destroy');

    Route::get('/categories', [AdminCategoryController::class, 'index'])
    ->name('categories.index');

    Route::get('/categories/create', [AdminCategoryController::class, 'create'])
    ->name('categories.create');

    Route::post('/categories', [AdminCategoryController::class, 'store'])
    ->name('categories.store');

    Route::get('/categories/{id}/edit', [AdminCategoryController::class, 'edit'])
    ->name('categories.edit');

    Route::put('/categories/{id}', [AdminCategoryController::class, 'update'])
    ->name('categories.update');

    Route::delete('/categories/{id}', [AdminCategoryController::class, 'destroy'])
    ->name('categories.destroy');

});