<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\VariantAttribute;
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
            ->select('id', 'name', 'discount_price', 'sell_price', 'image')
            ->get();
        // Kết hợp thông tin sản phẩm và số lượng từ local storage để tạo mảng dữ liệu gửi về trang web
        foreach ($products as $product) {
            $item = collect($cartItems)->firstWhere('product_id', $product->id);
            $product->quantity = $item['quantity'];
            $product->price = $product->discount_price > 0 ? $product->discount_price : $product->sell_price;
        }

        return response()->json($products);
    }

    public function handleSelectAtt(Request $request)
    {
        // Lấy thông tin các thuộc tính đã chọn từ request
        $selectedAttributes = $request->input('attributes');

        // Duyệt qua danh sách các thuộc tính đã chọn
        foreach ($selectedAttributes as $attribute) {
            // Lấy id và value của thuộc tính
            $attributeId = $attribute['id'];
            $attributeValue = $attribute['value'];
            // Xử lý các tác vụ liên quan đến việc tìm kiếm biến thể sản phẩm tương ứng,
            // tính toán giá, và các tác vụ khác.

            // Ví dụ: Tìm biến thể sản phẩm dựa trên id và value của thuộc tính
            $variants = VariantAttribute::where('attribute_id', $attributeId)
                ->where('value_id', $attributeValue)
                ->get();
            $variantIds = $variants->pluck('variant_id');
            $attributeValuePairs = VariantAttribute::whereIn('variant_id', $variantIds)
                ->pluck('value_id', 'attribute_id')
                ->toArray();
            $uniqueAttributeValuePairs[] = array_diff($attributeValuePairs, $variantIds->toArray());


            // ToDo: Tính toán giá tiền. Nếu tất cả attribute nằm trong bảng variant_att thì mình mới lấy giá được. Nếu ko có thì chỉ đẩy thuộc tính cần chọn thôi
        }
        dd($uniqueAttributeValuePairs);
    }
}
