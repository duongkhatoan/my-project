<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category, Request $request)
    {
        $products = $category->products()->paginate(10);
        $brands = Brand::whereIn('id', $products->pluck('brand_id')->unique()->toArray())->get();
        if ($request->brands) {
            $brandsFilter = explode("%", $request->brands);
            $products = Product::whereHas('categories', function ($query) use ($category) {
                $query->where('category_id', $category->id);
            })
            ->when($brandsFilter, function ($query) use ($brandsFilter) {
                return $query->whereIn('brand_id', $brandsFilter);
            })
            ->get();
            dd($products);
        }

        return view('front.category.index', compact('products', 'category', 'brands'));
    }
}
