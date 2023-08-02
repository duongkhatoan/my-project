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
        // dd($request->all());
        // Lấy thông tin các thuộc tính đã chọn từ request
        $selectedAttributes = $request->input('attributes');

        // Mảng chứa các cặp giá trị attribute_id và value_id đã lựa chọn
        $selectedAttributeValuePairs = [];
        $attributeIds = [];
        foreach ($selectedAttributes as $each) {
            $attributeIds[] = $each['id'];
        }
        // dd($attributeIds);
        // Mảng tạm để lưu các attribute_id đã xuất hiện


        // Duyệt qua danh sách các thuộc tính đã chọn
        foreach ($selectedAttributes as $attribute) {
            // Lấy id và value của thuộc tính
            $attributeId = $attribute['id'];
            $attributeValue = $attribute['value'];

            // Tìm các bản ghi trong bảng variant_attributes có attribute_id và value_id trùng với thuộc tính đã chọn
            $variants = VariantAttribute::where('attribute_id', $attributeId)
                ->where('value_id', $attributeValue)
                ->get();
            // dd($selectedAttributes);
            // Duyệt qua các bản ghi đã tìm được và lấy variant_id để tìm các cặp giá trị attribute_id và value_id khác
            foreach ($variants as $variant) {
                // Tìm các bản ghi trong bảng variant_attributes có cùng variant_id nhưng khác attribute_id và value_id
                $otherVariants = VariantAttribute::where('variant_id', $variant->variant_id)
                    ->whereNotIn('attribute_id', $attributeIds)
                    ->get();
                // dd($otherVariants);
                // Duyệt qua các bản ghi đã tìm được và lấy cặp giá trị attribute_id và value_id
                foreach ($otherVariants as $otherVariant) {
                    $selectedAttributeValuePair = [
                        'attribute_id' => $otherVariant->attribute_id,
                        'value_id' => $otherVariant->value_id,
                    ];

                    if (!in_array($selectedAttributeValuePair, $selectedAttributeValuePairs)) {
                        $selectedAttributeValuePairs[] = $selectedAttributeValuePair;
                        $existingPairs[$variant->variant_id][] = $otherVariant->attribute_id;
                    }
                    // $attributeIds[] = $otherVariant->attribute_id;
                }
            }
        }


        // ToDo: Done product attribute must have do get price and quantity


        // Hiển thị kết quả (chỉ để kiểm tra)
        dd($selectedAttributeValuePairs);
    }
}
