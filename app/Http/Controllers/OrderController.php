<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatusEnum;
use App\Http\Requests\StoreUserOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(StoreUserOrderRequest $request)
    {
        $validateData = $request->all();
        $order = new Order();
        $orders = $order->handle_insert_order($validateData);
        dd($request->all());
    }
    public function processCheckout(StoreUserOrderRequest $request)
    {
        $validateData = $request->all();
        $validateData['cartItems'] = json_decode($validateData['cartItems']);
        $order = new Order();
        $orders = $order->handle_insert_order($validateData);
        // if ($order) {
        //     return redirect()->route('order.success');
        // }
        return response()->json(['message' => 'Đơn hàng đã được xử lý thành công', 'orderNumber' => $orders->order_number]);
    }
    public function orderSuccess()
    {
        return view('front.order');
    }
    public function cancleOrder(Order $order)
    {
        if ($order->user_id == auth()->id()) {
            if ($order->status != OrderStatusEnum::DELIVERED) {
                $order->update(['status' => OrderStatusEnum::CANCELED]);
                return redirect()->back()->with('sucess', 'Update order status');
            }
        } else {
            // Xử lý khi đơn hàng không thuộc về người dùng hiện tại
            return abort(403); // Hoặc chuyển hướng đến trang lỗi hoặc làm gì đó khác
        }
    }
}
