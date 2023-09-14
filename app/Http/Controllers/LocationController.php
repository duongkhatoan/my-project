<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LocationController extends Controller
{
    public function province(){
        $data = load_file_location();
        $provinces = $data->province;
        return response()->json($provinces);
    }
    public function district($pronvice_id){
        $data = load_file_location();
        $districts = $data->district;
        if($districts){
            $filterData = array_filter($districts, function ($district) use ($pronvice_id) {
                return $district->idProvince === $pronvice_id; // Điều kiện lọc theo tên tỉnh
            });
            return response()->json($filterData);
        }
    }
    public function ward($district_id){
        $data = load_file_location();
        $wards = $data->commune;
        if($wards){
            $filterData = array_filter($wards, function ($ward) use ($district_id) {
                return $ward->idDistrict === $district_id; // Điều kiện lọc theo tên tỉnh
            });
            return response()->json($filterData);
        }
    }
}
