<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($productId)
    {
        $product = Product::getBasicInfo($productId);
        if (!$product) {
            return response()->json(['error' => 'Sản phẩm không tồn tại'], 404);
        }

        return response()->json($product);
    }
    public function getCartItems(Request $request)
    {
        $cartItems = $request->input('cartItems');
        $productIds = array_column($cartItems, 'product_id');
        $products = Product::whereIn('id', $productIds)
            ->select('id', 'name', 'discount_price', 'sell_price','image')
            ->get();
        // Kết hợp thông tin sản phẩm và số lượng từ local storage để tạo mảng dữ liệu gửi về trang web
        foreach ($products as $product) {
            $item = collect($cartItems)->firstWhere('product_id', $product->id);
            $product->quantity = $item['quantity'];
            $product->price = $product->discount_price > 0 ? $product->discount_price : $product->sell_price;
        }

        return response()->json($products);
    }
}
