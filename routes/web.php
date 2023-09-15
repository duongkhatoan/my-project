<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController as ControllersProductController;
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

Route::get('/', [FrontPageController::class, 'index'])->name('index');
Route::get('/gio-hang', [FrontPageController::class, 'cart'])->name('giohang');

Route::prefix('product')->name('product.')->group(function () {
    Route::get('/{product}', [ProductController::class, 'show'])->name('show');
    // Route::get('/create', [PostController::class, 'create'])->name('create');
    // Route::post('/', [PostController::class, 'store'])->name('store');
    // Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
    // Route::post('/{post}', [PostController::class, 'update'])->name('update');
    // Route::get('/delete/{post}', [PostController::class, 'destroy'])->name('delete');
});


Route::prefix('category')->name('category.')->group(function () {
    Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
});




// handle add to cart

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');


// handle select att products
Route::post('/process-selected-attributes', [ControllersProductController::class, 'handleSelectAtt']);



// Login to admin panel
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');


Route::post('register', [UserController::class, 'register'])->name('user.register');
Route::post('login', [UserController::class, 'login'])->name('user.login');
Route::get('logout', [UserController::class, 'logout'])->name('user.logout');


// User
Route::prefix('users')->name('users.')->group(function () {
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::post('update/{user}', [UserController::class, 'update'])->name('update');
    // Route::get('/create', [PostController::class, 'create'])->name('create');
    // Route::post('/', [PostController::class, 'store'])->name('store');
    // Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
    // Route::post('/{post}', [PostController::class, 'update'])->name('update');
    // Route::get('/delete/{post}', [PostController::class, 'destroy'])->name('delete');
});
