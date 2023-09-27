<div class="product-thumb">
    <div class="image zoom">
        <a href="{{ route('product.show', $product) }}">
            <img src="{{ asset($product->image) }}" alt="01" />
            <img src="{{ $product->getFirstMediaUrl('thumbs') }}" alt="02" class="second_image img-responsive" />
        </a>
    </div>
    <div class="thumb-description">
        <div class="caption">
            <h4 class="product-title text-capitalize"><a href="product-details.html">aliquam
                    quaerat voluptatem</a></h4>
        </div>
        <div class="rating">
            <div class="product-ratings d-inline-block align-middle">
                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
            </div>
        </div>
        @if (!$product->variants->isEmpty())
            <div class="price variant">
                <div class="regular-price">{{ $product->price_range }}</div>
            </div>
        @else
            <div class="price">
                <div class="regular-price">{{ $product->actual_price }}</div>
                @if ($product->sell_price)
                    <div class="old-price">{{ $product->sell_price }}</div>
                @endif
            </div>
        @endif

        <div class="button-wrapper">
            <div class="button-group text-center">
                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"
                    disabled><i class="material-icons">shopping_cart</i><span>Out of
                        stock</span></button>
                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i
                        class="material-icons">favorite</i><span>wishlist</span></a>
                <button type="button" class="btn btn-primary btn-compare"><i
                        class="material-icons">equalizer</i><span>Compare</span></button>
                <button type="button" class="btn btn-primary btn-quickview" data-toggle="modal"
                    data-target="#product_view"><i class="material-icons">visibility</i><span>Quick
                        View</span></button>
            </div>
        </div>
    </div>
</div>
