<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LocationController extends Controller
{
    public function location($type = null, $id = null)
    {
        $data = load_file_location();
        switch ($type) {
            case 'province':
                if($id){
                    $data = $data->district;
                    if($data){
                        $data = array_filter($data, function ($item) use ($id) {
                            return $item->idProvince === $id; // Điều kiện lọc theo tên tỉnh
                        });
                    }
                }
                else{
                    $data = '';
                }
                break;
            case 'district':
                if($id){
                    $data = $data->commune;
                    if($data){
                        $data = array_filter($data, function ($item) use ($id) {
                            return $item->idDistrict === $id; // Điều kiện lọc theo tên tỉnh
                        });
                    }
                }
                break;
            case 'ward':
                $data = 'completed';
                break;
            default:
                $data = '';
        }
        return response()->json($data);
    }
}
