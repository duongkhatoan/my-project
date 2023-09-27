<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
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
        'order_note'

    ];
    public function getRouteKeyName()
    {
        return 'order_number';
    }
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
        $status = OrderStatusEnum::PENDING;
        $cart = new Cart();
        $productList = $cart->get_checkout_products($data['cartItems']);
        if (!$productList) {
            return false;
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
            'order_note' => $data['order_note'],
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
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
    public function getTotalAmountAttribute()
    {
        // Tính tổng giá tiền của đơn hàng
        $total = 0;
        foreach ($this->orderProducts as $orderProduct) {
            $product = $orderProduct->product;
            $quantity = $orderProduct->quantity;

            // Lấy giá sản phẩm, nếu có biến thể sản phẩm thì sử dụng giá từ biến thể
            $price = $orderProduct->productVariant ? $orderProduct->productVariant->price : $product->actual_price;

            $total += $price * $quantity;
        }

        return $total;
    }
    public function getStatusTextAttribute()
    {
        return ucfirst(OrderStatusEnum::getDescription($this->status));
    }
}
