@extends('layout_frontpage.master')
@section('content')
    <div class="main-content w-100 float-left">
        <div class="container">
            <div class="row">
                <div class="content-wrapper col-xl-9 col-lg-9 order-lg-2">
                    <div class="block-category mb-30 w-100 float-left">
                        <div class="category-cover">
                            <img src="img/banner/category-banner.png" alt="category-banner" />
                        </div>
                        <div class="title-category text-capitalize">women</div>
                        <div class="category-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                            sagittis,
                            magna et euismod auctor, mauris ipsum interdum risus, a varius augue lacus id diam. Mauris
                            maximus,
                            ipsum at gravida sodales, purus tellus tempor eros, a feugiat elit odio in nunc.</div>
                    </div>
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
                        <div class="tab-pane fade list text-left" id="list" role="tabpanel">
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/01.jpg" alt="01" />
                                            <img src="img/products/02.jpg" alt="02"
                                                class="second_image img-responsive" />
                                        </a>
                                        <ul class="countdown countdown4 text-center">
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
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-7 col-md-8 position-static text-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a
                                                    href="product-details.html">aliquam
                                                    quaerat voluptatem</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            </div>
                                        </div>

                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus arcu
                                            turpis, quis
                                            sagittis orci dictum non. Etiam id eleifend erat. Donec sit amet nisl id nisi
                                            laoreet
                                            viverra in ac nibh. </div>

                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="color-option d-flex align-items-center float-left w-100">
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="tt-pink" href="#" title="Pink"></a>
                                                </li>
                                                <li>
                                                    <a class="tt-blue" href="#" title="Blue"></a>
                                                </li>
                                                <li>
                                                    <a class="tt-yellow" href="#" title="Yellow"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i
                                                        class="material-icons">shopping_cart</i><span>out of
                                                        stock</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/02.jpg" alt="02" />
                                            <img src="img/products/03.jpg" alt="03"
                                                class="second_image img-responsive" /></a>
                                        <ul class="countdown countdown5 text-center">
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
                                    </div>
                                    <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a
                                                    href="product-details.html">aspetur
                                                    autodit autfugit</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Integer erat purus, semper pharetra leo tincidunt, commodo vestibulum nulla. Nam
                                            ultricies nisl sed maximus rhoncus. Aliquam et ipsum pulvinar, rutrum erat nec,
                                            aliquet
                                            nisl. </div>

                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/03.jpg" alt="03" />
                                            <img src="img/products/04.jpg" alt="04"
                                                class="second_image img-responsive" />
                                        </a>
                                    </div>
                                    <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">magni
                                                    dolores
                                                    eosquies</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Suspendisse eu mi ullamcorper, volutpat leo at, consectetur arcu. Morbi eget
                                            tempor sem,
                                            sed auctor sem. Nullam sodales scelerisque nisi, eu pellentesque felis euismod
                                            malesuada. </div>

                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/04.jpg" alt="04" />
                                            <img src="img/products/05.jpg" alt="05"
                                                class="second_image img-responsive" />
                                        </a>
                                    </div>
                                    <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a
                                                    href="product-details.html">voluptas
                                                    nulla pariatur</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Phasellus euismod nulla nulla, sit amet tristique tellus condimentum ut. Aenean
                                            posuere
                                            lacus eu ultrices lobortis. Duis eget est arcu. Praesent rhoncus efficitur augue
                                            nec
                                            porttitor. </div>

                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/05.jpg" alt="05" />
                                            <img src="img/products/06.jpg" alt="06"
                                                class="second_image img-responsive" />
                                        </a>
                                    </div>
                                    <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a
                                                    href="product-details.html">aliquam quat
                                                    voluptatem</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Sed nisi elit, gravida eu risus sit amet, hendrerit tristique sapien. Proin
                                            consequat
                                            augue lectus, eu tempor orci congue quis. Sed dapibus non enim sed tristique.
                                            Donec
                                            commodo velit at odio gravida. </div>

                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/06.jpg" alt="06" />
                                            <img src="img/products/07.jpg" alt="07"
                                                class="second_image img-responsive" />
                                        </a>
                                    </div>
                                    <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a
                                                    href="product-details.html">voluptas sit
                                                    aspernatur</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Vestibulum semper tincidunt eros, ut pulvinar felis. Maecenas tincidunt mi et
                                            dui
                                            dignissim, in feugiat nisl scelerisque. Aenean et nisi turpis. Cras in nisi
                                            vitae magna
                                            feugiat placerat id sit amet mauris. </div>

                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/07.jpg" alt="07" />
                                            <img src="img/products/08.jpg" alt="08"
                                                class="second_image img-responsive" />
                                        </a>
                                    </div>
                                    <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a
                                                    href="product-details.html">similique
                                                    suntin culpaqui</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Phasellus ut felis eu libero semper elementum. Maecenas sit amet scelerisque
                                            ante. Nam
                                            ultrices enim sed lacus gravida condimentum. Proin at malesuada nibh. </div>

                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i
                                                        class="material-icons">shopping_cart</i><span>out of
                                                        stock</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/08.jpg" alt="08" />
                                            <img src="img/products/09.jpg" alt="09"
                                                class="second_image img-responsive" />
                                        </a>
                                    </div>
                                    <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a
                                                    href="product-details.html">suscipit
                                                    laboriosam nisi</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Duis tincidunt ante urna, sit amet vestibulum felis placerat in. Duis a tortor
                                            et odio
                                            consequat congue. Mauris euismod augue tempor, sagittis nisl sed, pretium purus.
                                        </div>

                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade sort text-left" id="sort-view" role="tabpanel">
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/01.jpg" alt="01" />
                                            <img src="img/products/02.jpg" alt="02"
                                                class="second_image img-responsive" />
                                        </a>
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                        <div class="sort-title col-md-5 col-sm-7 float-left">
                                            <div class="caption">
                                                <h4 class="product-title text-capitalize"><a
                                                        href="product-details.html">aliquam
                                                        quaerat voluptatem</a></h4>
                                            </div>

                                            <div class="rating mb-10">
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
                                            <div class="description mb-10">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus arcu
                                                turpis,
                                                quis sagittis orci dictum non. Etiam id eleifend erat. Donec sit amet nisl
                                                id nisi
                                                laoreet viverra in ac nibh. </div>
                                            <div class="color-option d-flex align-items-center float-left w-100">
                                                <ul class="color-categories">
                                                    <li>
                                                        <a class="tt-pink" href="#" title="Pink"></a>
                                                    </li>
                                                    <li>
                                                        <a class="tt-blue" href="#" title="Blue"></a>
                                                    </li>
                                                    <li>
                                                        <a class="tt-yellow" href="#" title="Yellow"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div
                                            class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                            <div class="price">
                                                <div class="regular-price">$100.00</div>
                                                <div class="old-price">$150.00</div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i
                                                        class="material-icons">shopping_cart</i><span>out of
                                                        stock</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/02.jpg" alt="02" />
                                            <img src="img/products/03.jpg" alt="03"
                                                class="second_image img-responsive" /></a>
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                        <div class="sort-title col-md-5 col-sm-7 float-left">
                                            <div class="caption">
                                                <h4 class="product-title text-capitalize"><a
                                                        href="product-details.html">aspetur
                                                        autodit autfugit</a></h4>
                                            </div>
                                            <div class="rating mb-10">
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
                                            <div class="description mb-10">
                                                Integer erat purus, semper pharetra leo tincidunt, commodo vestibulum nulla.
                                                Nam
                                                ultricies nisl sed maximus rhoncus. Aliquam et ipsum pulvinar, rutrum erat
                                                nec,
                                                aliquet nisl. </div>
                                        </div>
                                        <div
                                            class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                            <div class="price">
                                                <div class="regular-price">$100.00</div>
                                                <div class="old-price">$150.00</div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/03.jpg" alt="03" />
                                            <img src="img/products/04.jpg" alt="04"
                                                class="second_image img-responsive" />
                                        </a>
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                        <div class="sort-title col-md-5 col-sm-7 float-left">
                                            <div class="caption">
                                                <h4 class="product-title text-capitalize"><a
                                                        href="product-details.html">magni
                                                        dolores eosquies</a></h4>
                                            </div>
                                            <div class="rating mb-10">
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
                                            <div class="description mb-10">
                                                Suspendisse eu mi ullamcorper, volutpat leo at, consectetur arcu. Morbi eget
                                                tempor
                                                sem, sed auctor sem. Nullam sodales scelerisque nisi, eu pellentesque felis
                                                euismod
                                                malesuada. </div>
                                        </div>
                                        <div
                                            class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                            <div class="price">
                                                <div class="regular-price">$100.00</div>
                                                <div class="old-price">$150.00</div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/04.jpg" alt="04" />
                                            <img src="img/products/05.jpg" alt="05"
                                                class="second_image img-responsive" /> </a>
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                        <div class="sort-title col-md-5 col-sm-7 float-left">
                                            <div class="caption">
                                                <h4 class="product-title text-capitalize"><a
                                                        href="product-details.html">voluptas nulla pariatur</a></h4>
                                            </div>
                                            <div class="rating mb-10">
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
                                            <div class="description mb-10">
                                                Phasellus euismod nulla nulla, sit amet tristique tellus condimentum ut.
                                                Aenean
                                                posuere lacus eu ultrices lobortis. Duis eget est arcu. Praesent rhoncus
                                                efficitur
                                                augue nec porttitor. </div>
                                        </div>
                                        <div
                                            class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                            <div class="price">
                                                <div class="regular-price">$100.00</div>
                                                <div class="old-price">$150.00</div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/05.jpg" alt="05" />
                                            <img src="img/products/06.jpg" alt="06"
                                                class="second_image img-responsive" /> </a>
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                        <div class="sort-title col-md-5 col-sm-7 float-left">
                                            <div class="caption">
                                                <h4 class="product-title text-capitalize"><a
                                                        href="product-details.html">aliquam
                                                        quat voluptatem</a></h4>
                                            </div>
                                            <div class="rating mb-10">
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
                                            <div class="description mb-10">
                                                Sed nisi elit, gravida eu risus sit amet, hendrerit tristique sapien. Proin
                                                consequat augue lectus, eu tempor orci congue quis. Sed dapibus non enim sed
                                                tristique. Donec commodo velit at odio gravida. </div>
                                        </div>
                                        <div
                                            class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                            <div class="price">
                                                <div class="regular-price">$100.00</div>
                                                <div class="old-price">$150.00</div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/06.jpg" alt="06" />
                                            <img src="img/products/07.jpg" alt="07"
                                                class="second_image img-responsive" /> </a>
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                        <div class="sort-title col-md-5 col-sm-7 float-left">
                                            <div class="caption">
                                                <h4 class="product-title text-capitalize"><a
                                                        href="product-details.html">voluptas sit aspernatur</a></h4>
                                            </div>
                                            <div class="rating mb-10">
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
                                            <div class="description mb-10">
                                                Vestibulum semper tincidunt eros, ut pulvinar felis. Maecenas tincidunt mi
                                                et dui
                                                dignissim, in feugiat nisl scelerisque. Aenean et nisi turpis. Cras in nisi
                                                vitae
                                                magna feugiat placerat id sit amet mauris. </div>
                                        </div>

                                        <div
                                            class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                            <div class="price">
                                                <div class="regular-price">$100.00</div>
                                                <div class="old-price">$150.00</div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/07.jpg" alt="07" />
                                            <img src="img/products/08.jpg" alt="08"
                                                class="second_image img-responsive" /> </a>
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                        <div class="sort-title col-md-5 col-sm-7 float-left">
                                            <div class="caption">
                                                <h4 class="product-title text-capitalize"><a
                                                        href="product-details.html">similique suntin culpaqui</a></h4>
                                            </div>
                                            <div class="rating mb-10">
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
                                            <div class="description mb-10">
                                                Phasellus ut felis eu libero semper elementum. Maecenas sit amet scelerisque
                                                ante.
                                                Nam ultrices enim sed lacus gravida condimentum. Proin at malesuada nibh.
                                            </div>
                                        </div>
                                        <div
                                            class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                            <div class="price">
                                                <div class="regular-price">$100.00</div>
                                                <div class="old-price">$150.00</div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i
                                                        class="material-icons">shopping_cart</i><span>out of
                                                        stock</span></button>
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
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb row">
                                    <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                        <a href="product-details.html" class="d-block position-relative">
                                            <img src="img/products/08.jpg" alt="08" />
                                            <img src="img/products/09.jpg" alt="09"
                                                class="second_image img-responsive" /> </a>
                                    </div>
                                    <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                        <div class="sort-title col-md-5 col-sm-7 float-left">
                                            <div class="caption">
                                                <h4 class="product-title text-capitalize"><a
                                                        href="product-details.html">suscipit laboriosam nisi</a></h4>
                                            </div>
                                            <div class="rating mb-10">
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
                                            <div class="description mb-10">
                                                Duis tincidunt ante urna, sit amet vestibulum felis placerat in. Duis a
                                                tortor et
                                                odio consequat congue. Mauris euismod augue tempor, sagittis nisl sed,
                                                pretium
                                                purus. </div>
                                        </div>
                                        <div
                                            class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                            <div class="price">
                                                <div class="regular-price">$100.00</div>
                                                <div class="old-price">$150.00</div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart"
                                                    data-target="#cart-pop" data-toggle="modal"><i
                                                        class="material-icons">shopping_cart</i><span>Add to
                                                        cart</span></button>
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
                                </div>
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
                            <div class="sidebar-block categories">
                                <h3 class="widget-title"><a data-toggle="collapse" href="#categoriesMenu"
                                        role="button" aria-expanded="true"
                                        aria-controls="categoriesMenu">Categories</a></h3>
                                <div id="categoriesMenu" class="expand-lg collapse show">
                                    <div class="nav nav-pills flex-column mt-4"> <a href="#"
                                            class="nav-link d-flex justify-content-between mb-2 "><span>Jackets</span><span
                                                class="sidebar-badge"> 120</span></a>
                                        <div class="nav nav-pills flex-column ml-3">
                                            <a href="#" class="nav-link mb-2">Lorem ipsum</a>
                                            <a href="#" class="nav-link mb-2">Donec vitae</a>
                                        </div>
                                        <a href="#"
                                            class="nav-link d-flex justify-content-between mb-2 active"><span>Jeans &amp;
                                                chinos</span><span class="sidebar-badge"> 55</span></a>
                                        <div class="nav nav-pills flex-column ml-3">
                                            <a href="#" class="nav-link mb-2">Dolor</a>
                                            <a href="#" class="nav-link mb-2">Sit amet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-block price">
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

                            </div>
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
                    <div class="sidebar-left-banner left-sidebar w-100 float-left">
                        <div class="ttleftbanner">
                            <a href="#">
                                <img src="img/banner/left-banner.jpg" alt="left-banner" />
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-product left-sidebar w-100 float-left">
                        <div class="title">
                            <a data-toggle="collapse" href="#sidebar-product" aria-expanded="false"
                                aria-controls="sidebar-product" class="d-lg-none block-toggler">sale products</a>
                        </div>
                        <div id="sidebar-product" class="collapse w-100 float-left">
                            <div class="sidebar-block sale ">
                                <h3 class="widget-title text-capitalize">sale products</h3>
                                <div class="products owl-carousel">
                                    <div class="sale-col">
                                        <div class="product-layouts">
                                            <div class="product-thumb">
                                                <div class="image col-sm-4 float-left">
                                                    <a href="#">
                                                        <img src="img/products/01.jpg" alt="01" /> </a>
                                                </div>
                                                <div class="thumb-description col-sm-8 text-left float-left">
                                                    <div class="caption">
                                                        <h4 class="product-title text-capitalize"><a
                                                                href="product-details.html">aliquam quaerat voluptatem</a>
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
                                                    <div class="button-wrapper">
                                                        <div class="button-group text-center">
                                                            <button type="button" class="btn btn-primary btn-cart"
                                                                data-target="#cart-pop" data-toggle="modal"><i
                                                                    class="material-icons">shopping_cart</i><span>Add to
                                                                    cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layouts">
                                            <div class="product-thumb">
                                                <div class="image col-sm-4 float-left">
                                                    <a href="#">
                                                        <img src="img/products/02.jpg" alt="01" /> </a>
                                                </div>
                                                <div class="thumb-description col-sm-8 text-left float-left">
                                                    <div class="caption">
                                                        <h4 class="product-title text-capitalize"><a
                                                                href="product-details.html">aspetur autodit autfugit</a>
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
                                                    <div class="button-wrapper">
                                                        <div class="button-group text-center">
                                                            <button type="button" class="btn btn-primary btn-cart"
                                                                data-target="#cart-pop" data-toggle="modal"><i
                                                                    class="material-icons">shopping_cart</i><span>Add to
                                                                    cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layouts">
                                            <div class="product-thumb">
                                                <div class="image col-sm-4 float-left">
                                                    <a href="#">
                                                        <img src="img/products/03.jpg" alt="03" /> </a>
                                                </div>
                                                <div class="thumb-description col-sm-8 text-left float-left">
                                                    <div class="caption">
                                                        <h4 class="product-title text-capitalize"><a
                                                                href="product-details.html">magni dolores eosquies</a>
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
                                                    <div class="button-wrapper">
                                                        <div class="button-group text-center">
                                                            <button type="button" class="btn btn-primary btn-cart"
                                                                data-target="#cart-pop" data-toggle="modal"><i
                                                                    class="material-icons">shopping_cart</i><span>Add to
                                                                    cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale-col">

                                        <div class="product-layouts">
                                            <div class="product-thumb">
                                                <div class="image col-sm-4 float-left">
                                                    <a href="#">
                                                        <img src="img/products/04.jpg" alt="04" /> </a>
                                                </div>
                                                <div class="thumb-description col-sm-8 text-left float-left">
                                                    <div class="caption">
                                                        <h4 class="product-title text-capitalize"><a
                                                                href="product-details.html">voluptas nulla pariatur</a>
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
                                                    <div class="button-wrapper">
                                                        <div class="button-group text-center">
                                                            <button type="button" class="btn btn-primary btn-cart"
                                                                data-target="#cart-pop" data-toggle="modal"><i
                                                                    class="material-icons">shopping_cart</i><span>Add to
                                                                    cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-layouts">
                                            <div class="product-thumb">
                                                <div class="image col-sm-4 float-left">
                                                    <a href="#">
                                                        <img src="img/products/05.jpg" alt="05" /> </a>
                                                </div>
                                                <div class="thumb-description col-sm-8 text-left float-left">
                                                    <div class="caption">
                                                        <h4 class="product-title text-capitalize"><a
                                                                href="product-details.html">aliquam quat voluptatem</a>
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
                                                    <div class="button-wrapper">
                                                        <div class="button-group text-center">
                                                            <button type="button" class="btn btn-primary btn-cart"
                                                                data-target="#cart-pop" data-toggle="modal"><i
                                                                    class="material-icons">shopping_cart</i><span>Add to
                                                                    cart</span></button>
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
                </div>
            </div>
        </div>
    </div>
@endsection
