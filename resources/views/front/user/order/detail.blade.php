@extends('layout_frontpage.master')

@section('content')
    <div class="container">
        <div class="order-details">
            <div class="header">
                <div class="info">
                    <div class="name">
                        Order #{{ $order->order_number }}
                    </div>
                    <div class="date">
                        {{ $order->created_at }}
                    </div>

                </div>
                <div class="action">
                    <div class="status">
                        {{ $order->status }}
                    </div>
                    @if ($order->status != 'canceled')
                        <div class="cancleOrder">
                            <a href="{{ route('cancleOrder', $order) }}">Hủy đơn hàng</a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="content">
                <div class="infoOrder">
                    <div class="buyerInfo">
                        <div class="name">
                            Thông tin người mua
                        </div>
                        <div class="info">
                            <div class="name">
                                Name: {{ $order->name }}
                            </div>
                            <div class="phone">
                                Phone: {{ $order->phone }}
                            </div>
                            <div class="email">
                                Email: {{ $order->email }}
                            </div>
                            <div class="address">
                                Address: {{ $order->shipping_address }}
                            </div>
                        </div>
                    </div>
                    <div class="shipping">
                        <div class="name">
                            Phương thức vận chuyển
                        </div>
                        <div class="value">
                            {{ $order->shipping_method }}
                        </div>
                    </div>
                    <div class="payment_method">
                        <div class="name">
                            Phương thức thanh toán
                        </div>
                        <div class="value">
                            {{ $order->payment_method }}
                        </div>
                    </div>
                </div>
                <div class="productList">
                    <div class="item headerProductList">
                        <div class="info">
                            sản phẩm
                        </div>
                        <div class="price">
                            Giá
                        </div>
                        <div class="quantity">
                            Số lượng
                        </div>
                        <div class="total">Tổng</div>
                    </div>
                    {{-- @dd($order->orderProducts) --}}
                    @foreach ($order->orderProducts as $orderProduct)
                        <div class="item">
                            <div class="info">
                                <div class="img">
                                    <img src="/{{ $orderProduct->product->image }}"
                                        alt="{{ $orderProduct->product->name }}">
                                </div>
                                <div class="name&att">
                                    <div class="name">
                                        {{ $orderProduct->product->name }}
                                    </div>
                                    <div class="att">
                                        {{ $orderProduct->productVariant ? $orderProduct->productVariant->option_value : '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                {{ $orderProduct->price }}
                            </div>
                            <div class="quantity">
                                {{ $orderProduct->quantity }}
                            </div>
                            <div class="total">
                                {{ $orderProduct->price * $orderProduct->quantity }}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="orderTotal">
                    <div class="note">
                        Order note: {{ $order->order_note }}
                    </div>
                    <div class="total">
                        Total: {{ $order->total_amount }}
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
