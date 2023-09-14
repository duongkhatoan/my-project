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

Route::get('/json-data-vietnam', function () {
    $jsonFilePath = storage_path('app\vietname_province_district_ward.json');
    if (File::exists($jsonFilePath)) {
        $jsonData = file_get_contents($jsonFilePath);
        $data = json_decode($jsonData);
        // dd($data->province);
        // Kiểm tra xem dữ liệu có tồn tại và có cấu trúc phù hợp không
        if (isset($data->province)) {
            $provinces = $data->province;

            // Lọc thông tin về tỉnh
            $filteredProvinces = array_filter($provinces, function ($province) {
                return isset($province->name); // Điều kiện lọc theo tên tỉnh
            });

            // Đây là danh sách các tỉnh đã được lọc
            return response()->json($filteredProvinces);
        } else {
            return response()->json(['message' => 'Không tìm thấy thông tin về tỉnh'], 404);
        }
    } else {
        return response()->json(['message' => 'Không tìm thấy tệp JSON'], 404);
    }
});
Route::get('/json-data-vietnam/province',[LocationController::class,'province'])->name('province');
Route::get('/json-data-vietnam/district/{province_id}',[LocationController::class,'district'])->name('district');
Route::get('/json-data-vietnam/ward/{district_id}',[LocationController::class,'ward'])->name('ward');
