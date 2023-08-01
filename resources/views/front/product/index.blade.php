@extends('layout_frontpage.master')
@section('content')
    <div class="boxMargin">
        <x-product-detail :product="$product" />
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.attribute-btn').on('click', function() {
                var attributeId = $(this).data('attribute-id');
                var attributeValue = $(this).data('attribute-value');

                $(this).toggleClass('active');
                var activeAttributes = $('.attribute-btn.active');
                // Tạo một mảng để lưu thông tin các thuộc tính
                var selectedAttributes = [];

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
                        attributes: selectedAttributes
                    },
                    success: function(response) {
                        // Xử lý kết quả từ server (nếu cần)
                    },
                    error: function(error) {
                        // Xử lý lỗi (nếu có)
                    }
                });
            });
        });
    </script>
@endpush
