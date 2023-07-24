<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostAdminRequest;
use App\Http\Requests\UpdatePostAdminRequest;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostPostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }
    public function create()
    {
        $categories = PostCategory::all();
        return view('admin.posts.create', compact('categories'));
    }
    public function store(StorePostAdminRequest $request)
    {
        $validatedData = $request->validated();
        $post = Post::create($validatedData);

        if ($request->hasFile('image')) {
            $media = $post->addMediaFromRequest('image')->toMediaCollection('post_images');
            $post->image = $media->getUrl();
            $post->save();
        }

        // handle categories

        if ($request->category_id) {
            foreach ($request->category_id as $category) {
                PostPostCategory::create([
                    'post_id' => $post->id,
                    'post_category_id' => $category,
                ]);
            }
        }

        return redirect()->route('admin.post.index')
            ->with('success', 'Post created successfully.');
    }
    public function edit(Post $post)
    {
        $categoryIds = $post->categories()->select('post_categories.id')->pluck('id')->toArray();

        return view('admin.posts.edit', compact('categoryIds', 'post'));
    }
    public function update(UpdatePostAdminRequest $request, Post $post)
    {
        // Kiểm tra nếu slug đã được thay đổi
        if ($request->has('slug') && $request->slug !== $post->slug) {
            // Kiểm tra xem slug mới có duy nhất hay không
            $slugExists = Post::where('slug', $request->slug)->exists();

            if ($slugExists) {
                return back()->withErrors(['slug' => 'The slug has already been taken.'])->withInput();
            }
        }
        $validatedData = $request->validated();
        $post->update($validatedData);
        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ trong collection 'post_categories'
            $post->clearMediaCollection('post_categories');

            // Upload hình ảnh mới và lưu vào collection 'post_categories'
            $media = $post->addMediaFromRequest('image')->toMediaCollection('post_categories');
            $post->image = $media->getUrl();
            $post->save();
        }
        return redirect()->back()->with('success', 'Update successfully');
    }
    public function destroy(Post $post)
    {
        $post->clearMediaCollection('post_images');
        $post->delete();

        return redirect()->route('admin.post.index')
            ->with('success', 'Post category deleted successfully.');
    }
}
