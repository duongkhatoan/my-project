<?php

use App\Enums\UserRoleEnum;
use Illuminate\Support\Facades\File;

if (!function_exists('is_admin')) {
    function is_admin()
    {
        if (auth('admin')->user() && auth('admin')->user()->role === UserRoleEnum::Admin){
            return true;
        }
        return false;
    }
}
if (!function_exists('load_file_location')) {
    function load_file_location()
    {
        $jsonFilePath = storage_path('app\vietname_province_district_ward.json');
        if (File::exists($jsonFilePath)) {
            $jsonData = file_get_contents($jsonFilePath);
            $data = json_decode($jsonData);
            return $data;
        } else {
            return response()->json(['message' => 'Không tìm thấy tệp JSON'], 404);
        }
    }
}
