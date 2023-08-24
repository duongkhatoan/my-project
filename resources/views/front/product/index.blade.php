@extends('layout_frontpage.master')
@section('content')
    <div class="boxMargin">
        <x-product-detail :product="$product" />
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            var selectedGroups = {};
            var productId = $('#product-barcode').val();
            $('.attribute-btn').on('click', function() {
                var attributeId = $(this).data('attribute-id');
                var attributeValue = $(this).data('attribute-value');
                if (selectedGroups[attributeId] !== undefined) {
                    // Kiểm tra nếu cùng nhóm thuộc tính đã có giá trị active khác
                    // console.log(selectedGroups);
                    if (selectedGroups[attributeId] == attributeId) {
                        if ($(this).hasClass('active')) {
                            $(this).removeClass('active');
                            delete selectedGroups[attributeId];
                        } else {
                            $(`.attribute-btn[data-attribute-id="${selectedGroups[attributeId]}"]`)
                                .removeClass(
                                    'active');
                            $(this).addClass('active');
                        }

                        // selectedGroups[attributeId] = attributeId;
                    } else {
                        delete selectedGroups[attributeId];
                        $(this).removeClass('active');
                    }
                } else {
                    $(this).toggleClass('active');
                    selectedGroups[attributeId] = attributeId;
                }

                var activeAttributes = $('.attribute-btn.active');
                // Tạo một mảng để lưu thông tin các thuộc tính
                var selectedAttributes = [];
                var btnSelectAtt = [];
                btnSelectAtt.push({
                    id: attributeId,
                    value: attributeValue
                });
                // Duyệt qua danh sách các thuộc tính có class "active" và lấy thông tin của chúng
                activeAttributes.each(function() {
                    var attributeId = $(this).data('attribute-id');
                    var attributeValue = $(this).data('attribute-value');
                    // Thêm thông tin của thuộc tính vào mảng selectedAttributes
                    selectedAttributes.push({
                        id: attributeId,
                        value: attributeValue
                    });
                });
                $.ajax({
                    url: '/process-selected-attributes',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        attributes: JSON.stringify(selectedAttributes),
                        product: productId,
                        btnSelect: btnSelectAtt,
                    },
                    success: function(response) {
                        if (response.success) {
                            if (response.data.length > 0) {
                                // Hiển thị các thuộc tính đã chọn
                                var selectedAttributes = response.data.map(function(item) {
                                    return {
                                        id: item.attribute_id,
                                        value: item.value_id
                                    };
                                });

                                // Vô hiệu hóa các nút thuộc tính không nằm trong dữ liệu trả về
                                $('.attribute-btn').not('.active').not('.disabledSelect').each(
                                    function() {
                                        var btnAttributeId = $(this).data('attribute-id');
                                        var btnAttributeValue = $(this).data(
                                            'attribute-value');
                                        var isDisabled = !selectedAttributes.some(function(
                                            item) {
                                            return item.id == btnAttributeId && item
                                                .value == btnAttributeValue;
                                        });
                                        if (isDisabled) {
                                            $(this).addClass('disabled');
                                        } else {
                                            $(this).removeClass('disabled');
                                        }

                                    });
                                $('.product-information .price').html(
                                    'Vui lòng chọn thêm thuộc tính để hiện giá');
                                if (response.rawAttributeId) {
                                    $('.attribute-btn').not('.active').not('.disabledSelect')
                                        .each(
                                            function() {
                                                var btnAttributeId = $(this).data(
                                                    'attribute-id');
                                                if (btnAttributeId == response.rawAttributeId) {
                                                    $(this).removeClass('disabled');
                                                }

                                            });
                                }
                            } else {
                                if (response.otherRemoveDisables.length > 0) {
                                    console.log(1);
                                    var otherRemoveDisables = response.otherRemoveDisables.map(
                                        function(item) {
                                            return {
                                                id: item.attribute_id,
                                                value: item.value_id
                                            };
                                        });
                                    $('.attribute-btn').not('.active').not('.disabledSelect')
                                        .each(
                                            function() {
                                                var btnAttributeId = $(this).data(
                                                    'attribute-id');
                                                var btnAttributeValue = $(this).data(
                                                    'attribute-value');
                                                var isNotDisable = otherRemoveDisables.some(
                                                    function(
                                                        item) {
                                                        return item.id == btnAttributeId &&
                                                            item
                                                            .value == btnAttributeValue;
                                                    });
                                                if (isNotDisable) {
                                                    $(this).removeClass('disabled');
                                                }
                                                // else {
                                                //     $(this).addClass('disabled');
                                                // }

                                            });
                                }
                            }
                            if (response.price) {
                                $('.product-information .price').html(
                                    `<div class="regular-price">${response.price}đ</div>`);
                                $('.product-information .btn-cart .btn_add_to_cart').attr('disabled',
                                    false);
                                $('#skuId').val(response.skuId);
                            } else {
                                $('.product-information .btn-cart .btn_add_to_cart').attr('disabled',
                                    true);
                                $('#skuId').val('');
                            }


                        } else {
                            $('.attribute-btn').each(function() {
                                $(this).removeClass('disabled');
                            })
                            $('.product-information .btn-cart .btn_add_to_cart').attr('disabled',
                                true);
                            $('#skuId').val('');
                        }
                    },
                    error: function(error) {
                        // Xử lý lỗi (nếu có)
                    }
                });
            });
        });
    </script>
@endpush
