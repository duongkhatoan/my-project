<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products/{productId}', [ProductController::class, 'show']);
Route::post('/get-cart-items', [ProductController::class, 'getCartItems']);

Route::get('/json-data-vietnam/{type?}/{id?}',[LocationController::class,'location'])->name('location');
