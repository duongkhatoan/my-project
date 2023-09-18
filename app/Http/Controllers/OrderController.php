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
}
