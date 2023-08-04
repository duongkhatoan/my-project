<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
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
        $data = $request->all();
        $selectedAttributes = json_decode($data['attributes'], true);
        if ($selectedAttributes) {
            $selectedAttributeValuePairs = [];
            $price = null;
            $quantity = null;
            if (count($selectedAttributes) > 1) {
                $uniqueMatchingAttributes = [];

                // Make sure that thost attribute_id,value_id is all has the same variant_id
                $matchingVariantIds = VariantAttribute::select('variant_id')
                    ->whereIn('attribute_id', array_column($selectedAttributes, 'id'))
                    ->whereIn('value_id', array_column($selectedAttributes, 'value'))
                    ->groupBy('variant_id')
                    ->havingRaw('COUNT(DISTINCT attribute_id) = ?', [count($selectedAttributes)])
                    ->pluck('variant_id')
                    ->first();
                // If not match that u breaking the rules i set
                if (!$matchingVariantIds) {
                    return null;
                }
                // If enough attributes will get price
                $matchingAttributes = VariantAttribute::where('variant_id', $matchingVariantIds)
                    ->get();
                if ($matchingAttributes->count() === count($selectedAttributes)) {
                    // So sánh cặp giá trị của các bản ghi với $selectedAttributes
                    $matching = $matchingAttributes->every(function ($attribute) use ($selectedAttributes) {
                        return in_array($attribute->attribute_id, array_column($selectedAttributes, 'id'))
                            && in_array($attribute->value_id, array_column($selectedAttributes, 'value'));
                    });

                    if ($matching) {
                        $productVariant = ProductVariant::find($matchingVariantIds);
                        $price = $productVariant->price;
                        $quantity = $productVariant->quantity;
                    }
                } else {
                    // get available attributes
                    foreach ($matchingAttributes as $matchingAttribute) {
                        $isDifferent = true;
                        foreach ($selectedAttributes as $selectedAttribute) {
                            if ($matchingAttribute['attribute_id'] === $selectedAttribute['id'] && $matchingAttribute['value_id'] === $selectedAttribute['value']) {
                                $isDifferent = false;
                                break;
                            }
                        }
                        if ($isDifferent) {
                            $selectedAttributeValuePairs[] = [
                                'attribute_id' => $matchingAttribute->attribute_id,
                                'value_id' => $matchingAttribute->value_id
                            ];
                        }
                    }
                }
            } else {
                $variants = VariantAttribute::where('attribute_id', $selectedAttributes[0]['id'])->where('value_id', $selectedAttributes[0]['value'])->get();
                foreach ($variants as $variant) {
                    $variantP = VariantAttribute::where('variant_id', $variant->variant_id)->get();
                    if ($variantP->count() == 1) {
                        dd($variantP);
                    }
                }
                $attributeIds[] = $selectedAttributes[0]['id'];
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
            }

            // Hiển thị kết quả (chỉ để kiểm tra)
            return response()->json([
                'success' => true, // Bạn có thể thêm các thông tin khác vào đây nếu cần
                'data' => $selectedAttributeValuePairs,
                'price' => $price,
                'quantity' => $quantity,
            ]);
        } else {
            return response()->json([
                'success' => false, // Bạn có thể thêm các thông tin khác vào đây nếu cần
            ]);
        }
    }
}
