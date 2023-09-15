@extends('layout_frontpage.master')

@section('content')
    <div class="cart-area table-area pt-110 pb-95 float-left w-100">
        <div class="container">
            <input type="hidden" id="totalHiddenPrice" value="">
            <div class="row page-cart">
                <div class="col-md-8">
                    <div class="loading ng-star-inserted " id="" style="display: none;">
                        <div class="vs-loading__load vs-loading--default">
                            <div class="lds">
                                <div class="lds__1"></div>
                                <div class="lds__2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-error"></div>
                    <div class="cart-content page-cart-box">
                        <div class="page-cart-tbody" id="listCartItems">

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart-collaterals page-cart-right">
                        <table cellspacing="0" class="page-cart-box table shop_table_responsive">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Tổng tiền</th>
                                    <td data-title="Thành tiền"><span class="cart-total-price"></span>đ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('js')
    <script>
        loadCartItems();
    </script>
@endpush
