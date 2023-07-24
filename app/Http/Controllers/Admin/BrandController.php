<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandAdminRequest;
use App\Http\Requests\UpdateBrandAdminRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return view('admin.brand.index', compact('brands'));
    }
    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(StoreBrandAdminRequest $request)
    {
        $validatedData = $request->validated();
        $brand = Brand::create($validatedData);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;
            $brand->image = $save_url;
            $brand->save();
        }
        return redirect()->route('admin.brand.index')->with('success', 'Brand đã được tạo thành công');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(UpdateBrandAdminRequest $request, Brand $brand)
    {
        // Kiểm tra nếu slug đã được thay đổi
        if ($request->has('slug') && $request->slug !== $brand->slug) {
            // Kiểm tra xem slug mới có duy nhất hay không
            $slugExists = Brand::where('slug', $request->slug)->exists();

            if ($slugExists) {
                return back()->withErrors(['slug' => 'The slug has already been taken.'])->withInput();
            }
        }
        $validatedData = $request->validated();
        // Cập nhật dữ liệu của danh mục
        $brand->update($validatedData);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;

            // Xóa hình ảnh cũ (nếu có)
            if ($brand->image) {
                unlink($brand->image);
            }

            $brand->image = $save_url;
            $brand->save();
        }
        // Xử lý cập nhật dữ liệu từ $request vào cơ sở dữ liệu

        return redirect()->back()->with('success', 'Danh mục đã được cập nhật thành công');
    }
    public function delete(Brand $brand)
    {
        if ($brand->image) {
            unlink($brand->image);
        }
        $brand->delete();
        return redirect()->route('admin.brand.index')->with('success', 'Brand đã được xóa thành công');
    }
}
