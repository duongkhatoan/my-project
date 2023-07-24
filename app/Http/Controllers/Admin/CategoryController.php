<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryAdminRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $category = new Category();
        $categoryTree = $category->buildCategoryTree();
        return view('admin.category.create', compact('categoryTree'));
    }

    public function store(StoreCategoryAdminRequest $request)
    {
        $validatedData = $request->validated();
        $category = Category::create($validatedData);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/category/' . $name_gen);
            $save_url = 'upload/category/' . $name_gen;
            $category->image = $save_url;
            $category->save();
        }

        return redirect()->route('admin.category.index')->with('success', 'Danh mục đã được tạo thành công');
    }

    public function edit(Category $category)
    {
        $categorys = new Category();
        $categoryTree = $categorys->buildCategoryTree();
        return view('admin.category.edit', compact('categoryTree', 'category'));
    }

    public function update(StoreCategoryAdminRequest $request, Category $category)
    {

        // Kiểm tra nếu slug đã được thay đổi
        if ($request->has('slug') && $request->slug !== $category->slug) {
            // Kiểm tra xem slug mới có duy nhất hay không
            $slugExists = Category::where('slug', $request->slug)->exists();

            if ($slugExists) {
                return back()->withErrors(['slug' => 'The slug has already been taken.'])->withInput();
            }
        }
        $validatedData = $request->validated();
        // Cập nhật dữ liệu của danh mục
        $category->update($validatedData);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('upload/category/' . $name_gen);
            $save_url = 'upload/category/' . $name_gen;

            // Xóa hình ảnh cũ (nếu có)
            if ($category->image) {
                unlink($category->image);
            }

            $category->image = $save_url;
            $category->save();
        }
        // Xử lý cập nhật dữ liệu từ $request vào cơ sở dữ liệu

        return redirect()->back()->with('success', 'Danh mục đã được cập nhật thành công');
    }

    public function delete(Category $category)
    {
        if ($category->image) {
            unlink($category->image);
        }
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Danh mục đã được xóa thành công');
    }
}
