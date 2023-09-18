<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Không cần định nghĩa bảng
    protected $table = null;

    // Không cần timestamps (created_at và updated_at)
    public $timestamps = false;

    public function get_checkout_products($cartItems)
    {
        $products = [];
        $products['total'] = 0;
        // dd($products);
        foreach ($cartItems as $cartItem) {
            $attributes = [];
            $product = Product::where('id', $cartItem['product_id'])
                ->select('id', 'name', 'discount_price', 'sell_price', 'image')
                ->first();
            if (!$product) {
                return response()->json(['success' => false, 'message' => 'Product not exist']);
            }
            $product->quantity = $cartItem['quantity'];
            $product->price = $product->discount_price > 0 ? $product->discount_price : $product->sell_price;
            if (!empty($cartItem['skuId'])) {
                $productVariant = ProductVariant::where('id', $cartItem['skuId'])
                    ->where('product_id', $cartItem['product_id'])->first();

                // TODO: NEED TO UPDATE INFOMATION ABOUT ATTRIBUTES AND ATTRIBUTES VALUE. add attributes selected at least (just try -> not neccessary)
                $product->price = $productVariant->price;
                if ($productVariant) {

                    // Lấy thông tin về các thuộc tính của ProductVariant
                    $variantAttributes = $productVariant->variantAttributes;
                    foreach ($variantAttributes as $variantAttribute) {
                        $attributes[] = $variantAttribute->attribute->name . ':' . $variantAttribute->attributeValue->value;
                    }
                    $attributes = join(', ', $attributes);
                    $product->attributeObject = $attributes;
                }
                $product->skuId = $productVariant->id;
            }
            $product->totalPrice = $product->quantity * $product->price;
            $product->cartId = $cartItem['cartId'];
            $products['total'] = $products['total'] + $product->price;
            $products['product'][] = $product;
        }
        return $products;
    }
}
