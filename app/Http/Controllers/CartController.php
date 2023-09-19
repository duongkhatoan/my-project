<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\StoreUserOrderRequest;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //

    public function addToCart(AddToCartRequest $request)
    {
        $product = Product::find($request->product_id);
        $product->price = $product->actualprice;
        if ($request->skuId) {
            $productVariant = ProductVariant::where('product_id', $product->id)->where('id', $request->skuId)->first();
            if (!$productVariant) {
                return response()->json(['success' => false, 'message' => 'Product not exist']);
            }
            $product->price = $productVariant->price;
            // Lấy thông tin về các thuộc tính của ProductVariant
            $variantAttributes = $productVariant->variantAttributes;
            foreach ($variantAttributes as $variantAttribute) {
                $attributes[] = $variantAttribute->attribute->name . ':' . $variantAttribute->attributeValue->value;
            }
            $attributes = join(', ', $attributes);
            $product->attributeObject = $attributes;

            $product->skuId = $productVariant->id;
        }
        // dd($product);
        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not exist']);
        }
        return response()->json(['success' => true, 'message' => 'Thêm sản phẩm vào giỏ hàng thành công', 'product' => $product], 200);
    }
    public function checkboxProduct(Request $request)
    {
        if ($request->data) {
            session()->put('cartChecked', []);
            foreach ($request->data as $index => $value) {
                session()->push('cartChecked', $value);
            }

            return response()->json(['success' => true, 'message' => 'success'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Please dont change anything']);
        }
    }
    public function checkout(Request $request)
    {
        $provinces = load_all_provinces();
        $districts = '';
        $wards = '';
        $user = Auth::user();
        // dd($user->province);
        if ($user->province) {
            $districts = load_district_base_on_provinces($user->province);
            if ($user->district) {
                $wards = load_wards_base_on_districts($user->district);
            }
        }
        return view('front.checkout', compact('provinces', 'districts', 'wards', 'user'));
    }

}
