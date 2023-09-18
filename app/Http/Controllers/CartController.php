<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
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
        $validateData = $request->validated();
        $product = Product::find($request->product_id);
        if ($request->skuId) {
            $productVariant = ProductVariant::where('product_id', $product->id)->where('id', $request->skuId)->first();
            if (!$productVariant) {
                return response()->json(['success' => false, 'message' => 'Product not exist']);
            }
        }

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not exist']);
        }
        return response()->json(['success' => true, 'message' => 'Thêm sản phẩm vào giỏ hàng thành công'], 200);
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
    public function checkout()
    {
        if (session()->get('cartChecked')) {
            $checkoutItem  = session()->get('cartChecked');
            $cart = new Cart();
            $productList = $cart->get_checkout_products($checkoutItem);
            // dd($productList['product']);
        }
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
        return view('front.checkout', compact('provinces', 'districts', 'wards', 'user','productList'));
    }
}
