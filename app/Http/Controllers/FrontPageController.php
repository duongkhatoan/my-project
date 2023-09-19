<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->limit(7)->get();
        $categoryID = 12;
        $productSpecial = Product::whereHas('categories', function ($query) use ($categoryID) {
            $query->where('id', $categoryID);
        })->get();
        return view('home.index', compact('posts', 'productSpecial'));
    }

    public function cart(Request $request){
        return view('front.cart');
    }
}
