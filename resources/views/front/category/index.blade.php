@extends('layout_frontpage.master')
@section('body-class', 'category')
@section('content')
    <div class="main-content w-100 float-left">
        <div class="container">
            <div class="row">
                <div class="content-wrapper col-xl-9 col-lg-9 order-lg-2">
                    <header class="product-grid-header d-flex d-xs-block d-sm-flex d-lg-flex w-100 float-left">
                        <div
                            class="hidden-sm-down total-products d-flex d-xs-block d-lg-flex col-md-3 col-sm-3 col-xs-12 align-items-center">
                            <div class="row">
                                <div class="nav" role="tablist">
                                    <a class="grid active" href="#grid" data-toggle="tab" role="tab"
                                        aria-selected="true" aria-controls="grid"><i
                                            class="material-icons align-middle">grid_on</i></a>
                                    <a class="list" href="#list" data-toggle="tab" role="tab" aria-selected="false"
                                        aria-controls="list"><i
                                            class="material-icons align-middle">format_list_bulleted</i></a>
                                    <a class="sort" href="#sort-view" data-toggle="tab" role="tab"
                                        aria-selected="false" aria-controls="sort-view"><i
                                            class="material-icons align-middle">reorder</i></a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="shop-results-wrapper d-flex d-sm-flex d-xs-block d-lg-flex justify-content-end col-md-9 col-sm-9 col-xs-12">
                            <div class="shop-results d-flex align-items-center"><span>Show</span>
                                <div class="shop-select">
                                    <select name="number" id="number">
                                        <option value="9">9</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="shop-results d-flex align-items-center"><span>Sort By</span>
                                <div class="shop-select">
                                    <select name="sort" id="sort">
                                        <option value="position">Default sorting</option>
                                        <option value="p-name">Sort Popularity</option>
                                        <option value="p-price">Sort Price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="tab-content text-center products w-100 float-left">
                        <div class="tab-pane grid fade active" id="grid" role="tabpanel">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="product-layouts col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <x-product-item :product="$product" />
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                    <div class="pagination-wrapper float-left w-100">
                        <p>Showing 1 to 9 of 11 (2 Pages)</p>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="left-column sidebar col-xl-3 col-lg-3 order-lg-1">
                    <div class="sidebar-filter left-sidebar w-100 float-left">
                        <div class="title">
                            <a data-toggle="collapse" href="#sidebar-main" aria-expanded="false"
                                aria-controls="sidebar-main" class="d-lg-none block-toggler">Product Categories</a>
                        </div>
                        <div id="sidebar-main" class="sidebar-main collapse">
                            @if (!$category->children->isEmpty())
                                <div class="sidebar-block categories">
                                    <h3 class="widget-title"><a data-toggle="collapse" href="#categoriesMenu" role="button"
                                            aria-expanded="true" aria-controls="categoriesMenu">Categories</a></h3>
                                    <div id="categoriesMenu" class="expand-lg collapse show">
                                        <div class="nav nav-pills flex-column mt-4">
                                            @foreach ($category->children as $child)
                                                <a href="#" class="nav-link d-flex justify-content-between mb-2 ">
                                                    <span>{{ $child->name }}</span>
                                                    <span
                                                        class="sidebar-badge">{{ $child->product ? $child->product->count() : '0' }}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="sidebar-block shop-filter-group shop-brands-filter">
                                <h3 class="widget-title"><a data-toggle="collapse" href="#brand" role="button"
                                        aria-expanded="true" aria-controls="brand">brand</a></h3>
                                <div id="brand" class="collapse show">
                                    @foreach ($brands as $brand)
                                        <div class="shop-filter shop-checkbox-filter">
                                            <div class="shop-checkbox">
                                                <label class="shop-checkbox__control">
                                                    <input type="checkbox" class="brandCheckBox" name="brand-filter"
                                                        value="{{ $brand->id }}">
                                                    <span class="shop-checkbox__label">{{ $brand->name }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="sidebar-block shop-filter-group shop-prices-filter">
                                <h3 class="widget-title"><a data-toggle="collapse" href="#price" role="button"
                                        aria-expanded="true" aria-controls="price">Price</a></h3>
                                <div id="price" class="collapse show">
                                    <div class="price-inner">
                                        <div class="filter-price-range-header">
                                            Khoảng giá
                                        </div>
                                        <div class="shop-price-range_filter">
                                            <input type="text" name="minPrice" maxlength="13"
                                                class="shop-price-range-filter__input" placeholder="đ Từ">
                                            <div class="range-line"></div>
                                            <input type="text" name="maxPrice" maxlength="13"
                                                class="shop-price-range-filter__input" placeholder="đ Đến">
                                        </div>
                                    </div>
                                    <button class="shop-button-solid" id="submitPriceRange">Submit</button>
                                </div>
                            </div>
                            {{-- <div class="sidebar-block price">
                                <h3 class="widget-title"><a data-toggle="collapse" href="#price" role="button"
                                        aria-expanded="true" aria-controls="price">Price</a></h3>
                                <div id="price" class="collapse show">
                                    <div class="price-inner">
                                        <label for="amount">Price range:</label>
                                        <input type="text" id="amount" readonly
                                            style="border:0; font-weight:bold; background:none;">
                                        <div id="slider-range"></div>
                                    </div>
                                </div>

                            </div> --}}
                            <div class="sidebar-block color">
                                <h3 class="widget-title"><a data-toggle="collapse" href="#color" role="button"
                                        aria-expanded="true" aria-controls="color">Color</a></h3>
                                <div id="color" class="sidebar-widget-option-wrapper collapse show">
                                    <div class="color-inner">
                                        <div class="sidebar-widget-option">
                                            <a href="#" style="background-color: #000000;"></a>
                                            Black <span>(4)</span>
                                        </div>
                                        <div class="sidebar-widget-option">
                                            <a href="#" style="background-color: #11426b;"></a>
                                            Blue <span>(3)</span>
                                        </div>
                                        <div class="sidebar-widget-option">
                                            <a href="#" style="background-color: #7d5a3c;"></a>
                                            Brown <span>(3)</span>
                                        </div>
                                        <div class="sidebar-widget-option">
                                            <a href="#" style="background-color: #ffffff;"></a>
                                            White <span>(3)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-block size">
                                <h3 class="widget-title"><a data-toggle="collapse" href="#size" role="button"
                                        aria-expanded="true" aria-controls="size">Size</a></h3>
                                <div id="size" class="sidebar-widget-option-wrapper collapse show">
                                    <div class="size-inner">
                                        <div class="sidebar-widget-option">
                                            <input type="checkbox" id="size-1">
                                            <label for="size-1">L <span>(4)</span></label>
                                        </div>
                                        <div class="sidebar-widget-option">
                                            <input type="checkbox" id="size-2">
                                            <label for="size-2">XS <span>(3)</span></label>
                                        </div>
                                        <div class="sidebar-widget-option">
                                            <input type="checkbox" id="size-3">
                                            <label for="size-3">S <span>(3)</span></label>
                                        </div>
                                        <div class="sidebar-widget-option">
                                            <input type="checkbox" id="size-4">
                                            <label for="size-4">Xl <span>(3)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.shop-brands-filter .shop-checkbox-filter .shop-checkbox .shop-checkbox__control input').click(
                function(
                    e) {
                    var selectedBrands = $('.brandCheckBox:checked').map(function() {
                        return this.value;
                    }).get();
                    var urlParams = new URLSearchParams(window.location.search);

                    var chatacter = '?';
                    // if (get_exist_params()) {
                    //     chatacter = '&';
                    // }
                    var params = [];
                    if (selectedBrands.length > 0) {
                        params.push('brands=' + selectedBrands.join('%'));
                    }

                    var newURL = window.location.pathname + chatacter + params.toString();
                    window.history.pushState({
                        path: newURL
                    }, '', newURL);
                    $.ajax({
                        url: newURL,
                        method: "GET",
                        // data: {
                        //     product_id: productId,
                        //     quantity: quantity,
                        //     skuId: skuId,
                        //     _token: csrfToken,
                        // },
                        success: function(response) {
                            // Kiểm tra kết quả từ controller
                            if (response.success) {

                            } else {
                                // Nếu có lỗi, hiển thị thông báo lỗi từ server
                                alert(response.error);
                            }
                        },
                        error: function(error) {
                            // Xử lý lỗi nếu có
                            console.error("Error adding product to cart:", error);
                        },
                    });


                });
        });

        function get_exist_params() {
            const queryString = window.location.search;
            return queryString;
        }
    </script>
@endpush
