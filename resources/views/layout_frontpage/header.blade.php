<header class="header-area header-sticky text-center header1">
    <div class="header-main-sticky">
        <div class="header-nav">
            <div class="container">
                <div class="nav-left float-left">
                    <div class="ttheader-service">Wants to explore Upcoming Deals on Weekends?</div>
                </div>
                <div class="nav-right float-right d-flex">
                    <div class="language-wrapper toggle">
                        <button type="button" class="btn text-capitalize dropdown-toggle">
                            <img src="{{ asset('frontpage/img/banner/en.png') }}" alt="en" />
                            <span>English</span>
                        </button>
                        <div id="language-dropdown" class="language">
                            <ul>
                                <li><img src="{{ asset('frontpage/img/banner/en.png') }}"
                                        alt="en" /><span>English</span></li>
                                <li><img src="{{ asset('frontpage/img/banner/fr.png') }}"
                                        alt="fr" /><span>French</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="currency-wrapper toggle">
                        <button type="button" class="btn text-capitalize dropdown-toggle"><span>€
                                Euro</span></button>
                        <div id="currency-dropdown" class="currency">
                            <ul>
                                <li><span>€ Euro</span></li>
                                <li><span>£ Pound Sterling</span></li>
                                <li><span>$ US Dollar</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="ttheader-mail"><a href="mailto:demo.store@gmail.com">demo.store@gmail.com</a></div>
                    <div class="contact">
                        <i class="material-icons">phone</i>
                        <span>1234567890</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-head">
            <div class="header-main">
                <div class="container">
                    <div class="header-left float-left d-flex d-lg-flex d-md-block d-xs-block">
                        <div class="logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('frontpage/img/logos/logo-01.png') }}"
                                    alt="NatureCircle"></a>
                        </div>

                    </div>
                    <div class="header-middle float-none d-inline-block align-top">
                        <div class="menu">
                            <div class="container">
                                <!-- Navbar -->
                                <nav
                                    class="navbar navbar-expand-lg navbar-light d-sm-none d-xs-none d-lg-block navbar-full">

                                    <!-- Navbar brand -->
                                    <a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>

                                    <!-- Collapse button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <!-- Collapsible content -->
                                    <div class="collapse navbar-collapse">

                                        <!-- Links -->
                                        <ul class="navbar-nav m-auto justify-content-center">
                                            @foreach ($categories as $category)
                                                @if ($category->parent_id === null)
                                                    <li
                                                        class="nav-item {{ $category->children->count() > 0 ? 'dropdown' : '' }}">
                                                        <a class="nav-link text-uppercase {{ $category->children->count() > 0 ? 'dropdown-toggle' : '' }}"
                                                            href="{{ route('category.show', $category) }}">
                                                            {{ $category->name }}
                                                        </a>
                                                        @if ($category->children->count() > 0)
                                                            <div
                                                                class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
                                                                @foreach ($category->children as $category)
                                                                    <div class="boxMenu">
                                                                        <div class="heading">
                                                                            {{ $category->name }}
                                                                        </div>
                                                                        <?php $index = 1; ?>
                                                                        @include('partials.category_menu', [
                                                                            'categories' => $category->children,
                                                                            'index' => $index,
                                                                        ])
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <!-- Links -->
                                    </div>
                                    <!-- Collapsible content -->

                                </nav>
                                <!-- Navbar -->
                                {{-- <nav class="navbar navbar-expand-lg navbar-dark d-lg-none navbar-responsive">

                                    <!-- Navbar brand -->
                                    <a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>

                                    <!-- Collapse button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"><i class='material-icons'>sort</i></span>
                                    </button>

                                    <!-- Collapsible content -->
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">

                                        <!-- Links -->
                                        <ul class="navbar-nav m-auto justify-content-center">

                                            <!-- Features -->
                                            <li class="nav-item dropdown active">
                                                <a class="nav-link dropdown-toggle text-uppercase"
                                                    data-toggle="collapse" data-target="#menu1" aria-controls="menu1"
                                                    aria-expanded="false" aria-label="Toggle navigation">
                                                    Home
                                                    <span class="sr-only">(current)</span> </a>
                                                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3"
                                                    id="menu1">
                                                    <div class="sub-menu mb-xl-0 mb-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a class="menu-item pl-0" href="index.html">
                                                                    Home 1 </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="index2.html">
                                                                    Home 2 </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="index3.html">
                                                                    Home 3 </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="index4.html">
                                                                    Home 4 </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="index5.html">
                                                                    Home 5 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown mega-dropdown">
                                                <a class="nav-link dropdown-toggle text-uppercase"
                                                    data-toggle="collapse" data-target="#menu3" aria-controls="menu3"
                                                    aria-expanded="false" aria-label="Toggle navigation">Category</a>
                                                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3"
                                                    id="menu3">
                                                    <div class="row">
                                                        <div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
                                                            <h6
                                                                class="sub-title text-uppercase font-weight-bold white-text">
                                                                Variation 1</h6>
                                                            <!--Featured image-->
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a class="menu-item pl-0"
                                                                        href="filter-toggle.html">
                                                                        filter toggle </a>
                                                                </li>
                                                                <li>
                                                                    <a class="menu-item pl-0"
                                                                        href="off-canvas-left.html">
                                                                        off canvas left </a>
                                                                </li>
                                                                <li>
                                                                    <a class="menu-item pl-0"
                                                                        href="off-canvas-right.html">
                                                                        off canvas right </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
                                                            <h6
                                                                class="sub-title text-uppercase font-weight-bold white-text">
                                                                Variation 2</h6>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <a class="menu-item pl-0"
                                                                        href="category-5-col.html">
                                                                        grid 5 column </a>
                                                                </li>
                                                                <li>
                                                                    <a class="menu-item pl-0"
                                                                        href="category-6-col.html">
                                                                        grid 6 column </a>
                                                                </li>
                                                                <li>
                                                                    <a class="menu-item pl-0"
                                                                        href="category-7-col.html">
                                                                        grid 7 column </a>
                                                                </li>
                                                                <li>
                                                                    <a class="menu-item pl-0"
                                                                        href="category-8-col.html">
                                                                        grid 8 column </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6 col-xl-4 sub-menu mb-0">

                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <span class="menu-banner"><img
                                                                            src="img/banner/menu-banner.jpg"
                                                                            alt="menu-banner" /></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle text-uppercase"
                                                    data-toggle="collapse" data-target="#menu2" aria-controls="menu2"
                                                    aria-expanded="false" aria-label="Toggle navigation">
                                                    Shop
                                                    <span class="sr-only">(current)</span> </a>
                                                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3"
                                                    id="menu2">
                                                    <div class="sub-menu mb-xl-0 mb-4">
                                                        <h6
                                                            class="sub-title text-uppercase font-weight-bold white-text">
                                                            Featured</h6>
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a class="menu-item pl-0" href="product-grid.html">
                                                                    product grid </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0"
                                                                    href="product-sticky-right.html">
                                                                    sticky right </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0"
                                                                    href="product-extended-layout.html">
                                                                    Extended layout </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="product-details.html">
                                                                    Default layout </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="product-compact.html">
                                                                    compact layout </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Technology -->



                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle text-uppercase"
                                                    data-toggle="collapse" data-target="#menu4" aria-controls="menu4"
                                                    aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3"
                                                    id="menu4">
                                                    <div class="sub-menu">
                                                        <h6
                                                            class="sub-title text-uppercase font-weight-bold white-text d-none">
                                                            Featured</h6>
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a class="menu-item pl-0" href="blog-2-column.html">
                                                                    blog 2 column </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="blog-3-column.html">
                                                                    blog 3 column </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0"
                                                                    href="blog-2-column-masonary.html">
                                                                    blog masonary </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="blog-list.html">
                                                                    blog list </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="blog-details.html">
                                                                    blog details </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link text-uppercase" href="contact-us.html">contact
                                                    us</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle text-uppercase"
                                                    data-toggle="collapse" data-target="#menu5" aria-controls="menu5"
                                                    aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3"
                                                    id="menu5">
                                                    <div class="sub-menu">
                                                        <h6
                                                            class="sub-title text-uppercase font-weight-bold white-text d-none">
                                                            Featured</h6>
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a class="menu-item pl-0" href="about-us.html">
                                                                    About us </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="accordions.html">
                                                                    Accordions </a>
                                                            </li>
                                                            <li>
                                                                <a class="menu-item pl-0" href="buttons.html">
                                                                    Buttons </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- Links -->
                                    </div>
                                    <!-- Collapsible content -->

                                </nav> --}}
                            </div>
                        </div>
                    </div>


                    <div class="header-right d-flex d-xs-flex d-sm-flex justify-content-end float-right">
                        <div class="search-wrapper">
                            <a>
                                <i class="material-icons search">search</i>
                                <i class="material-icons close">close</i>
                            </a>
                            <form autocomplete="off" action="/action_page.php" class="search-form">
                                <div class="autocomplete" style="width:300px;">
                                    <input id="myInput" type="text" name="myCountry" placeholder="Search here">
                                    <button type="button"><i class="material-icons">search</i></button>
                                </div>
                            </form>
                        </div>
                        <div class="user-info">
                            <button type="button" class="btn">
                                <i class="material-icons">perm_identity</i>
                            </button>
                            <div id="user-dropdown" class="user-menu">
                                <ul>
                                    <li><a href="{{ route('users.index') }}" class="text-capitalize">my account</a></li>
                                    @if (Auth::check())
                                    <li><a href="{{ route('user.logout') }}" class="button">Logout</a></li>
                                    @else
                                    <li><a href="#" class="modal-view button" data-toggle="modal"
                                        data-target="#modalRegisterForm">Register</a></li>
                                    <li><a href="#" class="modal-view button" data-toggle="modal"
                                        data-target="#modalLoginForm">login</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="cart-wrapper">
                            <a href="{{ route('giohang') }}">
                                <button type="button" class="btn">
                                    <i class="material-icons">shopping_cart</i>
                                    <span class="ttcount">2</span>
                                </button>
                            </a>
                            <div id="cart-dropdown" class="cart-menu">
                                <ul class="w-100 float-left">
                                    <li>
                                        123123
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
