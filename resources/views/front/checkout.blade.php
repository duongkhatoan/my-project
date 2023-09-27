@extends('layout_frontpage.master')
@section('content')
    <div class="checkout-inner float-left w-100">
        <div class="container">
            <form class="needs-validation" id="checkoutForm">
                @csrf
                <div class="row">
                    <div class="cart-block-left col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span>Your cart</span>
                        </h4>

                        {{-- TODO: ADD PROMO CODE --}}
                        <div class="list-group mb-3">
                            <div class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Vận chuyển</h6>
                                </div>
                                <span class="text-muted">$20</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Tổng tiền</h6>
                                </div>
                                <span class="text-muted" id="totalPrice"></span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>EXAMPLECODE</small>
                                </div>
                                <span class="text-success">-$5</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between">
                                <strong>Total (USD)</strong>
                                <strong>$35</strong>
                            </div>
                            <button id="placeOrderButton" class="btn btn-primary btn-lg btn-primary">Place an order</button>
                        </div>
                    </div>
                    <div class="cart-block-right col-md-8 order-md-1">
                        <div class="profile">
                            <h4 class="mb-3">Billing address</h4>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="firstName">name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="firstName" placeholder=""
                                        value="{{ $user->name }}" required="" name="name">
                                    <p class="error_msg" id="name_error"></p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="phone">Phone <span class="required">*</span></label>
                                    <input type="number" class="form-control" id="phone" placeholder="" name="phone"
                                        value="{{ $user->phone }}">
                                    <p class="error_msg" id="phone_error"></p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com"
                                        name="email" value="{{ $user->email }}">
                                    <p class="error_msg" id="email_error"></p>
                                </div>
                            </div>
                        </div>
                        <div class="address">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group required-field">
                                        <label for="province">Province</label>
                                        <select data-type="province" class="province form-control locationS select2"
                                            name="province" id="province">
                                            <option value="">Select province</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->idProvince }}"
                                                    {{ $province->idProvince === Auth::user()->province ? 'selected' : '' }}>
                                                    {{ $province->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="error_msg" id="province_error"></p>
                                    </div>
                                    <!-- End .form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group required-field">
                                        <label for="district">District</label>
                                        <select data-type="district" class="district form-control locationS" name="district"
                                            id="district">
                                            <option value="">Select district</option>
                                            @if ($districts)
                                                @foreach ($districts as $district)
                                                    <option value="{{ $district->idDistrict }}"
                                                        {{ $district->idDistrict === Auth::user()->district ? 'selected' : '' }}>
                                                        {{ $district->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <p class="error_msg" id="district_error"></p>
                                    </div>
                                    <!-- End .form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group required-field">
                                        <label for="ward">Ward</label>
                                        <select data-type="ward" class="ward form-control locationS" name="ward"
                                            id="ward">
                                            <option value="">Select ward</option>
                                            @if ($wards)
                                                @foreach ($wards as $ward)
                                                    <option value="{{ $ward->idCommune }}"
                                                        {{ $ward->idCommune === Auth::user()->ward ? 'selected' : '' }}>
                                                        {{ $ward->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <p class="error_msg" id="ward_error"></p>
                                    </div>
                                    <!-- End .form-group -->
                                </div>
                                <div class="col-md-12">
                                    <label for="address">Address<span class="required">*</span> </label>
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                        required="" value="{{ $user->address }}" name="address">
                                    <p class="error_msg" id="address_error"></p>
                                </div>
                            </div>
                        </div>
                        <div class="productList">
                            <p class="error_msg" id="product"></p>
                            <div class="item header">
                                <div>
                                    Sản phẩm
                                </div>
                                <div>
                                    Đơn giá
                                </div>
                                <div>Số lượng</div>
                                <div>Thành tiền</div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info" name="remember"
                                value="1">
                            <label class="custom-control-label" for="save-info">Save this information for next
                                time</label>
                            @error('remember')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="order_note">
                            <label for="order_note">Order_note</label>
                            <input type="text" class="form-control" id="order_note"
                                required="" name="order_note">
                            <p class="error_msg" id="order_note"></p>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        const cartIds = new URLSearchParams(window.location.search).get('cartId');
        var cartItems = JSON.parse(localStorage.getItem("cart_items"));
        if (cartIds) {
            const cartIdsArray = cartIds.split(',');
            var cartDataLoader = [];
            $.each(cartIdsArray, function(index, cardId) {
                let item = cartItems.find(item => item.cartId === cardId);
                if (item) {
                    cartDataLoader.push(item);
                }
            });
            load_product_in_checkout(cartDataLoader);
            cartItems = cartDataLoader;
        } else {
            load_product_in_checkout(cartItems);
        }


        // handle place order
        $("#placeOrderButton").click(function() {
            event.preventDefault();
            // Serialize dữ liệu từ form thành chuỗi URL-encoded
            const formData = new URLSearchParams($("#checkoutForm").serialize());
            formData.append('cartItems', JSON.stringify(cartItems));
            $.ajax({
                url: "{{ route('checkout.process') }}", // Đặt URL xử lý đơn hàng tại đây
                method: "POST",
                data: formData.toString(),
                // contentType: "application/json",
                success: function(response) {
                    // Xử lý kết quả từ máy chủ sau khi hoàn thành thanh toán
                    const cartIds = new URLSearchParams(window.location.search).get('cartId');
                    var cartItems = JSON.parse(localStorage.getItem("cart_items"));
                    if (cartIds) {
                        const cartIdsArray = cartIds.split(',');
                        $.each(cartIdsArray, function(index, cardId) {
                            let indexToRemove = cartItems.findIndex(item => item.cartId ===
                                cardId);
                            if (indexToRemove !== -1) {
                                cartItems.splice(indexToRemove, 1);
                            }
                        });
                        localStorage.setItem("cart_items", JSON.stringify(cartItems));
                    } else {
                        localStorage.removeItem("cart_items");
                    }


                    window.location.href =
                        "/order/success?orderNumber=" + response.orderNumber;
                    // Xử lý kết quả hoặc chuyển hướng đến trang kết quả
                },
                error: function(error) {
                    // Xử lý lỗi nếu có
                    $(".error_msg").html('');
                    var errorResponse = JSON.parse(error.responseText);
                    $.each(errorResponse.errors, function(index, error) {

                        $("#" + index + "_error").html(error);
                    });
                    // console.log(errorResponse.errors);
                }
            });
        });
    </script>
@endpush
