<?php use App\Models\Section; ?>
<?php use App\Models\Product; ?>
<?php use App\Models\Cart; ?>
<?php use App\Models\Wishlist; ?>
<?php use App\Models\products_attributes; ?>
<?php $countProduct = Wishlist::countProduct(); ?>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="home-furniture home-15 home-16">
    <div id="main">
        <header class="main-header">
            <div class="header-top-nav">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="text-lg-start text-center">
                                <p class="color-white">Welcome you to Viduradi store!</p>
                            </div>
                        </div>
                        <div class="col-8 d-lg-block d-none">
                            <div class="header-right-nav hover-style-furniture">

                                <div class="header-top-set-lan-curr d-flex justify-content-end">
                                    <div class=" dropdown">
                                        {{-- <button
                                            class=" dropdown-toggle header-action-btn hover-style-furniture color-white border-0"
                                            type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Settings <i class="ion-ios-arrow-down"></i>
                                        </button> --}}
                                        <!-- <button class="dropdown-toggle header-action-btn hover-style-furniture color-white border-0" data-bs-toggle="dropdown"> Settings <i class="ion-ios-arrow-down"></i></button> -->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/profile">My account</a></li>
                                            @if (Auth::check())
                                                <li><a class="dropdown-item" href="/checkout">Checkout</a></li>
                                            @endif
                                            @if (!Auth::check())
                                                <li><a class="dropdown-item" href="/login">Sign in</a></li>
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="header-top-curr dropdown">
                                        <button
                                            class="dropdown-toggle header-action-btn hover-style-furniture color-white"
                                            data-bs-toggle="dropdown">Contact Us</button>
                                    </div>

                                    <div class="header-top-curr dropdown">
                                        <button
                                            class="dropdown-toggle header-action-btn hover-style-furniture color-white pr-0"
                                            data-bs-toggle="dropdown">Call Us : +11 900 800 100</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="header-navigation sticky-nav d-none d-lg-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('user/assets/images/viduradi_logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <?php $sections = Section::sections();
                        //  echo"<pre>";print_r($userCartItem);die;
                        ?>
                        <div class="col-md-10 col-sm-10">
                            <div class="main-navigation">
                                <ul>
                                    @foreach ($sections as $section)
                                        @if (count($section['categories']) > 0)
                                            <li class="menu-dropdown">
                                                <a href="#">{{ $section['name'] }} <i
                                                        class="ion-ios-arrow-down"></i></a>
                                                <ul class="mega-menu-wrap">
                                                    <div class="zaqqaz"></div>
                                                    @foreach ($section['categories'] as $category)
                                                        <li>

                                                            <ul>
                                                                <li class="mega-menu-title"><a
                                                                        href="/{{ $category['url'] }}"
                                                                        style="color:#ee5f73;">{{ $category['category_name'] }}</a>
                                                                </li>
                                                                @foreach ($category['subcategories'] as $subcategories)
                                                                    <li><a
                                                                            href="/{{ $subcategories['url'] }}">{{ $subcategories['category_name'] }}</a>
                                                                    </li>
                                                                @endforeach
                                                        </li>
                                                </ul>

                                            </li>
                                        @endforeach
                                </ul>
                                </li>
                                @endif
                                @endforeach

                                <li><a href="#">Our Service</a></li>
                                <!--<li><a href="#">Contact Us</a></li>-->
                                </ul>
                            </div>

                            <div class="header_account_area">

                                <div class="header_account_list search_list">
                                    <div class="dropdown_search">
                                        <form action="#" method="get">
                                            @csrf
                                            <input placeholder="Search here ..." name="search" id="search" type="text"
                                                id="" autocomplete="off">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                            <div id="productList"></div>
                                        </form>
                                    </div>
                                </div>

                                <div class="cart-info d-flex home-13">
                                    <div class="desktop-user" data-reactid="829">
                                        <div class="desktop-userIconsContainer size" data-reactid="830">
                                            <i class="fas fa-user"></i>
                                            <span class="desktop-userTitle" data-reactid="832">Profile</span>
                                        </div>
                                        <div class="desktop-userActions" data-reactid="833">
                                            <div class="xyz"></div>
                                            <div class="desktop-userActionsContent" data-reactid="835">
                                                <div class="desktop-contentInfo" data-reactid="836">
                                                    <div class="desktop-infoTitle" data-reactid="837">Welcome</div>
                                                    <div class="desktop-infoEmail" data-reactid="838">To access account
                                                        and manage orders</div>
                                                </div>
                                                <div data-reactid="839">
                                                    @if (!Auth::check())
                                                        <div class="desktop-getUserInLinks desktop-getInLinks"
                                                            data-reactid="840"><a href="/login" data-track="login"
                                                                class="desktop-linkButton" data-reactid="841">login /
                                                                Signup</a>
                                                        </div>
                                                    @else
                                                        <div class="desktop-getUserInLinks desktop-getInLinks"
                                                            data-reactid="840"><a href="/logout" data-track="login"
                                                                class="desktop-linkButton" data-reactid="841">Logout</a>
                                                        </div>
                                                    @endif
                                                    <div class="desktop-getInLinks" data-reactid="842"><a href="/order"
                                                            data-track="coupons" class="desktop-info"
                                                            data-reactid="843">
                                                            <div class="desktop-infoSection" data-reactid="844">
                                                                Orders

                                                            </div>
                                                        </a>
                                                        <a href="/profile" data-track="coupons" class="desktop-info"
                                                            data-reactid="846">
                                                            <div class="desktop-infoSection" data-reactid="847">
                                                                Profile
                                                            </div>
                                                        </a>
                                                        <a href="/my-wishlist" data-track="coupons"
                                                            class="desktop-info" data-reactid="846">
                                                            <div class="desktop-infoSection" data-reactid="847">
                                                                Wishlist
                                                            </div>
                                                        </a>
                                                        <a href="/contactus" data-track="coupons" class="desktop-info"
                                                            data-reactid="852">
                                                            <div class="desktop-infoSection" data-reactid="853">
                                                                Contact Us

                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="desktop-getInLinks" data-reactid="859"><a
                                                            href="/my/coupons" data-track="coupons"
                                                            class="desktop-info" data-reactid="863">
                                                            <div class="desktop-infoSection" data-reactid="864">
                                                                Coupons

                                                            </div>
                                                        </a><a href="/my/address" data-track="coupons"
                                                            class="desktop-info" data-reactid="869">
                                                            <div class="desktop-infoSection" data-reactid="870">
                                                                Saved Addresses

                                                            </div>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (Auth::check())
                                        <a href="/my-wishlist" class="count-cart heart mlr-10px color-black">
                                            <span class="item-quantity-tag">{{ $countProduct }}</span>
                                            <p>Wishlist</p>
                                        </a>
                                    @else
                                        <a href="/my-wishlist" class="count-cart heart mlr-10px color-black">
                                            <span class="item-quantity-tag">0</span>
                                            <p>Wishlist</p>
                                        </a>
                                    @endif

                                    <div class="mini-cart-warp">
                                        <a href="#offcanvas-cart" class="count-cart offcanvas-toggle color-black">
                                            <?php $totalCartItem = Cart::totalCartItem(); ?>
                                            <span class="item-quantity-tag" id="cart-item-header">{{ $totalCartItem }}</span>
                                            <p>Bag</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom d-lg-none sticky-nav py-3 mobile-navigation hover-style-furniture">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-3 col-sm-3">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle mobile-menu">
                                <i class="ion-navicon"></i>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-4 d-flex justify-content-center">
                            <div class="logo m-0">
                                <a href="/"><img src="{{ asset('user/assets/images/viduradi_logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-5">

                            <div class="cart-info d-flex m-0 justify-content-end">
                                <div class="header-bottom-set dropdown hover-style-furniture">
                                    <button
                                        class="dropdown-toggle header-action-btn hover-style-furniture color-white border-0"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"> <i
                                            class="ion-person"></i></button>
                                    <ul class="dropdown-menu">
                                        <!-- <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                        <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item" href="login.html">Sign in</a></li> -->
                                        <div class="desktop-userActionsContent" data-reactid="835">
                                            <div class="desktop-contentInfo" data-reactid="836">
                                                <div class="desktop-infoTitle" data-reactid="837">Welcome</div>
                                                <div class="desktop-infoEmail" data-reactid="838">To access account
                                                    and manage orders</div>
                                            </div>
                                            <div data-reactid="839">
                                                @if (Auth::check())
                                                    <div class="desktop-getUserInLinks desktop-getInLinks"
                                                        data-reactid="840"><a href="/login" data-track="login"
                                                            class="desktop-linkButton" data-reactid="841">login /
                                                            Signup</a>
                                                    </div>
                                                @endif
                                                <div class="desktop-getInLinks" data-reactid="842">
                                                    @if (Auth::check())
                                                        <a href="/order" data-track="coupons" class="desktop-info"
                                                            data-reactid="843">
                                                            <div class="desktop-infoSection" data-reactid="844">
                                                                <!-- react-text: 845 -->Orders
                                                                <!-- /react-text -->
                                                            </div>
                                                        </a>
                                                    @endif
                                                    <a href="/my-wishlist" data-track="coupons" class="desktop-info"
                                                        data-reactid="846">
                                                        <div class="desktop-infoSection" data-reactid="847">
                                                            <!-- react-text: 848 -->Wishlist
                                                            <!-- /react-text -->
                                                        </div>
                                                    </a><a href="/giftcard" data-track="coupons" class="desktop-info"
                                                        data-reactid="849">
                                                        <div class="desktop-infoSection" data-reactid="850">
                                                            <!-- react-text: 851 -->Gift Cards
                                                            <!-- /react-text -->
                                                        </div>
                                                    </a><a href="/contactus" data-track="coupons"
                                                        class="desktop-info" data-reactid="852">
                                                        <div class="desktop-infoSection" data-reactid="853">
                                                            <!-- react-text: 854 -->Contact Us
                                                            <!-- /react-text -->
                                                        </div>
                                                    </a><a href="/myntrainsider?cache=false" data-track="coupons"
                                                        class="desktop-info" data-reactid="855">
                                                        <div class="desktop-infoSection" data-reactid="856">
                                                            <!-- react-text: 857 -->Myntra Insider
                                                            <!-- /react-text --><span class="desktop-superscriptTag"
                                                                data-reactid="858"> New </span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="desktop-getInLinks" data-reactid="859"><a
                                                        href="/my/myntracredit" data-track="coupons"
                                                        class="desktop-info" data-reactid="860">
                                                        <div class="desktop-infoSection" data-reactid="861">
                                                            <!-- react-text: 862 -->Myntra Credit
                                                            <!-- /react-text -->
                                                        </div>
                                                    </a><a href="/my/coupons" data-track="coupons"
                                                        class="desktop-info" data-reactid="863">
                                                        <div class="desktop-infoSection" data-reactid="864">
                                                            <!-- react-text: 865 -->Coupons
                                                            <!-- /react-text -->
                                                        </div>
                                                    </a><a href="/my/savedcards" data-track="coupons"
                                                        class="desktop-info" data-reactid="866">
                                                        <div class="desktop-infoSection" data-reactid="867">
                                                            <!-- react-text: 868 -->Saved Cards
                                                            <!-- /react-text -->
                                                        </div>
                                                    </a><a href="/my/address" data-track="coupons"
                                                        class="desktop-info" data-reactid="869">
                                                        <div class="desktop-infoSection" data-reactid="870">
                                                            <!-- react-text: 871 -->Saved Addresses
                                                            <!-- /react-text -->
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <a href="/my-wishlist" class="count-cart heart dgfg mlr-2px color-black">
                                    <!-- <span class="item-quantity-tag"></span> -->

                                </a>
                                <div class="mini-cart-warp">
                                    <a href="#offcanvas-cart" class="count-cart offcanvas-toggle color-black">

                                        <span class="item-quantity-tag">02</span>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </header>

        <div class="mobile-search-option pb-3 d-lg-none hover-style-furniture">
            <div class="container-fluid">
                <div class="header-account-list">
                    <div class="dropdown-search">
                        <form action="/search-products" method="get">
                            @csrf
                            <input placeholder="Search here ..." name="search" id="searches" type="text"
                                autocomplete="off">
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            <div id="productLists"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="offcanvas-overlay"></div>

        <?php
        $userCartItem = Cart::userCartItem();
        $totalArr = Cart::userCartTotalPrice();
        ?>
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart hover-style-furniture">
            <div class="inner">
                <div class="head">
                    <span class="title">Cart</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll" id="UpdateCartItem">
                    @include('section.header-cart')
                </div>
                <!-- <div class="shopping-cart-total">
                    @if (isset($userCartItem))
<h4>Amount : <span>₹{{ $totalArr['total_amount'] }}</span></h4>
                    <h4>Discount : <span>₹{{ $totalArr['total_discount_price'] }}</span></h4>
                    <h4>Special Discount : <span>₹{{ $totalArr['special_discount'] }}</span></h4>
                    <h4>Taxes : <span>₹{{ $totalArr['igst'] }}</span></h4>
                    <h4 class="shop-total">Total : <span>₹{{ $totalArr['total_final_price'] }}</span></h4>
@else
<h4>Amount : <span>₹0</span></h4>
                    <h4>Discount : <span>₹0</span></h4>
                    <h4>Special Discount : <span>₹0</span></h4>
                    <h4>Taxes : <span>₹0</span></h4>
                    <h4 class="shop-total">Total : <span>₹0</span></h4>
@endif
                </div> -->
                <div class="foot">
                    <div class="buttons">
                        <a href="/cart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        {{-- <a href="checkout" class="btn btn-outline-dark current-btn">checkout</a> --}}
                    </div>
                </div>
            </div>
        </div>


        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu hover-style-furniture">
            <button class="offcanvas-close"></button>
            <!-- contact Info -->
            <div class="mobile-top">
                @if (Auth::check())
                    <img class="mobile-profile" src="{{ asset('profiles/dp') }}/{{ Auth::user()->dp }}" alt="">
                    <h4>{{ Auth::user()->name }}</h4>
                @else
                    <img class="mobile-profile" src="user/assets/images/user.webp" alt="">
                    <h4>Profile Name</h4>
                @endif

            </div>
            <!-- <div class="contact-info d-flex align-items-center justify-content-center color-black py-3">
                <img class="me-3" src="{{ asset('header/assets/images/icons/mobile-contact.png') }}" alt="">
                <p>Call us:</p>
                <a class="color-black" href="#"> +11 900 800 100</a>
            </div> -->
            <!-- offcanvas compare & wishlist -->
            <!-- <div class="user-panel">
                <ul class="d-flex justify-content-between">
                    <li class="m-0">
                        <a href="compare"><i class="ion-ios-shuffle-strong"></i>Compare (0)</a>
                    </li>
                    <li>
                        <a href="/my-wishlist"><i class="ion-android-favorite-outline"></i>Wishlist
                            ({{ $countProduct }})</a>
                    </li>
                </ul>
            </div> -->
            @if (!Auth::check())
                <div class="desktop-getUserInLinks mbli desktop-getInLinks">
                    <img src="user/assets/images/viduradi_logo_sidebar.png" alt="">
                    <a href="/login" class="desktop-linkButton">login / Signup</a>

                </div>
            @endif
            <!-- offcanvas currency -->
            <div class="offcanvas-userpanel">
                <ul>
                    @if (Auth::check())
                        <li class="offcanvas-userpanel__role"><span class="offcanvas__user-expand"></span>
                            <a href="/profile">My Account</a>

                        </li>
                    @endif
                </ul>
            </div>
            <!-- offcanvas language -->
            <!-- offcanvas currency -->

            <!-- offcanvas language -->
            <!-- <div class="offcanvas-userpanel">
                <ul>
                    <li class="offcanvas-userpanel__role"><span class="offcanvas__user-expand"></span>
                        <a href="#">Contact Us</a>

                    </li>
                </ul>
            </div> -->
            <div class="menu-close">
                menu
            </div>
            <!-- offcanvas menu -->
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        @foreach ($sections as $section)
                            @if (count($section['categories']) > 0)
                                <li><span class="menu-expand"></span><a href="#"><span
                                            class="menu-text">{{ $section['name'] }}</span></a>
                                    <ul class="sub-menu">
                                        @foreach ($section['categories'] as $category)
                                            <li><span class="menu-expand"></span><a href="#"><span
                                                        class="menu-text">{{ $category['category_name'] }}</span></a>
                                                @foreach ($category['subcategories'] as $subcategories)
                                                    <ul class="sub-menu">

                                                        <li><a
                                                                href="/t-shirt">{{ $subcategories['category_name'] }}</a>
                                                        </li>


                                                    </ul>
                                                @endforeach
                                            </li>
                                        @endforeach

                                    </ul>

                                </li>
                            @endif
                        @endforeach
                        <!-- <li class="menu-dropdown"><span class="menu-expand"></span>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about">About Page</a></li>
                                <li><a href="cart">Cart Page</a></li>
                                <li><a href="checkout">Checkout Page</a></li>
                                <li><a href="compare">Compare Page</a></li>
                                <li><a href="login">Login &amp; Regiter Page</a></li>
                                <li><a href="my-account">Account Page</a></li>
                                <li><a href="wishlist">Wishlist Page</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#">Our Service</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social">
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="slider-area">

        </div>

    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="{{ asset('header/assets/images/product-image/furniture/1.jpg') }}"
                                        alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="{{ asset('header/assets/images/product-image/furniture/2.jpg') }}"
                                        alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="{{ asset('header/assets/images/product-image/furniture/3.jpg') }}"
                                        alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="{{ asset('header/assets/images/product-image/furniture/4.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="quickview-wrap mt-15">
                                <div class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2 owl-loaded owl-drag"
                                    role="tablist">




                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                            <div class="owl-item"><a class="active" data-bs-toggle="tab"
                                                    href="#pro-1"><img
                                                        src="{{ asset('header/assets/images/product-image/furniture/1.jpg') }}"
                                                        alt=""></a></div>
                                            <div class="owl-item"><a data-bs-toggle="tab" href="#pro-2"><img
                                                        src="{{ asset('header/assets/images/product-image/furniture/2.jpg') }}"
                                                        alt=""></a></div>
                                            <div class="owl-item"><a data-bs-toggle="tab" href="#pro-3"><img
                                                        src="{{ asset('header/assets/images/product-image/furniture/3.jpg') }}"
                                                        alt=""></a></div>
                                            <div class="owl-item"><a data-bs-toggle="tab" href="#pro-4"><img
                                                        src="{{ asset('header/assets/images/product-image/furniture/4.jpg') }}"
                                                        alt=""></a></div>
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <div class="owl-prev disabled">prev</div>
                                        <div class="owl-next">next</div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Originals Kaval Windbr</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews
                                            (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore
                                    et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco
                                </p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="#"> + Add To Cart</a>
                                    </div>
                                </div>
                                <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
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

<script>
    $(document).on("click", function() {
        $('#search').keyup(function() {
            var gs = $(this).val();
            // alert(gs);
            if (gs != '') {
                $.ajax({

                    url: "/list-product",
                    method: "GET",
                    data: {
                        gs: gs,
                    },
                    success: function(item) {
                        if (item != '') {
                            $('#productList').fadeIn();
                            $('#productList').html(item);
                        } else {
                            $('#productList').fadeOut();
                        }

                    }
                });
            } else {
                $('#productList').fadeOut();
            }
        });
        var $trigger = $("#search");
        if ($trigger !== event.target && !$trigger.has(event.target).length) {
            $(".dropdown-menu").slideUp("fast");
        }
    });
</script>

<script>
    $(document).on("click", function() {
        $('#searches').keyup(function() {
            var gs = $(this).val();
            // alert(gs);
            if (gs != '') {
                $.ajax({

                    url: "/list-product",
                    method: "GET",
                    data: {
                        gs: gs,
                    },
                    success: function(item) {
                        if (item != '') {
                            $('#productLists').fadeIn();
                            $('#productLists').html(item);
                        } else {
                            $('#productList').fadeOut();
                        }

                    }
                });
            } else {
                $('#productLists').fadeOut();
            }
        });

        var $trigger = $("#searches");
        if ($trigger !== event.target && !$trigger.has(event.target).length) {
            $(".dropdown-menu").slideUp("fast");
        }
    });
</script>


<!-- <script src="user/header/assets/js/vendor/vendor.min.js"></script> -->
<script src="{{ asset('user/header/assets/js/plugins/plugins.min.js') }}"></script>


<script src="{{ asset('user/header/assets/js/main.js') }}"></script>
