var csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");
// Count all quantity product in localstorage
function countItemsInCart() {
    var cartItems = JSON.parse(localStorage.getItem("cart_items")) || []; // Lấy dữ liệu từ localStorage
    var itemCount = 0;

    // Duyệt qua mảng cartItems và tính tổng số lượng sản phẩm
    for (var i = 0; i < cartItems.length; i++) {
        itemCount += cartItems[i].quantity;
    }
    $("header .cart-wrapper .btn .ttcount").text(itemCount);
}

// Load all product from local storage
function loadCartItems() {
    var cartItems = JSON.parse(localStorage.getItem("cart_items"));
    $.ajax({
        url: "/api/get-cart-items",
        method: "POST",
        data: {
            cartItems: cartItems,
        },
        success: function (response) {
            // Xử lý dữ liệu nhận được từ server
            // Ví dụ: hiển thị thông tin sản phẩm trên sidebar
            var cartItemsHTML = "";
            let totalPrice = 0;
            $.each(response, function (index, product) {
                totalPrice += parseInt(product.price) * product.quantity;
                cartItemsHTML += `
            <div class="cart__item productid-${product.id}" data-id="${product.id}">
                    <div class="cart_item__img">
                        <img src="/${product.image}" alt="${product.name}"
                        style="height:70px;" loading="lazy">
                    </div>
                    <div class="cart_item__quantity quantity">
                        <div class="btn-quantity plus btn-plus">
                            <div class="icon"><svg viewBox="0 0 100 54" data-radium="true"
                                    style="width: 100%; height: 100%;">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-123.000000, -352.000000)" fill="#4D4E4F">
                                            <path
                                                d="M221.976822,353.043478 C220.598555,351.652174 218.358871,351.652174 216.980603,353.043478 L173.048332,397.478261 L129.02992,353.043478 C127.651652,351.652174 125.411968,351.652174 124.0337,353.043478 C122.655433,354.434783 122.655433,356.695652 124.0337,358.086957 L170.464081,404.956522 C171.153215,405.652174 172.014632,406 172.962191,406 C173.823608,406 174.771166,405.652174 175.4603,404.956522 L221.890681,358.086957 C223.35509,356.695652 223.35509,354.434783 221.976822,353.043478 L221.976822,353.043478 Z"
                                                transform="translate(173.000000, 379.000000) rotate(-180.000000) translate(-173.000000, -379.000000) ">
                                            </path>
                                        </g>
                                    </g>
                                </svg></div>
                        </div>
                        <div class="quantity-number">
                            <div class="number qty">${product.quantity}</div>
                        </div>
                        <div class="btn-quantity minus btn-minus">
                            <div class="icon"><svg viewBox="0 0 100 54" data-radium="true"
                                    style="width: 100%; height: 100%;">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-286.000000, -352.000000)" fill="#4D4E4F">
                                            <path
                                                d="M384.976822,353.043478 C383.598555,351.652174 381.358871,351.652174 379.980603,353.043478 L336.048332,397.478261 L292.02992,353.043478 C290.651652,351.652174 288.411968,351.652174 287.0337,353.043478 C285.655433,354.434783 285.655433,356.695652 287.0337,358.086957 L333.464081,404.956522 C334.153215,405.652174 335.014632,406 335.962191,406 C336.823608,406 337.771166,405.652174 338.4603,404.956522 L384.890681,358.086957 C386.35509,356.695652 386.35509,354.434783 384.976822,353.043478 L384.976822,353.043478 Z">
                                            </path>
                                        </g>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                    <div class="cart_item__info">
                        <div class="pr-name">
                        <h3>${product.name}</h3>
                        </div>
                        <div class="pr-price" style="padding-top: 5px">
                            <span class="js_cart_item_price">${product.price}</span>đ
                        </div>
                    </div>
                    <div class="cart_item__trash trash-container">
                        <div class="icon">
                            <svg viewBox="0 0 100 100" data-radium="true" style="width: 18px; height: auto;">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-123.000000, -515.000000)" fill="#CCCCCC">
                                        <path
                                            d="M126.528399,536.360896 L130.401033,536.360896 L139.437177,611.899225 C139.609294,613.70801 141.158348,615 142.965577,615 L203.034423,615 C204.841652,615 206.304647,613.70801 206.562823,611.899225 L215.598967,536.360896 L219.471601,536.360896 C221.450947,536.360896 223,534.810508 223,532.829457 C223,530.848407 221.450947,529.298019 219.471601,529.298019 L212.414802,529.298019 L192.449225,529.298019 L192.449225,518.531438 C192.449225,516.550388 190.900172,515 188.920826,515 L157.079174,515 C155.099828,515 153.550775,516.550388 153.550775,518.531438 L153.550775,529.298019 L133.585198,529.298019 L126.528399,529.298019 C124.549053,529.298019 123,530.848407 123,532.829457 C123,534.810508 124.635112,536.360896 126.528399,536.360896 L126.528399,536.360896 Z M160.607573,522.062877 L185.392427,522.062877 L185.392427,529.298019 L160.607573,529.298019 L160.607573,522.062877 L160.607573,522.062877 Z M208.45611,536.360896 L199.936317,608.023256 L146.063683,608.023256 L137.54389,536.360896 L208.45611,536.360896 L208.45611,536.360896 Z M161.296041,597.256675 C163.275387,597.256675 164.824441,595.706288 164.824441,593.725237 L164.824441,551.434109 C164.824441,549.453058 163.275387,547.90267 161.296041,547.90267 C159.316695,547.90267 157.767642,549.453058 157.767642,551.434109 L157.767642,593.725237 C157.767642,595.706288 159.316695,597.256675 161.296041,597.256675 Z M184.703959,597.256675 C186.683305,597.256675 188.232358,595.706288 188.232358,593.725237 L188.232358,551.434109 C188.232358,549.453058 186.683305,547.90267 184.703959,547.90267 C182.724613,547.90267 181.175559,549.453058 181.175559,551.434109 L181.175559,593.725237 C181.175559,595.706288 182.810671,597.256675 184.703959,597.256675 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="cart_item__trash_popover">
                        <div
                            style="font-size: 14px; line-height: 24px; font-family: avenir-next-regular, arial; margin-bottom: 3px;">
                            Xác nhận xoá sản phẩm?</div>
                        <div style="display: flex; justify-content: space-between;">
                            <div class="submit-button js_cart_item__trash_agree">
                                <div
                                    style="font-size: 13px; font-family: Oswald, sans-serif; letter-spacing: 1.1px; text-transform: uppercase;">
                                    Xoá</div>
                            </div>
                            <div class="submit-button js_cart_item__trash_close"
                                style="background-color:#fff; color:#000;">
                                <div
                                    style="font-size: 13px; font-family: Oswald, sans-serif; letter-spacing: 1.1px; text-transform: uppercase;">
                                    Hủy</div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            });
            // Hiển thị danh sách sản phẩm trên sidebar
            $("#listCartItems").html(cartItemsHTML);
            $(
                ".page-cart .cart-collaterals table.table tr td .cart-total-price"
            ).html(totalPrice);
        },
        error: function (xhr, status, error) {
            // Xử lý lỗi nếu có
            console.log("Error:", error);
        },
    });
}

// add to cart
$(".addToCartButton").click(function () {
    const productId = $(this).data("product");
    const quantity = parseInt(
        $(this).closest(".addToCart").find(".quantity_value").val()
    );

    // Kiểm tra số lượng có hợp lệ hay không
    if (isNaN(quantity) || quantity <= 0) {
        alert("Please enter a valid quantity.");
        return;
    }

    // Gửi AJAX request đến route /cart/add
    $.ajax({
        url: "/cart/add",
        method: "POST",
        data: {
            product_id: productId,
            quantity: quantity,
            _token: csrfToken,
        },
        success: function (response) {
            // Kiểm tra kết quả từ controller
            if (response.success) {
                // Nếu thành công, lưu thông tin vào LocalStorage
                var cartItem = {
                    product_id: productId,
                    quantity: quantity,
                };
                var cartItems =
                    JSON.parse(localStorage.getItem("cart_items")) || [];
                var updated = false;
                for (var i = 0; i < cartItems.length; i++) {
                    if (cartItems[i].product_id === productId) {
                        // Nếu sản phẩm đã tồn tại, tăng quantity lên
                        cartItems[i].quantity += quantity;
                        updated = true;
                        break;
                    }
                }
                if (!updated) {
                    // Nếu sản phẩm chưa tồn tại, thêm mới vào
                    cartItems.push(cartItem);
                }
                localStorage.setItem("cart_items", JSON.stringify(cartItems));

                toastr.success("Add product successfully!", "", {
                    timeOut: 3000,
                    positionClass: "toast-bottom-center",
                    progressBar: true,
                });
                $("#cart-sidebar").addClass("active");
                loadCartItems();
                countItemsInCart();
                // Hiển thị thông báo thành công
                // alert(response.message);
            } else {
                // Nếu có lỗi, hiển thị thông báo lỗi từ server
                alert(response.error);
            }
        },
        error: function (error) {
            // Xử lý lỗi nếu có
            console.error("Error adding product to cart:", error);
        },
    });
});

$(document).ready(function () {
    countItemsInCart();
    // Xử lý sự kiện click vào nút xóa sản phẩm (sử dụng delegation)
    $(document).on("click", ".cart_item__trash", function () {
        // Tìm đối tượng cart_item__trash_popover trong cùng một cart_item
        var popover = $(this).siblings(".cart_item__trash_popover");

        // Thêm class 'active' vào cart_item__trash_popover
        popover.addClass("active");
    });

    // Close sidebar menu list product from card
    $(document).on(
        "click",
        ".panel--sidebar .panel__close .js_panel__close",
        function () {
            $(this).closest(".panel--sidebar").removeClass("active");
        }
    );

    // Xử lý sự kiện click vào nút "Hủy" trong popover (sử dụng delegation)
    $(document).on(
        "click",
        ".cart_item__trash_popover .js_cart_item__trash_agree",
        function () {
            // Tìm đối tượng cart_item liên quan
            var cartItem = $(this).closest(".cart__item");
            var price = parseInt(cartItem.find(".js_cart_item_price").text());
            var totalPrice = parseInt(
                $(
                    ".page-cart .cart-collaterals table.table tr td .cart-total-price"
                ).text()
            );
            // Lấy productId từ thuộc tính data-id
            var productId = cartItem.data("id");

            // Lấy danh sách sản phẩm từ local storage
            var cartItems =
                JSON.parse(localStorage.getItem("cart_items")) || [];

            // Tìm sản phẩm cần xóa trong danh sách
            var indexToRemove = cartItems.findIndex(function (item) {
                return item.product_id === productId;
            });

            if (indexToRemove !== -1) {
                // Lấy thông tin sản phẩm cần xóa
                var itemToRemove = cartItems[indexToRemove];
                var quantityToRemove = itemToRemove.quantity;

                // Xóa sản phẩm khỏi danh sách
                cartItems.splice(indexToRemove, 1);

                // Lưu danh sách sản phẩm mới vào local storage
                localStorage.setItem("cart_items", JSON.stringify(cartItems));

                // Xóa phần tử cart_item khỏi DOM
                cartItem.remove();

                // Tính lại tổng giá trị giỏ hàng
                var priceProduct = quantityToRemove * price;
                totalPrice -= priceProduct;

                // Cập nhật tổng giá trị giỏ hàng trong phần tổng tiền
                $(
                    ".page-cart .cart-collaterals table.table tr td .cart-total-price"
                ).html(totalPrice);
                countItemsInCart();
            }
        }
    );

    // Handle cancle button delete product from cart
    $(document).on(
        "click",
        ".cart_item__trash_popover .js_cart_item__trash_close",
        function () {
            $(this).closest(".cart_item__trash_popover").removeClass("active");
        }
    );

    // Handle increase and decrease quantity of product
    $(document).on("click", ".btn-plus", function () {
        handleQuantityChange($(this), "increase");
    });

    // Xử lý sự kiện click vào nút giảm số lượng (sử dụng delegation)
    $(document).on("click", ".btn-minus", function () {
        handleQuantityChange($(this), "decrease");
    });

    // Hàm xử lý thay đổi số lượng sản phẩm
    function handleQuantityChange(button, action) {
        // Tìm đối tượng cart_item liên quan
        var cartItem = button.closest(".cart__item");
        var price = parseInt(cartItem.find(".js_cart_item_price").text());
        // Lấy productId từ thuộc tính data-id
        var productId = cartItem.data("id");

        // Lấy danh sách sản phẩm từ local storage
        var cartItems = JSON.parse(localStorage.getItem("cart_items")) || [];

        // Tìm sản phẩm cần thay đổi số lượng trong danh sách
        var indexToUpdate = cartItems.findIndex(function (item) {
            return item.product_id === productId;
        });
        let totalPrice = parseInt(
            $(
                ".page-cart .cart-collaterals table.table tr td .cart-total-price"
            ).text()
        );
        if (indexToUpdate !== -1) {
            // Lấy thông tin sản phẩm cần thay đổi số lượng
            var itemToUpdate = cartItems[indexToUpdate];

            // Thay đổi số lượng tùy theo action
            if (action === "increase") {
                itemToUpdate.quantity++;
                totalPrice += price;
            } else if (action === "decrease") {
                if (itemToUpdate.quantity > 1) {
                    itemToUpdate.quantity--;
                    totalPrice -= price;
                }
            }

            // Lưu danh sách sản phẩm mới vào local storage
            localStorage.setItem("cart_items", JSON.stringify(cartItems));

            // Cập nhật số lượng sản phẩm trong DOM
            cartItem.find(".quantity-number .qty").text(itemToUpdate.quantity);

            // // Tính lại tổng giá trị giỏ hàng
            // var totalPrice = 0;
            // cartItems.forEach(function(item) {
            //     totalPrice += item.quantity * item.price;
            // });

            // Cập nhật tổng giá trị giỏ hàng trong phần tổng tiền
            $(
                ".page-cart .cart-collaterals table.table tr td .cart-total-price"
            ).html(totalPrice);
            countItemsInCart();
        }
    }
});

// handle variant
$(".btn_add_to_cart").click(function () {
    const productId = $(this).data("product");
    let skuId = "";
    const quantity = parseInt(
        $(this).closest(".btn-cart").find(".quantity").val()
    );

    // Kiểm tra số lượng có hợp lệ hay không
    if (isNaN(quantity) || quantity <= 0) {
        alert("Please enter a valid quantity.");
        return;
    }
    if ($("#selectAtt").val() && $("#skuId").val()) {
        skuId = $("#skuId").val();
    }
    // Gửi AJAX request đến route /cart/add
    $.ajax({
        url: "/cart/add",
        method: "POST",
        data: {
            product_id: productId,
            quantity: quantity,
            skuId: skuId,
            _token: csrfToken,
        },
        success: function (response) {
            // Kiểm tra kết quả từ controller
            if (response.success) {
                if (!skuId) {
                    var cartItem = {
                        product_id: productId,
                        quantity: quantity,
                    };
                } else {
                    var cartItem = {
                        product_id: productId,
                        quantity: quantity,
                        skuId: skuId,
                    };
                }
                console.log(cartItem);
                var cartItems =
                    JSON.parse(localStorage.getItem("cart_items")) || [];
                var updated = false;
                for (var i = 0; i < cartItems.length; i++) {
                    if (cartItems[i].skuId && cartItems[i].skuId == skuId) {
                        cartItems[i].quantity += quantity;
                        updated = true;
                        break;
                    }
                    if (cartItems[i].product_id === productId && !cartItems[i].skuId) {
                        // Nếu sản phẩm đã tồn tại, tăng quantity lên
                        cartItems[i].quantity += quantity;
                        updated = true;
                        break;
                    }
                }
                if (!updated) {
                    // Nếu sản phẩm chưa tồn tại, thêm mới vào
                    cartItems.push(cartItem);
                }
                localStorage.setItem("cart_items", JSON.stringify(cartItems));

                toastr.success("Add product successfully!", "", {
                    timeOut: 3000,
                    positionClass: "toast-bottom-center",
                    progressBar: true,
                });
                $("#cart-sidebar").addClass("active");
                loadCartItems();
                countItemsInCart();
                // Hiển thị thông báo thành công
                // alert(response.message);
            } else {
                // Nếu có lỗi, hiển thị thông báo lỗi từ server
                alert(response.error);
            }
        },
        error: function (error) {
            // Xử lý lỗi nếu có
            console.error("Error adding product to cart:", error);
        },
    });
});
