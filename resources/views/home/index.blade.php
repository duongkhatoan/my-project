@extends('layout_frontpage.master')
@section('content')
    <main>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="slider-wrapper my-40 my-sm-25 float-left w-100">
            <div class="ttloading-bg"></div>
            <div class="slider slider-for owl-carousel">
                <div>
                    <a href="#">
                        <img src="{{ asset('frontpage/img/slider/sample-05.jpg') }}" alt="" />
                    </a>
                    <div class="slider-content-wrap center effect_top">
                        <div class="slider-title mb-20 text-capitalize float-left w-100">on rayon fabrics</div>
                        <div class="slider-subtitle mb-50 text-capitalize float-left w-100">exclusive offers</div>
                        <div class="slider-button text-uppercase float-left w-100"><a href=" #">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('frontpage/img/slider/sample-06.jpg') }}" alt="" />
                    </a>
                    <div class="slider-content-wrap center effect_bottom">
                        <div class="slider-title mb-20 text-capitalize float-left w-100">on rayon fabrics</div>
                        <div class="slider-subtitle mb-50 text-capitalize float-left w-100">new trends</div>
                        <div class="slider-button text-uppercase float-left w-100"><a href=" #">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider -->

        <div class="main-content">
            <!-- Banner -->
            <div id="ttcmsbanner" class="ttcmsbanner my-40 my-sm-25">
                <div class="ttbannerblock container text-center">
                    <div class="row">
                        <div class="ttbanner1 ttbanner col-sm-6 col-xs-6 left-to-right hb-animate-element">
                            <div class="ttbanner-img m-0">
                                <a href="#">
                                    <img src="{{ asset('frontpage/img/banner/cms-05.jpg') }}" alt="cms-05">
                                </a>
                            </div>
                        </div>
                        <div class="ttbanner2 ttbanner col-sm-6 col-xs-6 right-to-left hb-animate-element">
                            <div class="ttbanner-img m-0">
                                <a href="#">
                                    <img src="{{ asset('frontpage/img/banner/cms-06.jpg') }}" alt="cms-06">
                                </a>
                            </div>
                        </div>
                        <div class="ttbanner3 ttbanner col-sm-12 col-xs-12 right-to-left hb-animate-element mt-30">
                            <div class="ttbanner-img m-0">
                                <a href="#">
                                    <img src="{{ asset('frontpage/img/banner/cms-07.jpg') }}" alt="cms-07">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product tab -->
            <div id="main">
                {{-- <div id="hometab" class="home-tab my-40 my-sm-25 bottom-to-top hb-animate-element">
                    <div class="container">
                        <div class="row">
                            <div class="tt-title d-inline-block float-none w-100 text-center">Trending Products</div>
                            <div class="tabs">
                                <ul class="nav nav-tabs justify-content-center">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="#ttfeatured-main" id="featured-tab">
                                            <div class="tab-title">Featured</div>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ttnew-main"
                                            id="new-tab">
                                            <div class="tab-title">Latest</div>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ttbestseller-main"
                                            id="bestseller-tab">
                                            <div class="tab-title">Bestseller</div>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="tab-content float-left w-100">
                                <div class="tab-pane active float-left w-100" id="ttfeatured-main" role="tabpanel"
                                    aria-labelledby="featured-tab">
                                    <section id="ttfeatured" class="ttfeatured-products">
                                        <div class="ttfeatured-content products grid owl-carousel" id="owl1">
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('frontpage/img/products/01.jpg') }}"
                                                                alt="01" />
                                                            <img src="{{ asset('frontpage/img/products/02.jpg') }}"
                                                                alt="02" class="second_image img-responsive" />
                                                        </a>
                                                        <ul id="example1" class="countdown">
                                                            <li><span class="days">00</span>
                                                                <p class="days_text">Days</p>
                                                            </li>
                                                            <li><span class="hours">00</span>
                                                                <p class="hours_text">Hours</p>
                                                            </li>
                                                            <li><span class="minutes">00</span>
                                                                <p class="minutes_text">Minutes</p>
                                                            </li>
                                                            <li><span class="seconds">00</span>
                                                                <p class="seconds_text">Seconds</p>
                                                            </li>
                                                        </ul>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"
                                                                    disabled="disabled"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aliquam quaerat
                                                                    voluptatem</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('frontpage/img/products/02.jpg') }}"
                                                                alt="02" />
                                                            <img src="{{ asset('frontpage/img/products/03.jpg') }}"
                                                                alt="03" class="second_image img-responsive" />
                                                        </a>
                                                        <div class="flags">
                                                            <div class="sale">sale</div>
                                                            <div class="new">new</div>
                                                        </div>
                                                        <ul id="example" class="countdown">
                                                            <li><span class="days">00</span>
                                                                <p class="days_text">Days</p>
                                                            </li>
                                                            <li><span class="hours">00</span>
                                                                <p class="hours_text">Hours</p>
                                                            </li>
                                                            <li><span class="minutes">00</span>
                                                                <p class="minutes_text">Minutes</p>
                                                            </li>
                                                            <li><span class="seconds">00</span>
                                                                <p class="seconds_text">Seconds</p>
                                                            </li>
                                                        </ul>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aspetur autodit
                                                                    autfugit</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('frontpage/img/products/03.jpg') }}"
                                                                alt="03" />
                                                            <img src="{{ asset('frontpage/img/products/04.jpg') }}"
                                                                alt="04" class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">magni dolores
                                                                    eosquies</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('frontpage/img/products/04.jpg') }}"
                                                                alt="04" />
                                                            <img src="{{ asset('frontpage/img/products/05.jpg') }}"
                                                                alt="05" class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">voluptas nulla
                                                                    pariatur</a>
                                                            </h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('frontpage/img/products/05.jpg') }}"
                                                                alt="05" />
                                                            <img src="{{ asset('frontpage/img/products/06.jpg') }}"
                                                                alt="06" class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aliquam quat
                                                                    voluptatem</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('frontpage/img/products/06.jpg') }}"
                                                                alt="06" />
                                                            <img src="{{ asset('frontpage/img/products/07.jpg') }}"
                                                                alt="07" class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">voluptas sit
                                                                    aspernatur</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('frontpage/img/products/07.jpg') }}"
                                                                alt="07" />
                                                            <img src="{{ asset('frontpage/img/products/08.jpg') }}"
                                                                alt="08" class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"
                                                                    disabled="disabled"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">similique suntin
                                                                    culpaqui</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="{{ asset('frontpage/img/products/08.jpg') }}"
                                                                alt="03" />
                                                            <img src="{{ asset('frontpage/img/products/09.jpg') }}"
                                                                alt="09" class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">suscipit laboriosam
                                                                    nisi</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane float-left w-100" id="ttnew-main" role="tabpanel"
                                    aria-labelledby="new-tab">
                                    <section id="ttnew" class="ttnew-products">
                                        <div class="ttnew-content products grid owl-carousel" id="owl2">
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/01.jpg" alt="01" />
                                                            <img src="img/products/02.jpg" alt="02"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <ul id="example1" class="countdown">
                                                            <li><span class="days">00</span>
                                                                <p class="days_text">Days</p>
                                                            </li>
                                                            <li><span class="hours">00</span>
                                                                <p class="hours_text">Hours</p>
                                                            </li>
                                                            <li><span class="minutes">00</span>
                                                                <p class="minutes_text">Minutes</p>
                                                            </li>
                                                            <li><span class="seconds">00</span>
                                                                <p class="seconds_text">Seconds</p>
                                                            </li>
                                                        </ul>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"
                                                                    disabled="disabled"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aliquam quaerat
                                                                    voluptatem</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/02.jpg" alt="02" />
                                                            <img src="img/products/03.jpg" alt="03"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aspetur autodit
                                                                    autfugit</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/03.jpg" alt="03" />
                                                            <img src="img/products/04.jpg" alt="04"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">magni dolores
                                                                    eosquies</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/04.jpg" alt="04" />
                                                            <img src="img/products/05.jpg" alt="05"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">voluptas nulla
                                                                    pariatur</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/05.jpg" alt="05" />
                                                            <img src="img/products/06.jpg" alt="06"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aliquam quat
                                                                    voluptatem</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/06.jpg" alt="06" />
                                                            <img src="img/products/07.jpg" alt="07"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">voluptas sit
                                                                    aspernatur</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/07.jpg" alt="03" />
                                                            <img src="img/products/08.jpg" alt="08"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"
                                                                    disabled="disabled"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="#">similique suntin culpaqui</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/08.jpg" alt="08" />
                                                            <img src="img/products/09.jpg" alt="09"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">suscipit laboriosam
                                                                    nisi</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane float-left w-100" id="ttbestseller-main" role="tabpanel"
                                    aria-labelledby="bestseller-tab">
                                    <section id="ttbestseller" class="ttbestseller-products">
                                        <div class="ttbestseller-content products grid owl-carousel" id="owl3">
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/01.jpg" alt="01" />
                                                            <img src="img/products/02.jpg" alt="02"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <ul id="example1" class="countdown">
                                                            <li><span class="days">00</span>
                                                                <p class="days_text">Days</p>
                                                            </li>
                                                            <li><span class="hours">00</span>
                                                                <p class="hours_text">Hours</p>
                                                            </li>
                                                            <li><span class="minutes">00</span>
                                                                <p class="minutes_text">Minutes</p>
                                                            </li>
                                                            <li><span class="seconds">00</span>
                                                                <p class="seconds_text">Seconds</p>
                                                            </li>
                                                        </ul>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-toggle="modal" data-target="#product_view"
                                                                    disabled="disabled"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aliquam quaerat
                                                                    voluptatem</a></h4>
                                                        </div>

                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/02.jpg" alt="02" />
                                                            <img src="img/products/03.jpg" alt="03"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aspetur autodit
                                                                    autfugit</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/03.jpg" alt="03" />
                                                            <img src="img/products/04.jpg" alt="04"
                                                                class="second_image img-responsive" />
                                                        </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">magni dolores
                                                                    eosquies</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/04.jpg" alt="03" />
                                                            <img src="img/products/05.jpg" alt="05"
                                                                class="second_image img-responsive" /></a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">voluptas nulla
                                                                    pariatur</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/05.jpg" alt="03" />
                                                            <img src="img/products/06.jpg" alt="06"
                                                                class="second_image img-responsive" /></a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">aliquam quat
                                                                    voluptatem</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/06.jpg" alt="03" /></a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">voluptas sit
                                                                    aspernatur</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/07.jpg" alt="03" /> </a>
                                                        <div class="button-wrapper">
                                                            <div class="button-group text-center">
                                                                <button type="button" class="btn btn-primary btn-cart"
                                                                    data-toggle="modal" data-target="#product_view"
                                                                    disabled="disabled"> <i
                                                                        class="material-icons">shopping_cart</i><span>Add
                                                                        to cart</span></button>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-primary btn-wishlist"><i
                                                                        class="material-icons">favorite</i><span>wishlist</span></a>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-compare"><i
                                                                        class="material-icons">equalizer</i><span>Compare</span></button>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-quickview"
                                                                    data-toggle="modal" data-target="#product_view"><i
                                                                        class="material-icons">visibility</i><span>Quick
                                                                        View</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">similique suntin
                                                                    culpaqui</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-layouts">
                                                <div class="product-thumb">
                                                    <div class="image vertical_scrolling_top_to_bottom">
                                                        <a href="product-details.html">
                                                            <img src="img/products/08.jpg" alt="03" /> </a>
                                                    </div>
                                                    <div class="thumb-description">
                                                        <div class="caption">
                                                            <h4 class="product-title text-capitalize"><a
                                                                    href="product-details.html">suscipit laboriosam
                                                                    nisi</a></h4>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="material-icons off">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="regular-price">$100.00</div>
                                                            <div class="old-price">$150.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div id="ttspecial" class="ttspecial my-40 bottom-to-top hb-animate-element">
                    <div class="container">
                        <div class="row">
                            <div class="tt-title d-inline-block float-none w-100 text-center">special products</div>
                            <div class="ttspecial-content products grid owl-carousel">
                                @foreach ($productSpecial as $product)
                                    <div class="product-layouts">
                                        <div class="product-thumb">
                                            <div class="image vertical_scrolling_top_to_bottom">
                                                <a href="{{ route('product.show', $product) }}">
                                                    <img src="{{ asset($product->image) }}" alt="01" />
                                                    <img src="{{ $product->getFirstMediaUrl('thumbs') }}" alt="02"
                                                        class="second_image img-responsive" />
                                                </a>
                                                <div class="button-wrapper">
                                                    <div class="button-group text-center">
                                                        {{-- <button type="button" class="btn btn-primary btn-cart"
                                                            data-toggle="modal" data-target="#product_view"
                                                            disabled="disabled"><i
                                                                class="material-icons">shopping_cart</i><span>Add to
                                                                cart</span></button> --}}
                                                        <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i
                                                                class="material-icons">favorite</i><span>wishlist</span></a>
                                                        <button type="button" class="btn btn-primary btn-compare"><i
                                                                class="material-icons">equalizer</i><span>Compare</span></button>
                                                        <button type="button" class="btn btn-primary btn-quickview"
                                                            data-toggle="modal" data-target="#product_view"><i
                                                                class="material-icons">visibility</i><span>Quick
                                                                View</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-description">
                                                <div class="caption">
                                                    <h4 class="product-title text-capitalize"><a
                                                            href="product-details.html">{{ $product->name }}</a></h4>
                                                </div>
                                                <div class="rating">
                                                    <div class="product-ratings d-inline-block align-middle">
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="material-icons off">star</i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="material-icons off">star</i></span>
                                                    </div>
                                                </div>
                                                <div class="boxCart">
                                                    <div class="price">
                                                        @if ($product->discount_price > 0)
                                                            <div class="regular-price">{{ $product->discount_price }}đ</div>
                                                            <div class="old-price">{{ $product->sell_price }}đ</div>
                                                        @else
                                                            <div class="regular-price">{{ $product->sell_price }}</div>
                                                        @endif
                                                    </div>


                                                    <div class="addToCart">
                                                        <button class="addToCartButton" data-product="{{ $product->id }}">
                                                            <i class="material-icons">shopping_cart</i>
                                                        </button>
                                                        <div class="quantitySelect">
                                                            <div class="boxQuantity">
                                                                <a class="quantity_decrease">-</a>
                                                                <input type="number" class="quantity_value" value="1">
                                                                <a class="quantity_increase">+</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ttcmstestimonial" class="style2 my-40 my-sm-25 bottom-to-top hb-animate-element">
                    <div class="tttestimonial-content container">
                        <div class="tttestimonial-inner">
                            <div class="row">

                                <ul class="tttestimonial owl-carousel">
                                    <li>
                                        <div class="testimonial-block d-lg-flex d-md-flex d-sm-block align-items-center">
                                            <div class="ttimage col-sm-3 float-left">
                                                <div class="testimonial-image float-left d-flex align-items-center">
                                                    <img alt=""
                                                        src="{{ asset('frontpage/img/banner/user1') }}.jpg" />
                                                    <div class="testimonial-user-title">
                                                        <h4>John Duff</h4>
                                                        <div class="user-designation">SEO & founder</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-content col-sm-9 float-left">
                                                <div class="testimonial-desc">
                                                    <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu
                                                        pulvinar. Nullam mattis arcu convallis, bibendum dui ac, laoreet
                                                        est.Vivamus interdum egastas rutrum. Quisque laoreet ante sed
                                                        placerat imperdiet.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-block d-lg-flex d-md-flex d-sm-block align-items-center">
                                            <div class="ttimage  col-sm-3 float-left">
                                                <div class="testimonial-image float-left d-flex align-items-center">
                                                    <img alt=""
                                                        src="{{ asset('frontpage/img/banner/user1') }}.jpg" />
                                                    <div class="testimonial-user-title">
                                                        <h4>John Duff</h4>
                                                        <div class="user-designation">SEO & founder</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-content col-sm-9 float-left">
                                                <div class="testimonial-desc">
                                                    <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu
                                                        pulvinar. Nullam mattis arcu convallis, bibendum dui ac, laoreet
                                                        est.Vivamus interdum egastas rutrum. Quisque laoreet ante sed
                                                        placerat imperdiet.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-block d-lg-flex d-md-flex d-sm-block align-items-center">
                                            <div class="ttimage col-sm-3 float-left">
                                                <div class="testimonial-image float-left d-flex align-items-center">
                                                    <img alt=""
                                                        src="{{ asset('frontpage/img/banner/user1') }}.jpg" />
                                                    <div class="testimonial-user-title">
                                                        <h4>John Duff</h4>
                                                        <div class="user-designation">SEO & founder</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-content col-sm-9 float-left">
                                                <div class="testimonial-desc">
                                                    <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu
                                                        pulvinar. Nullam mattis arcu convallis, bibendum dui ac, laoreet
                                                        est.Vivamus interdum egastas rutrum. Quisque laoreet ante sed
                                                        placerat imperdiet.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ttcmssubbanner" class="ttcmssubbanner my-40 my-sm-25 bottom-to-top hb-animate-element">
                    <div class="ttbannerblock container">
                        <div class="row">
                            <div class="ttbanner1 ttbanner col-sm-6 col-xs-6">
                                <div class="ttbanner-img">
                                    <a href="#"><img src="{{ asset('frontpage/img/banner/banner-04.jpg') }}"
                                            alt="banner-04">
                                    </a>
                                </div>
                            </div>
                            <div class="ttbanner2 ttbanner col-sm-6">
                                <div class="ttbanner-img">
                                    <a href="#"><img src="{{ asset('frontpage/img/banner/banner-05.jpg') }}"
                                            alt="banner-05">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ttsmartblog" class="style2 my-40 my-sm-25 bottom-to-top hb-animate-element">
                    <div class="tt-title d-inline-block float-none w-100 text-center text-capitalize">latest news
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="swiper smartblog-content">
                                <div class="swiper-wrapper">
                                    @foreach ($posts as $post)
                                        <div class="swiper-slide ttblog">
                                            <div class="item">
                                                <div class="ttblog_image_holder">
                                                    <a href="#">
                                                        <img src="{{ $post->image }}" alt="blog-01">
                                                    </a>
                                                    <span class="blogicons">
                                                        <a title="Click to view Full Image" href="{{ $post->image }}"
                                                            data-lightbox="example-set" class="icon zoom"><i
                                                                class="material-icons">search</i></a>
                                                    </span>
                                                </div>
                                                <div class="blog-content-wrap float-left w-100">
                                                    <div class="blog_inner">
                                                        <h4 class="blog-title"><span>{{ $post->title }}</span></h4>
                                                        <div class="blog-desc">{!! $post->excerpt !!}</div>
                                                        <div class="read-more text-capitalize">
                                                            <a title="Click to view Read More" class="readmore">read
                                                                more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="ttbrandlogo" class="my-40 my-sm-25 bottom-to-top hb-animate-element">
                    <div class="container">
                        <div class="tt-brand owl-carousel">
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontpage/img/logos/brand-logo-01.png') }}"
                                        alt="brand-logo-01"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontpage/img/logos/brand-logo-02.png') }}"
                                        alt="brand-logo-02"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontpage/img/logos/brand-logo-03.png') }}"
                                        alt="brand-logo-03"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontpage/img/logos/brand-logo-04.png') }}"
                                        alt="brand-logo-04"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontpage/img/logos/brand-logo-05.png') }}"
                                        alt="brand-logo-05"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontpage/img/logos/brand-logo-06.png') }}"
                                        alt="brand-logo-06"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontpage/img/logos/brand-logo-07.png') }}"
                                        alt="brand-logo-07"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <div class="panel--sidebar" id="cart-sidebar">
        <div class="panel__header">
            <h3>Shopping Cart</h3>
            <div class="panel__close">
                <a class="js_panel__close">
                    <i class="fa-solid fa-xmark"></i>
                </a>
            </div>
        </div>
        <div class="panel__content">
            <div class="page-cart page-cart-content">
                <div class="loading ng-star-inserted">
                    <div class="vs-loading__load vs-loading--default">
                        <div class="lds">
                            <div class="lds__1"></div>
                            <div class="lds__2"></div>
                        </div>
                    </div>
                    <div class="cart-content page-cart-box">
                        <div class="page-cart-tbody" id="listCartItems">

                        </div>
                    </div>
                    <div class="cart-collaterals page-cart-right">
                        <table cellspacing="0" class="page-cart-box table shop_table_responsive">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Thành Tiền</th>
                                    <td data-title="Thành tiền"><span class="cart-total-price">672,000,000</span>đ</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        <div class="cart-button">
                            <a class="btn btn-default pull-left" href="san-pham">MUA THÊM</a>
                            <a class="btn btn-red pull-right" href="thanh-toan">THANH TOÁN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        var swiper = new Swiper(".smartblog-content", {
            slidesPerView: 3,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
