<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeValueController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Postcateogories
Route::prefix('postcategory')->name('postcategory.')->group(function () {
    Route::get('/', [PostCategoryController::class, 'index'])->name('index');
    Route::get('/create', [PostCategoryController::class, 'create'])->name('create');
    Route::post('/', [PostCategoryController::class, 'store'])->name('store');
    Route::get('/edit/{category}', [PostCategoryController::class, 'edit'])->name('edit');
    Route::post('/{category}', [PostCategoryController::class, 'update'])->name('update');
    Route::get('/delete/{category}', [PostCategoryController::class, 'destroy'])->name('delete');
});
// posts
Route::prefix('post')->name('post.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/', [PostController::class, 'store'])->name('store');
    Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
    Route::post('/{post}', [PostController::class, 'update'])->name('update');
    Route::get('/delete/{post}', [PostController::class, 'destroy'])->name('delete');
});



// admin
Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');


// category
Route::prefix('category')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{category}', [CategoryController::class, 'delete'])->name('delete');
});

// BRAND
Route::prefix('brand')->name('brand.')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('index');
    Route::get('/create', [BrandController::class, 'create'])->name('create');
    Route::post('/store', [BrandController::class, 'store'])->name('store');
    Route::get('/edit/{brand}', [BrandController::class, 'edit'])->name('edit');
    Route::post('/update/{brand}', [BrandController::class, 'update'])->name('update');
    Route::get('/delete/{brand}', [BrandController::class, 'delete'])->name('delete');
});

// product
Route::prefix('product')->name('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::post('/update/{product}', [ProductController::class, 'update'])->name('update');
    Route::post('/media/{product}', [ProductController::class, 'media'])->name('media');
    Route::get('/delete/{product}', [ProductController::class, 'delete'])->name('delete');

    Route::post('/updateMediaPosition/{product}', [ProductController::class, 'updateMediaPosition'])->name('updateMediaPosition');
    Route::delete('/media/delete/{media}', [ProductController::class, 'destroyMedia'])->name('media.destroy');
});

// attributes
Route::prefix('attribute')->name('attribute.')->group(function () {
    Route::get('/', [AttributeController::class, 'index'])->name('index');
    Route::get('/create', [AttributeController::class, 'create'])->name('create');
    Route::post('/store', [AttributeController::class, 'store'])->name('store');
    Route::get('/edit/{attribute}', [AttributeController::class, 'edit'])->name('edit');
    Route::post('/update/{attribute}', [AttributeController::class, 'update'])->name('update');
    Route::get('/delete/{attribute}', [AttributeController::class, 'delete'])->name('delete');
});

// attributes values
Route::prefix('attributeValue')->name('attributeValue.')->group(function () {
    Route::get('/', [AttributeValueController::class, 'index'])->name('index');
    Route::get('/create', [AttributeValueController::class, 'create'])->name('create');
    Route::post('/store', [AttributeValueController::class, 'store'])->name('store');
    Route::get('/edit/{attributeValue}', [AttributeValueController::class, 'edit'])->name('edit');
    Route::post('/update/{attributeValue}', [AttributeValueController::class, 'update'])->name('update');
    Route::get('/delete/{attributeValue}', [AttributeValueController::class, 'delete'])->name('delete');
});
