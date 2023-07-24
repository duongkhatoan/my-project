@extends('layout_frontpage.master')
@section('content')
    <div class="boxMargin">
        <x-product-detail :product="$product" />
    </div>
@endsection
