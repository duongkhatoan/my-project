<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function addToCart(AddToCartRequest $request)
    {
        $validateData = $request->validated();
        $product = Product::find($request->product_id);
        if ($request->skuId) {
            $productVariant = ProductVariant::where('product_id', $product->id)->where('id', $request->skuId)->first();
            if(!$productVariant){
                return response()->json(['success' => false, 'message' => 'Product not exist']);
            }
        }

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not exist']);
        }
        return response()->json(['success' => true, 'message' => 'Thêm sản phẩm vào giỏ hàng thành công'], 200);
    }
}
