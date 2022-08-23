<?php use App\Models\Section; ?>
<?php use App\Models\Product; ?>
<?php use App\Models\Cart; ?>
<style>
    .sidepage {
        position: fixed;
        top: 0;
        left: -430px;
        opacity: 0;
        z-index: 100;
        background-color: #fff;
        color: white;
        height: 100vh;
        width: 350px;
        padding: 50px 30px;
        transition: all 500ms ease-in-out;
    }

    .sidepage>i {
        position: absolute;
        cursor: pointer;
        color: #000;
        top: 10px;
        right: 20px;
    }

    .sidepage ul>li {
        font-size: 16px;
        cursor: pointer;
        margin-bottom: 0px;

        padding: 2px;
    }

    .sidepage ul>li:hover {
        color: rgb(255, 166, 0);
    }

    .animateSidePage {
        opacity: 1;
        left: 0;
    }

    .animateListItems {
        animation: animate cubic-bezier(0, 0, 0.6, 1.24) 1s;
        animation-fill-mode: forwards;
    }

    /*************************/
    animateListItem1 {
        animation-delay: 0ms;
    }

    animateListItem2 {
        animation-delay: 100ms;
    }

    animateListItem3 {
        animation-delay: 200ms;
    }

    animateListItem4 {
        animation-delay: 300ms;
    }

    animateListIte5 {
        animation-delay: 1s;
    }

    .dropdown-menu-mb,
    .dropdown-sub {
        display: none;
    }

    .dropdown-menu-mb ul li:last-child {
        border: none;
    }

    /**********************/
    @keyframes animate {
        to {
            transform: translate(0);
        }
    }

</style><!-- Start Main Top -->

<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-2 col-xs-2">
                <nav>

                    <i class=" fas fa-user hamburger" onclick="displaySidePage()"
                        style="color: #fff; border: 2px solid #fff; padding: 10px"></i>
                </nav>


                <?php $sections = Section::sections();
                // echo "<pre>";print_r($sections);die;
                ?>

                <div class="sidepage">
                    <i class='fas fa-times sidepage-close-button' onclick="closeSidePage()"></i>
                    <div class="vgtyj">
                        <ul class="nav navbar-nav ml-auto margin" data-in="fadeInDown" data-out="fadeOutUp">
                            @foreach ($sections as $section)
                                @if (count($section['categories']) > 0)
                                    <li>
                                        <a href="" class="main-category desktop-info"
                                            style="display: flex;">{{ $section['name'] }} <i class="fa fa-plus"
                                                aria-hidden="true"></i></a>
                                        <div class="dropdown-menu-mb">
                                            <ul>
                                                @foreach ($section['categories'] as $category)
                                                    <li>
                                                        <a href="/{{ $category['url'] }}" style="color:#ee5f73;"
                                                            class="desktop-info"
                                                            data-reactid="29">{{ $category['category_name'] }} <i
                                                                class="fa fa-plus" aria-hidden="true"></i></a>
                                                        <!-- <a href="#" class="desktop-info">Top<i class="fa fa-plus"
                                                    aria-hidden="true"></i></a> -->
                                                        <ul class="dropdown-sub">
                                                            @foreach ($category['subcategories'] as $subcategories)
                                                                <li><a href="/{{ $subcategories['url'] }}"
                                                                        class="desktop-info">{{ $subcategories['category_name'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- mobile -->
                    <div class="desktop-userActions" data-reactid="823">
                        <div class="desktop-userActionsArrow" data-reactid="824"></div>
                        <div class="desktop-userActionsContent" data-reactid="825">
                            <div class="desktop-contentInfo" data-reactid="826">
                                <div class="desktop-infoTitle" data-reactid="827">Welcome, @if (Auth::check())
                                        {{ Auth::user()->name }}
                                    @endif
                                </div>
                                @if (!Auth::check())
                                    <div class="desktop-infoEmail" data-reactid="828">To access account and
                                        manage orders</div>
                                @endif
                            </div>

                            <div data-reactid="829">
                                @if (!Auth::check())
                                    <div class="desktop-getUserInLinks desktop-getInLinks" data-reactid="830"><a
                                            href="/login" data-track="login" class="desktop-linkButton"
                                            data-reactid="831">login / Signup</a></div>
                                @endif
                                <div class="desktop-getInLinks" data-reactid="832"><a href="/order" data-track="coupons"
                                        class="desktop-info" data-reactid="833">
                                        <div class="desktop-infoSection" data-reactid="834">
                                            Orders

                                        </div>
                                    </a>
                                    <a href="/profile" data-track="coupons" class="desktop-info" data-reactid="836">
                                        <div class="desktop-infoSection" data-reactid="837">
                                            Profile

                                        </div>
                                    </a>
                                    <a href="/wishlist" data-track="coupons" class="desktop-info" data-reactid="836">
                                        <div class="desktop-infoSection" data-reactid="837">
                                            Wishlist

                                        </div>
                                    </a><a href="/giftcard" data-track="coupons" class="desktop-info"
                                        data-reactid="839">
                                        <div class="desktop-infoSection" data-reactid="840">
                                            Gift Cards

                                        </div>
                                    </a><a href="/contactus" data-track="coupons" class="desktop-info"
                                        data-reactid="842">
                                        <div class="desktop-infoSection" data-reactid="843">
                                            ontact Us

                                        </div>
                                    </a><a href="/myntrainsider?cache=false" data-track="coupons" class="desktop-info"
                                        data-reactid="845">
                                        <div class="desktop-infoSection" data-reactid="846">
                                            Myntra Insider
                                            <span class="desktop-superscriptTag" data-reactid="848"> New </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="desktop-getInLinks" data-reactid="849"><a href="/my/myntracredit"
                                        data-track="coupons" class="desktop-info" data-reactid="850">
                                        <div class="desktop-infoSection" data-reactid="851">
                                            Myntra Credit

                                        </div>
                                    </a><a href="/my/coupons" data-track="coupons" class="desktop-info"
                                        data-reactid="853">
                                        <div class="desktop-infoSection" data-reactid="854">
                                            Coupons

                                        </div>
                                    </a><a href="/my/savedcards" data-track="coupons" class="desktop-info"
                                        data-reactid="856">
                                        <div class="desktop-infoSection" data-reactid="857">
                                            Saved Cards

                                        </div>
                                    </a><a href="/my/address" data-track="coupons" class="desktop-info"
                                        data-reactid="859">
                                        <div class="desktop-infoSection" data-reactid="860">
                                            Saved Addresses

                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-10 col-xs-10">

                <div class="right-phone-box">
                    <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <li><a href="profile.php">My Account</a></li>
                        <li><a href="#">Our location</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="main-header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">

            <div class="navbar-header">

                <a class="navbar-brand" href="/"><img src="{{ asset('user/assets/images/viduradi_logo.png') }}"
                        alt="" class="logo"></a>
            </div>


            <div class="nones navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                    <!-- <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> -->
                    @foreach ($sections as $section)
                        @if (count($section['categories']) > 0)
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="nav-link dropdown-toggle arrow"
                                    data-toggle="dropdown">{{ $section['name'] }} <i
                                        class="fas fa-angle-down"></i></a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            @foreach ($section['categories'] as $category)
                                                <div class="col-menu col-md-3">
                                                    <h6 class="title"><a href="/{{ $category['url'] }}"
                                                            style="color:#ee5f73;" class="desktop-categoryName"
                                                            data-reactid="29">{{ $category['category_name'] }}</a>
                                                    </h6>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            @foreach ($category['subcategories'] as $subcategories)
                                                                <li><a href="/{{ $subcategories['url'] }}"
                                                                        style="color:;" class="desktop-categoryLink"
                                                                        data-reactid="31">{{ $subcategories['category_name'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <!-- end col-3 -->
                                            <!--  <div class="col-menu col-md-3">
                                        <h6 class="title"><a href="/men-bottomwear" style="color:#ee5f73;" class="desktop-categoryName" data-reactid="62">Bottomwear</a></h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="/men-jeans" style="color:;" class="desktop-categoryLink" data-reactid="64">Jeans</a></li>
                                                <li><a href="/men-casual-trousers" style="color:;" class="desktop-categoryLink" data-reactid="66">Casual Trousers</a></li>
                                                <li><a href="/men-formal-trousers" style="color:;" class="desktop-categoryLink" data-reactid="68">Formal Trousers</a></li>
                                                <li><a href="/mens-shorts" style="color:;" class="desktop-categoryLink" data-reactid="70">Shorts</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                            <!-- end col-3 -->
                                            <!-- <div class="col-menu col-md-3">
                                        <h6 class="title"><a href="/men-footwear" style="color:#ee5f73;" class="desktop-categoryName" data-reactid="92">Footwear</a></h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="/men-casual-shoes" style="color:;" class="desktop-categoryLink" data-reactid="94">Casual Shoes</a></li>
                                                <li><a href="/men-sports-shoes" style="color:;" class="desktop-categoryLink" data-reactid="96">Sports Shoes</a></li>
                                                <li><a href="/men-formal-shoes" style="color:;" class="desktop-categoryLink" data-reactid="98">Formal Shoes</a></li>
                                                <li><a href="/men-sneakers" style="color:;" class="desktop-categoryLink" data-reactid="100">Sneakers</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                            <!--  <div class="col-menu col-md-3">
                                        <h6 class="title"><a href="/men-sports-wear" style="color:#ee5f73;" class="desktop-categoryName" data-reactid="117">Sports &amp; Active Wear</a></h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="/men-sports-shoes" style="color:;" class="desktop-categoryLink" data-reactid="119">Sports Shoes</a></li>
                                                <li><a href="/men-sports-sandals" style="color:;" class="desktop-categoryLink" data-reactid="121">Sports Sandals</a></li>
                                                <li><a href="/men-sports-wear-tshirts" style="color:;" class="desktop-categoryLink" data-reactid="123">Active T-Shirts</a></li>
                                                <li><a href="/men-trackpants-shorts" style="color:;" class="desktop-categoryLink" data-reactid="125">Track Pants &amp; Shorts</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                            <!-- end col-3 -->
                                        </div>
                                        <!-- end row -->
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endforeach
                    <!--  <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP <i
                                class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/cart">Cart</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="profile.php">My Account</a></li>
                            <li><a href="wishlist.php">Wishlist</a></li>
                            <li><a href="shop-detail.php">Shop Detail</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item"><a class="nav-link" href="service.php">Our Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul class="rtevg">
                    <li class="trer">
                        <div class="form-group" style="display: flex;margin: 0px !important;padding-top: 20px;">
                            <input id="exampleFormControlInput3" type="email" placeholder="What're you searching for?"
                                class="form-control form-control-underlined border-info"
                                style="border-radius: 0px !important;">
                            <div class="input-group-append" style="background: #a19d9d;">
                                <button id="button-addon1" type="submit" class="btn btn-link"
                                    style="color: #fff !important;"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </li>

                    <?php $totalCartItem = Cart::totalCartItem(); ?>
                    <li class="side-menu"><a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">{{ $totalCartItem }}</span>
                        </a></li>


                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <?php
        $userCartItem = Cart::userCartItem();
        $totalArr = Cart::userCartTotalPrice();
        ?>
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    @foreach ($userCartItem as $item)
                        <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'], $item['size']); ?>
                        <li>
                            <a href="#" class="photo"><img
                                    src="{{ asset('product/image') }}/{{ $item['product']['main_image'] }}"
                                    class="cart-thumb" alt="" /></a>
                            <h6><a href="#">{{ $item['product']['product_name'] }}
                                    ({{ $item['product']['product_code'] }})
                                </a></h6>
                            <p>{{ $item['quantity'] }}x - <span
                                    class="price">₹{{ $attrPrice['final_price'] * $item['quantity'] }}</span>
                            </p>
                        </li>
                    @endforeach
                    <li class="total">
                        <a href="/cart" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        @if (isset($userCartItem))
                        <span class="float-right"><strong>Total</strong>:
                            ₹{{ $totalArr['total_final_price'] }}</span>
                        @endif
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<div class="top-search" style="display: none;">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<script>
    let sidepage = document.getElementsByClassName('sidepage');
    let listItem = document.getElementsByClassName('listItem');

    function displaySidePage() {
        sidepage["0"].classList.add('animateSidePage');
        console.log('clicked');
        for (i = 0; i < listItem.length; i++) {
            listItem[i].classList.add('animateListItems', "animateListItem" + i);
        }
    }

    function closeSidePage() {
        console.log('close');
        sidepage["0"].classList.remove('animateSidePage');
        for (i = 0; i < listItem.length; i++) {
            listItem[i].classList.remove('animateListItems', "animateListItem" + i);
        }
    }
</script>
<script>
    // For mobile dropdown menu
    $(document).ready(function() {
        $(document).on("click", ".vgtyj ul li a.main-category", function() {
            $(this).siblings('div.dropdown-menu-mb').slideToggle();
        });

        $(document).on("click", ".dropdown-menu-mb a", function() {
            $(this).siblings('ul.dropdown-sub').slideToggle();
            $(this).parents('li').siblings('li').find('ul.dropdown-sub').slideUp();
            //alert('hi');
        });
    });
</script>
