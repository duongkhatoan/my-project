<?php

namespace App\Http\Controllers;

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
        // dd($request->all());
        $validateData = $request->all();
        $validateData['cartItems'] = json_decode($validateData['cartItems']);
        $order = new Order();
        $orders = $order->handle_insert_order($validateData);
        return response()->json(['message' => 'Đơn hàng đã được xử lý thành công', 'orderNumber' => $orders->order_number]);
    }
    public function orderSuccess()
    {
        return view('front.order');
    }
}
