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
                                <div class="ttbanner-img"><a href="#"><img
                                            src="{{ asset('frontpage/img/banner/banner-04.jpg') }}" alt="banner-04"></a>
                                </div>
                            </div>
                            <div class="ttbanner2 ttbanner col-sm-6">
                                <div class="ttbanner-img"><a href="#"><img
                                            src="{{ asset('frontpage/img/banner/banner-05.jpg') }}" alt="banner-05"></a>
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
                <a href="#" class="js_panel__close">
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
        function loadCartItems() {
            var cartItems = JSON.parse(localStorage.getItem('cart_items'));
            $.ajax({
                url: '/api/get-cart-items',
                method: 'POST',
                data: {
                    cartItems: cartItems
                },
                success: function(response) {
                    // Xử lý dữ liệu nhận được từ server
                    // Ví dụ: hiển thị thông tin sản phẩm trên sidebar
                    var cartItemsHTML = '';
                    let totalPrice = 0;
                    $.each(response, function(index, product) {
                        totalPrice += parseInt(product.price);
                        cartItemsHTML += `
                    <div class="cart__item productid-${product.id}" data-id="${product.id}">
                            <div class="cart_item__img">
                                <img src="${product.image}" alt="${product.name}"
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
                    $('#listCartItems').html(cartItemsHTML);
                    $('#cart-sidebar .panel__content .cart-collaterals .cart-subtotal .cart-total-price').html(
                        totalPrice);
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi nếu có
                    console.log('Error:', error);
                }
            });
        }
        var swiper = new Swiper(".smartblog-content", {
            slidesPerView: 3,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        function getProductInfo(productId) {
            return fetch(`/api/products/${productId}`)
                .then(response => response.json())
                .catch(error => console.error(error));
        }

        function renderCartItems() {
            // Lấy danh sách sản phẩm từ localStorage
            var cartItems = JSON.parse(localStorage.getItem('cart_items')) || [];

            // Tạo biến để lưu các HTML template của sản phẩm
            var cartItemsHTML = '';

            // Duyệt qua từng sản phẩm và tạo template cho mỗi sản phẩm
            cartItems.forEach(function(item) {
                // Lấy thông tin của sản phẩm từ cơ sở dữ liệu qua API
                getProductInfo(item.product_id).then(productInfo => {
                    // Tạo template HTML cho mỗi sản phẩm và thêm vào biến cartItemsHTML

                    cartItemsHTML +=
                        `
                        <div class="cart-item">
                            <div class="img">
                                <img src="${productInfo.image}" alt="${productInfo.name}">
                            </div>
                            <div class="item-info">
                            <h5>${productInfo.name}</h5>
                            <p>Quantity: ${item.quantity}</p>
                            <p>Price: ${productInfo.price}</p>
                            </div>
                            <button class="remove-item" data-product="${item.product_id}">Remove</button>
                        </div>
                    `;

                    // Hiển thị danh sách sản phẩm trong sidebar
                    document.getElementById('listCartItems').innerHTML = cartItemsHTML;
                });
            });
        }
        $(".addToCartButton").click(function() {
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
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    // Kiểm tra kết quả từ controller
                    if (response.success) {
                        // Nếu thành công, lưu thông tin vào LocalStorage
                        var cartItem = {
                            'product_id': productId,
                            'quantity': quantity
                        };
                        var cartItems = JSON.parse(localStorage.getItem('cart_items')) || [];
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
                        localStorage.setItem('cart_items', JSON.stringify(cartItems));
                        $("#cart-sidebar").addClass("active");
                        loadCartItems();
                        // Hiển thị thông báo thành công
                        alert(response.message);
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
        $(document).ready(function() {
            // Xử lý sự kiện click vào nút xóa sản phẩm (sử dụng delegation)
            $(document).on("click", ".cart_item__trash", function() {
                // Tìm đối tượng cart_item__trash_popover trong cùng một cart_item
                var popover = $(this).siblings(".cart_item__trash_popover");

                // Thêm class 'active' vào cart_item__trash_popover
                popover.addClass("active");
            });

            // Xử lý sự kiện click vào nút "Hủy" trong popover (sử dụng delegation)
            $(document).on("click", ".cart_item__trash_popover .js_cart_item__trash_agree", function() {
                // Tìm đối tượng cart_item liên quan
                var cartItem = $(this).closest(".cart__item");
                // Lấy productId từ thuộc tính data-id
                var productId = cartItem.data("id");

                // Lấy danh sách sản phẩm từ local storage
                var cartItems = JSON.parse(localStorage.getItem("cart_items")) || [];

                // Tìm sản phẩm cần xóa trong danh sách
                var indexToRemove = cartItems.findIndex(function(item) {
                    return item.product_id === productId;
                });

                if (indexToRemove !== -1) {
                    // Lấy thông tin sản phẩm cần xóa
                    var itemToRemove = cartItems[indexToRemove];
                    var quantityToRemove = itemToRemove.quantity;
                    var priceToRemove = itemToRemove.price;

                    // Xóa sản phẩm khỏi danh sách
                    cartItems.splice(indexToRemove, 1);

                    // Lưu danh sách sản phẩm mới vào local storage
                    localStorage.setItem("cart_items", JSON.stringify(cartItems));

                    // Xóa phần tử cart_item khỏi DOM
                    cartItem.remove();

                    // Tính lại tổng giá trị giỏ hàng
                    var totalPrice = 0;
                    cartItems.forEach(function(item) {
                        totalPrice += item.quantity * item.price;
                    });

                    // Cập nhật tổng giá trị giỏ hàng trong phần tổng tiền
                    $('#cart-sidebar .panel__content .cart-collaterals .cart-subtotal .cart-total-price')
                        .html(totalPrice);
                }
            });
            $(document).on("click", ".cart_item__trash_popover .js_cart_item__trash_close", function() {
                $(this).closest(".cart_item__trash_popover").removeClass("active");
            });
            $(document).on("click", ".btn-plus", function() {
                handleQuantityChange($(this), "increase");
            });

            // Xử lý sự kiện click vào nút giảm số lượng (sử dụng delegation)
            $(document).on("click", ".btn-minus", function() {
                handleQuantityChange($(this), "decrease");
            });

            // Hàm xử lý thay đổi số lượng sản phẩm
            function handleQuantityChange(button, action) {
                // Tìm đối tượng cart_item liên quan
                var cartItem = button.closest(".cart__item");
                // Lấy productId từ thuộc tính data-id
                var productId = cartItem.data("id");

                // Lấy danh sách sản phẩm từ local storage
                var cartItems = JSON.parse(localStorage.getItem("cart_items")) || [];

                // Tìm sản phẩm cần thay đổi số lượng trong danh sách
                var indexToUpdate = cartItems.findIndex(function(item) {
                    return item.product_id === productId;
                });

                if (indexToUpdate !== -1) {
                    // Lấy thông tin sản phẩm cần thay đổi số lượng
                    var itemToUpdate = cartItems[indexToUpdate];

                    // Thay đổi số lượng tùy theo action
                    if (action === "increase") {
                        itemToUpdate.quantity++;
                    } else if (action === "decrease") {
                        if (itemToUpdate.quantity > 1) {
                            itemToUpdate.quantity--;
                        }
                    }

                    // Lưu danh sách sản phẩm mới vào local storage
                    localStorage.setItem("cart_items", JSON.stringify(cartItems));

                    // Cập nhật số lượng sản phẩm trong DOM
                    cartItem.find(".quantity-number .qty").text(itemToUpdate.quantity);

                    // Tính lại tổng giá trị giỏ hàng
                    var totalPrice = 0;
                    cartItems.forEach(function(item) {
                        totalPrice += item.quantity * item.price;
                    });


                    // Cập nhật tổng giá trị giỏ hàng trong phần tổng tiền
                    $('#cart-sidebar .panel__content .cart-collaterals .cart-subtotal .cart-total-price').html(
                        totalPrice);
                }
            }
        });
    </script>
@endpush
