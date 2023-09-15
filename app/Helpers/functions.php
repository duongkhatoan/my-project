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
if (!function_exists('load_all_provinces')) {
    function load_all_provinces()
    {
        $data = load_file_location();
        if($data){
            return $data->province;
        }
        else {
            return response()->json(['message' => 'Không tìm thấy tệp JSON'], 404);
        }
    }
}
if (!function_exists('load_district_base_on_provinces')) {
    function load_district_base_on_provinces($id)
    {
        $data = load_file_location();
        if($data){
            $data = $data->district;
            $data = array_filter($data, function ($item) use ($id) {
                return $item->idProvince === $id; // Điều kiện lọc theo tên tỉnh
            });
            return $data;
        }
        else {
            return response()->json(['message' => 'Không tìm thấy tệp JSON'], 404);
        }
    }
}
if (!function_exists('load_wards_base_on_districts')) {
    function load_wards_base_on_districts($id)
    {
        $data = load_file_location();
        if($data){
            $data = $data->commune;
            $data = array_filter($data, function ($item) use ($id) {
                return $item->idDistrict === $id; // Điều kiện lọc theo tên tỉnh
            });
            return $data;
        }
        else {
            return response()->json(['message' => 'Không tìm thấy tệp JSON'], 404);
        }
    }
}
