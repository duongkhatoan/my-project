<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostCategoryAdminRequest;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        $categories = PostCategory::all();

        return view('admin.post_category.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.post_category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $postCategory = PostCategory::create([
            'name' => $request->name,
        ]);

        if ($request->hasFile('image')) {
            $media = $postCategory->addMediaFromRequest('image')
                ->toMediaCollection('post_categories');
            $postCategory->image = $media->getUrl();
            $postCategory->save();
        }

        return redirect()->route('admin.postcategory.index')
            ->with('success', 'Post category created successfully.');
    }
    public function edit(PostCategory $category)
    {
        return view('admin.post_category.edit', compact('category'));
    }
    public function update(UpdatePostCategoryAdminRequest $request, PostCategory $category)
    {
        // Kiểm tra nếu slug đã được thay đổi
        if ($request->has('slug') && $request->slug !== $category->slug) {
            // Kiểm tra xem slug mới có duy nhất hay không
            $slugExists = PostCategory::where('slug', $request->slug)->exists();

            if ($slugExists) {
                return back()->withErrors(['slug' => 'The slug has already been taken.'])->withInput();
            }
        }
        $validatedData = $request->validated();
        $category->update($validatedData);
        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ trong collection 'post_categories'
            $category->clearMediaCollection('post_categories');

            // Upload hình ảnh mới và lưu vào collection 'post_categories'
            $media = $category->addMediaFromRequest('image')->toMediaCollection('post_categories');
            $category->image = $media->getUrl();
            $category->save();
        }
        return redirect()->back()->with('success', 'Update successfully');
    }
    public function destroy(PostCategory $category)
    {
        $category->clearMediaCollection('post_categories');
        $category->delete();

        return redirect()->route('admin.postcategory.index')
            ->with('success', 'Post category deleted successfully.');
    }
}
