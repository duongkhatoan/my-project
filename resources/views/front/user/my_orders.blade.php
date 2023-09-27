@extends('layout_frontpage.master')
@section('content')
    <div class="container">
        <div class="myOrders">
            <div class="header">
                My order
            </div>
            <div class="content">
                @foreach ($myOrders as $order)
                    <a href="{{ route('users.detailOrder', $order) }}">
                        <div class="item">
                            <div class="headerOrder">
                                <div class="orderNumber">
                                    #{{ $order->order_number }}
                                </div>
                                <div class="status">

                                </div>
                            </div>
                            <div class="productContent">
                                @foreach ($order->orderProducts as $index => $orderProduct)
                                    @if ($index == 2)
                                    @break
                                @endif
                                <div class="itemProduct">
                                    <div class="img">
                                        <img src="/{{ $orderProduct->product->image }}"
                                            alt="{{ $orderProduct->product->name }}">
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            {{ $orderProduct->product->name }}
                                        </div>
                                        <div class="attributes">
                                            {{ $orderProduct->productVariant ? $orderProduct->productVariant->option_value : '' }}
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        {{ $orderProduct->quantity }}
                                    </div>
                                    <div class="price">
                                        {{ $orderProduct->productVariant ? $orderProduct->productVariant->price : $orderProduct->product->actual_price }}
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="footer">
                            <div class="boxTrans">
                                sdsd
                            </div>
                            <div class="right">
                                <div class="total">
                                    Total: {{ $order->total_amount }}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

</div>
</div>
{{ $myOrders->links() }} <!-- Hiển thị phân trang -->
@endsection
