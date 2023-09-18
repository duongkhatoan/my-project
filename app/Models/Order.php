<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class Order extends Model
{
    use HasFactory;

    use SoftDeletes; // Sử dụng tính năng xóa mềm (nếu cần)

    protected $fillable = [
        'user_id', 'order_number', 'status', 'total_amount',
        'shipping_address', 'billing_address', 'payment_method', 'shipping_method',
        'name',
        'phone',
        'email',

    ];

    // Định nghĩa quan hệ với người dùng (nếu có)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function handle_insert_order($data)
    {
        $province = load_info_province($data['province']);
        $district = load_info_district($data['district']);
        $ward = load_info_ward($data['ward']);
        $shipping_address = $data['address'] . ', ' . $ward[0]->name . ', ' . $district[0]->name . ', ' . $province[0]->name;
        $order_number = time() . mt_rand(1000, 9999);
        $status = 1;
        if (session()->get('cartChecked')) {
            $checkoutItem  = session()->get('cartChecked');
            $cart = new Cart();
            $productList = $cart->get_checkout_products($checkoutItem);
        }
        $total_amount = $productList['total'];
        $payment_method = 1;
        $shipping_method = 1;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $order = $this::create([
            'user_id' => $user_id,
            'order_number' => $order_number,
            'status' => 1,
            'total_amount' => $total_amount,
            'shipping_address' => $shipping_address,
            'payment_method' => $payment_method,
            'shipping_method' => $shipping_method,
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],

        ]);


        // handle order products
        foreach ($productList['product'] as $product) {
            $orderProduct = OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'product_variant_id' => $product->skuId ? $product->skuId : null,
                'quantity' => $product->quantity,
            ]);
        }

        return $order;
    }
}
