<?php
use App\Models\category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Carbon;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/header-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/banner.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/vendor/vendor.min.css') }}">
    <!-- <link rel="stylesheet" href="user/header/assets/css/plugins/plugins.min.css"> -->
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/responsive.min.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/header-responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootsnav.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/save.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/responsive.min.css') }}">
    <link rel="stylesheet" href="user/assets/css/header.css">
    <link rel="stylesheet" href="{{ asset('image-zoom/css/main.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<style>
    .line {
        text-decoration: line-through;
    }

    #listPriceLegalMessageText {
        margin-left: 5px !important;
    }

    #listPriceLegalMessage .a-popover-trigger:hover {
        text-decoration: underline !important;
    }

    #listPriceLegalMessage .a-icon-popover {
        display: inline-block !important;
        margin-left: 0px !important;
        margin-top: 6px !important;
    }

    .reinventPrice_legalMessage_icon {
        width: 12px;
        fill: #969696;
        vertical-align: middle;
        padding-bottom: 2px;
    }

    .reinventPrice_legalMessage_icon:hover {
        fill: #555555;
    }

</style>
<style type="text/css">
    .reinventPrice_legalMessage_icon {
        width: 12px;
        fill: #969696;
        vertical-align: middle;
        padding-bottom: 2px;
    }

    .reinventPrice_legalMessage_icon:hover {
        fill: #555555;
    }

</style>
<style>
    .form-control {
        height: 34px !important;
    }

    .dfds {
        margin-bottom: 20px;
    }

</style>

<body>
    @include('section.header')




    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="vehicle-detail-banner banner-content clearfix">
                        <div class="banner-slider">
                            <div class="slider slider-nav thumb-image">
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="{{ asset('product/image') }}/{{ $productDetails['main_image'] }}"
                                            alt="slider-img">
                                    </div>
                                </div>
                                @foreach ($productDetails['images'] as $image)
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                            <img src="{{ asset('product/image') }}/{{ $image['image'] }}"
                                                alt="slider-img">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="slider slider-for">
                                <div class="slider-banner-image">
                                    <img src="{{ asset('product/image') }}/{{ $productDetails['main_image'] }}"
                                        alt="Car-Image">
                                </div>
                                @foreach ($productDetails['images'] as $image)
                                    <div class="slider-banner-image">
                                        <img src="{{ asset('product/image') }}/{{ $image['image'] }}"
                                            alt="Car-Image">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 Visitthe">
                            <div class="a-section a-spacing-none">
                                </p>
                                <a id="bylineInfo" class="a-link-normal" href="#">Visitthe EYEBOGLER Store</a>
                            </div>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert" style="color: black;font-size: 16;">
                                    {{ Session::get('success') }}
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger" role="alert" style="color: black;font-size: 16;">
                                    {{ Session::get('error') }}
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-lg-6 col md-6 col-sm-12">
                                    <div class="item-info-parent">
                                        <!-- main info -->
                                        <div class="main-info">
                                            <h4>{{ $productDetails['product_name'] }}</h4>
                                            <div class="star-rating">
                                                <span>★★★★</span>★
                                            </div>
                                            <?php $discounted_price = Product::getDiscountedPrice($productDetails['id']); ?>
                                            <div class="getAttrPrice">
                                                @if ($discounted_price > 0)
                                                    <p>Price: ₹<span
                                                            class="offer">{{ $productDetails['product_price'] }}</span><br>
                                                        <span
                                                            class="offer-off">{{ $productDetails['product_discount'] }}%</span>
                                                        <span id="price">₹ {{ $discounted_price }}</span>
                                                    </p>
                                                @else
                                                    <p><span id="price">₹
                                                            {{ $productDetails['product_price'] }}</span>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Choose -->
                                        <form action="/add-to-cart" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $productDetails['id'] }}">
                                            <input type="hidden" name="quantity" value="1" class="quantity">

                                            <div class="select-items">
                                                <div class="change-color">
                                                    <b><label id="colorName">Colour: Black</label></b><br>


                                                    <input type="radio" class="btn-check color" name="color"
                                                        value="Gray" id="option2" autocomplete="off">
                                                    <label class="btn btn-secondary" for="option2"></label>

                                                    <input type="radio" class="btn-check color" name="color"
                                                        value="Green" id="option3" autocomplete="off">
                                                    <label class="btn btn-success" for="option3"></label>

                                                    <input type="radio" class="btn-check color" name="color" value="Red"
                                                        id="option4" autocomplete="off">
                                                    <label class="btn btn-danger" for="option4"></label>

                                                    <input type="radio" class="btn-check color" name="color"
                                                        value="Orange" id="option5" autocomplete="off">
                                                    <label class="btn btn-warning" for="option5"></label>

                                                    <input type="radio" class="btn-check color" name="color"
                                                        value="Sky Blue" id="option6" autocomplete="off">
                                                    <label class="btn btn-info" for="option6"></label>

                                                    <input type="radio" class="btn-check color" name="color"
                                                        value="Black" id="option7" autocomplete="off">
                                                    <label class="btn btn-dark" for="option7"></label>
                                                </div>

                                                <div class="change-color">
                                                    <label id="sizeName"><b>Size:</b> NA</label><br>
                                                    @foreach ($productDetails['attributes'] as $attribute)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input getPriceOnSize"
                                                                product-id="{{ $productDetails['id'] }}"
                                                                product-mrp="{{ $productDetails['product_price'] }}"
                                                                type="radio" name="size"
                                                                id="inlineRadio_{{ $productDetails['id'] }}"
                                                                placeholder="{{ $attribute['size'] }}"
                                                                value="{{ $attribute['size'] }}" required>
                                                            <label class="form-check-label"
                                                                for="inlineRadio_{{ $productDetails['id'] }}">{{ $attribute['size'] }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button class="btn-popup" data-popup="0">Size Chart</button>

                                                <div class="popup">
                                                    <div class="popup__overlay"></div>
                                                    <div class="popup__wrap">
                                                        <div class="popup__close">
                                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M38.125 11.8958C37.3125 11.0833 36 11.0833 35.1875 11.8958L25 22.0625L14.8125 11.875C14 11.0625 12.6875 11.0625 11.875 11.875C11.0625 12.6875 11.0625 14 11.875 14.8125L22.0625 25L11.875 35.1875C11.0625 36 11.0625 37.3125 11.875 38.125C12.6875 38.9375 14 38.9375 14.8125 38.125L25 27.9375L35.1875 38.125C36 38.9375 37.3125 38.9375 38.125 38.125C38.9375 37.3125 38.9375 36 38.125 35.1875L27.9375 25L38.125 14.8125C38.9167 14.0208 38.9167 12.6875 38.125 11.8958Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </div>
                                                        <div class="popup__item content" data-popup="0">

                                                            <table id="customers">
                                                                <tr>
                                                                    <h5>Jonior Size Chart</h5>
                                                                    <th>Brand Size</th>
                                                                    <th>Age</th>
                                                                    <th>India</th>
                                                                    <th>Chest</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>4-5y</td>
                                                                    <td>5-6y</td>
                                                                    <td>6-7y</td>
                                                                    <td>7-8y</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4-5y</td>
                                                                    <td>5-6y</td>
                                                                    <td>6-7y</td>
                                                                    <td>7-8y</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>27</td>
                                                                    <td>28</td>
                                                                    <td>29</td>
                                                                    <td>30</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ernst Handel</td>
                                                                    <td>Roland Mendel</td>
                                                                    <td>Austria</td>
                                                                    <td></td>
                                                                </tr>



                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="star-rating"></div>

                                                <div class="see-more">

                                                    <img class="see"
                                                        src="{{ asset('user/assets/images/No_contact_delivery_final._CB432269791_.png') }}"
                                                        alt="">

                                                    <img class="see"
                                                        src="{{ asset('user/assets/images/icon-amazon-delivered._CB485933725_.png') }}"
                                                        alt="">

                                                    <img class="see"
                                                        src="{{ asset('user/assets/images/icon-returns._CB484059092_.png') }}"
                                                        alt="">
                                                    <img class="see"
                                                        src="{{ asset('user/assets/images/icon-returns._CB484059092_.png') }}"
                                                        alt="">

                                                </div>
                                                <div class="Viduradi">
                                                    <p class="Vidu">cash on <br> Delivary</p>
                                                    <p class="Vidu">Pay On <br> Delivery|| &nbsp; </p>
                                                    <p class="Vidu">Easy <br> Returns|| &nbsp;</p>
                                                    <p class="Vidu">Viduradi <br> Delivary</p>

                                                </div>

                                                <div class="star-rating"></div>

                                                <div class="description">
                                                    <ul class="cata">
                                                        <li>Care Instructions: {{ $productDetails['wash_care'] }}
                                                        </li>
                                                        <li>Fit Type: {{ $productDetails['fit'] }}</li>
                                                        <li>Occassion: {{ $productDetails['occassion'] }}</li>
                                                        <li>Material: {{ $productDetails['fabric'] }}</li>
                                                        <li>Pattern: {{ $productDetails['pattern'] }}</li>
                                                    </ul>
                                                </div>

                                            </div>

                                    </div>
                                    <div class="col-lg-4 col md-4 col-sm-12">
                                        <div class="side-box">
                                            <div class="main-info">

                                                <div class="getAttrPrice">
                                                    @if ($discounted_price > 0)
                                                        <p>Price: ₹<span
                                                                class="offer">{{ $productDetails['product_price'] }}</span><br>
                                                            <span
                                                                class="offer-off">{{ $productDetails['product_discount'] }}%</span>
                                                            <span id="price">₹ {{ $discounted_price }}</span>
                                                        </p>
                                                    @else
                                                        <p><span id="price">₹
                                                                {{ $productDetails['product_price'] }}</span></p>
                                                    @endif
                                                </div>

                                                <div>
                                                    <p class="April"><span class="offer-off">Free
                                                            Delivery</span> @php print date('l jS M', strtotime(Carbon::now()->addDay(7))) @endphp <br><span
                                                            class="offer-off">Details</span></p>
                                                </div>
                                                <hr>

                                                <p>Product-Qty :</p>

                                                <p></p>
                                                <div class="qty-input Product">


                                                    <button type="button" name="" class="btn btnItemQtyUpdate qtyMinus less "
                                                        data-cartid="">
                                                        -
                                                    </button>
                                                    <input class="quantity" type="number" name="product-qty" value="1">
                                                    <button type="button" name="" value="up"
                                                        class="btn btnItemQtyUpdate qtyPlus" data-cartid="">
                                                        +
                                                    </button>
                                                </div>

                                                <p>&nbsp;</p>
                                                <hr>
                                                <button type="submit"
                                                    class="btn btn-warning btn-lg add-cart-Wishlist">Add to
                                                    Cart</button>

                                                @php $countWishlist = Wishlist::countWishlist($productDetails['id']) @endphp
                                                <button type="button"
                                                    class="btn btn-warning btn-lg add-cart-Wishlist update-wishlist"
                                                    data-productid="{{ $productDetails['id'] }}">
                                                    Add to Wishlist
                                                    @if ($countWishlist > 0)
                                                        <span><i class="fa fa-heart"></i></span>
                                                    @else
                                                        <span><i class="far fa-heart"></i></span>
                                                    @endif
                                                </button>

                                                <hr>



                                            </div>

                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <br>

                <br>


            </div>

        </div>




        <!-- fast row end -->

        <hr>



        </div>
    </section>



    <div class="description">

        <ul>
            <h4 class="cata">EYEBOGLER Regular Fit Men's Cotton T-Shirt</h4>
            <li>Care Instructions: {{ $productDetails['wash_care'] }}</li>
            <li>Fit Type: {{ $productDetails['fit'] }}</li>
            <li>Occassion: {{ $productDetails['occassion'] }}</li>
            <li>Material: {{ $productDetails['fabric'] }}</li>
            <li>Pattern: {{ $productDetails['pattern'] }}</li>
        </ul>
    </div>


    <section>
        <div class="container-fluid">

            <div class="cata">
                <h2>Related Product's</h2>

            </div>
            <?php
            $todaysDeals = Product::todaysDeal();
            ?>
            <div class="gallery gallery-responsive portfolio_slider">

                @foreach ($todaysDeals as $deal)
                    <?php
                    $category = category::where('id', $deal['category_id'])->first();
                    $discounted_price = Product::getDiscountedPrice($deal['id']);
                    ?>
                    <div class="inner col-mg-2.4"><a href="/product/{{ $deal['id'] }}">
                            <img src="{{ asset('product/image') }}/{{ $deal['main_image'] }}">
                        </a>
                        <h4 class="text-left">{{ $deal['product_name'] }}</h4>
                        <hr>
                        <h5 class="text-left"></h5>
                        <p class="listprice">{{ $category['category_name'] }}</p>
                        <div class="row">
                            @if ($discounted_price > 0)
                                <div class="col-12 special-products_pricing"><span class="offer fsemibold">₹
                                        {{ $discounted_price }}
                                    </span> <span class="product-price"
                                        style="text-decoration: line-through; color: rgb(204, 204, 204);">₹
                                        {{ $deal['product_price'] }}
                                    </span> <span class="percentage-off">{{ $deal['product_discount'] }} %
                                        OFF</span>
                                </div>
                            @else
                                <div class="col-12 special-products_pricing"><span class="offer fsemibold">₹
                                        {{ $deal['product_price'] }}
                                    </span>
                                </div>
                            @endif


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <style>
        -->.moretext {
            display: none;
        }

    </style>

    @include('section.footer')

    {{-- update price with size --}}
    <script>
        $('.getPriceOnSize').on('click', function() {
            var size = $(this).val();
            $("#sizeName").text("Size: " + size);
            // if (size == '') {
            //     alert('Please select size');
            //     return false;
            // }
            var product_id = $(this).attr('product-id');
            var mrp = $(this).attr('product-mrp');
            // alert(mrp);
            // return false;
            // alert(product_id);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/get-product-price',
                data: {
                    "size": size,
                    "product_id": product_id
                },
                type: 'post',
                success: function(resp) {
                    // alert(resp.final_price);
                    // return false;
                    if (resp['discount_price'] > 0) {
                        $(".getAttrPrice").html(
                            "<p>Price: ₹<span class=\"offer\">" +
                            resp['product_price'] +
                            "</span><br> <span class=\"offer-off\">" +
                            resp['discount'] +
                            "%</span> <span id=\"price\">₹ " +
                            resp['final_price'] +
                            "</span></p>")
                    } else {
                        $(".getAttrPrice").html(
                            "<p><span id=\"price\">₹ " +
                            resp['product_price'] +
                            "</span></p>")
                    }
                },
                error: function() {
                    alert('Error');
                },
            });
        });
    </script>

    {{-- return error without login in wishlist --}}
    <script>
        $('.loginCheck').click(function() {
            alert('You have to login to add this product in wishlist');
        });
    </script>

    {{-- insert/update product in wishlist --}}
    <script>
        $('.update-wishlist').click(function() {
            var product_id = $(this).data('productid');
            // alert(product_id);
            // return false;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/update-wishlist',
                data: {
                    'product_id': product_id
                },
                success: function(resp) {
                    // alert(resp);
                    if (resp.action == 'add') {
                        $('button[data-productid=' + product_id + ']').html(
                            'Add to Wishlist <span><i class="fa fa-heart"></i></span>');
                    } else if (resp.action == 'remove') {
                        $('button[data-productid=' + product_id + ']').html(
                            'Add to Wishlist <span><i class="far fa-heart"></i></span>');
                    } else if (resp['error']) {
                        window.location = '/login'
                    }
                },
                error: function() {

                }
            })
        });
    </script>

    {{-- color name --}}
    <script>
        $('.color').click(function() {
            var color = $(this).val();
            // alert(color);
            // return false;
            $("#colorName").text("Colour: " + color);
        });
    </script>

    {{-- Update item quantity --}}
    <script>
        $(document).on('click', '.btnItemQtyUpdate', function() {

            if ($(this).hasClass('qtyMinus')) {
                //if qtyMinus button click by user
                var quantity = $(this).next().val();
                if (quantity <= 1) {
                    alert("Item quantity must be 1 or graeter!");
                    return false;
                } else {
                    new_qty = parseInt(quantity) - 1;
                    $('.quantity').val(new_qty);
                    // alert(new_qty); return false;
                }

            }
            if ($(this).hasClass('qtyPlus')) {
                //if qtyPlus button click by user 
                var quantity = $(this).prev().val();
                new_qty = parseInt(quantity) + 1;
                $('.quantity').val(new_qty);
                // alert(new_qty); return false;
                // alert(new_qty);
                // return false;

            }
            var cartid = $(this).data('cartid');
        });
    </script>

    <script>
        /* Slick needs no get Reinitialized on window Resize after it was destroyed */
        $(window).on('load resize orientationchange', function() {
            $('.sertificates-slider').each(function() {
                var $carousel = $(this);
                /* Initializes a slick carousel only on mobile screens */
                // slick on mobile
                if ($(window).width() > 991) {
                    if ($carousel.hasClass('slick-initialized')) {
                        $carousel.slick('unslick');
                    }
                } else {
                    if (!$carousel.hasClass('slick-initialized')) {
                        $carousel.slick({
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            // mobileFirst: true,
                            prevArrow: '<span class="Slick-Prev"></span>',
                            nextArrow: '<span class="Slick-Next"></span>',
                            responsive: [{
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 2,
                                        lidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 576,
                                    settings: {
                                        slidesToShow: 1
                                    }
                                }
                            ]
                        });
                    }
                }
            });
        });
    </script>

    <script>
        $(function() {

            $('.carousel').carousel({
                interval: 4000
            });

        });


        $(document).ready(function() {
            $('.carousel .carousel-caption').css('zoom', $('.carousel').width() / 1250);
        });

        $(window).resize(function() {
            $('.carousel .carousel-caption').css('zoom', $('.carousel').width() / 1250);
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".SlickCarousel").slick({
                rtl: false,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 800,
                arrows: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                pauseOnHover: false,

                easing: "linear",
                responsive: [{
                        breakpoint: 801,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 641,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 481,
                        settings: {
                            slidesToShow: 1.5,
                        }
                    },
                ],
            })
        })
    </script>

    <script>
        jQuery('.card-slider').slick({
            slidesToShow: 5,
            autoplay: true,
            slidesToScroll: 1,
            dots: false,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1.5
                    }
                }
            ]
        });

        let cards = document.querySelectorAll('.card');
        let card;
        let modal = document.querySelector('.modal');
        let closeButton = document.querySelector('.modal__close-button');
        let page = document.querySelector('.page');
        const cardBorderRadius = 20;
        const openingDuration = 600; //ms
        const closingDuration = 600; //ms
        const timingFunction = 'cubic-bezier(.76,.01,.65,1.38)';

        var Scrollbar = window.Scrollbar;
        Scrollbar.init(document.querySelector('.modal__scroll-area'));


        function flipAnimation(first, last, options) {
            let firstRect = first.getBoundingClientRect();
            let lastRect = last.getBoundingClientRect();

            let deltas = {
                top: firstRect.top - lastRect.top,
                left: firstRect.left - lastRect.left,
                width: firstRect.width / lastRect.width,
                height: firstRect.height / lastRect.height
            };

            return last.animate([{
                transformOrigin: 'top left',
                borderRadius: `
            ${cardBorderRadius/deltas.width}px / ${cardBorderRadius/deltas.height}px`,
                transform: `
              translate(${deltas.left}px, ${deltas.top}px) 
              scale(${deltas.width}, ${deltas.height})
            `
            }, {
                transformOrigin: 'top left',
                transform: 'none',
                borderRadius: `${cardBorderRadius}px`
            }], options);
        }

        cards.forEach((item) => {
            item.addEventListener('click', (e) => {
                jQuery('.card-slider').slick('slickPause');
                card = e.currentTarget;
                page.dataset.modalState = 'opening';
                card.classList.add('card--opened');
                card.style.opacity = 0;
                document.querySelector('body').classList.add('no-scroll');

                let animation = flipAnimation(card, modal, {
                    duration: openingDuration,
                    easing: timingFunction,
                    fill: 'both'
                });

                animation.onfinish = () => {
                    page.dataset.modalState = 'open';
                    animation.cancel();
                };
            });
        });

        closeButton.addEventListener('click', (e) => {
            page.dataset.modalState = 'closing';
            document.querySelector('body').classList.remove('no-scroll');

            let animation = flipAnimation(card, modal, {
                duration: closingDuration,
                easing: timingFunction,
                direction: 'reverse',
                fill: 'both'
            });

            animation.onfinish = () => {
                page.dataset.modalState = 'closed';
                card.style.opacity = 1;
                card.classList.remove('card--opened');
                jQuery('.card-slider').slick('slickPlay');
                animation.cancel();
            };
        });
    </script>

    <script>
        $('.gallery-responsive').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1.5
                    }
                }
            ]
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".set > a").on("click", function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this)
                        .siblings(".content")
                        .slideUp(200);
                    $(".set > a i")
                        .removeClass("fa-minus")
                        .addClass("fa-plus");
                } else {
                    $(".set > a i")
                        .removeClass("fa-minus")
                        .addClass("fa-plus");
                    $(this)
                        .find("i")
                        .removeClass("fa-plus")
                        .addClass("fa-minus");
                    $(".set > a").removeClass("active");
                    $(this).addClass("active");
                    $(".content").slideUp(200);
                    $(this)
                        .siblings(".content")
                        .slideDown(200);
                }
            });
        });
    </script>

    <script>
        $('.custom-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 300,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 550,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1.5,
                        infinite: true,
                        dots: false
                    }
                }

            ]
        });
    </script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    <script>
        // The function toggles more (hidden) text when the user clicks on "Read more". The IF ELSE statement ensures that the text 'read more' and 'read less' changes interchangeably when clicked on.
        $('.moreless-button').click(function() {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });
    </script>

    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            vertical: true,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            verticalSwiping: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        vertical: false,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        vertical: false,
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        vertical: false,
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 380,
                    settings: {
                        vertical: false,
                        slidesToShow: 2,
                    }
                }
            ]
        });
        Splitting();
    </script>

    <script>
        function zoom(e) {
            var zoomer = e.currentTarget;
            e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
            e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
            x = offsetX / zoomer.offsetWidth * 100
            y = offsetY / zoomer.offsetHeight * 100
            zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }
    </script>

    {{-- Size chart popup --}}
    <script>
        (function() {
            const popup = document.querySelector(".popup");
            const popupItems = document.querySelectorAll(".popup__item");
            const popupWrap = document.querySelector(".popup__wrap");
            const popupOverlay = document.querySelector(".popup__overlay");
            const popupClose = document.querySelector(".popup__close");
            const btnsPopup = document.querySelectorAll(".btn-popup");

            btnsPopup.forEach((btn) => {
                btn.addEventListener("click", () => {
                    showPopup(btn.getAttribute("data-popup"));
                });
            });

            const showPopup = (index) => {
                popupItems.forEach((popup) => {
                    popup.classList.remove("show");
                });
                popup.style.display = "block";
                document
                    .querySelector(`.popup__item[data-popup="${index}"]`)
                    .classList.add("show");

                popupWrap.classList = `popup__wrap popup__wrap--${index}`;
                setTimeout(() => {
                    popup.classList.add("show");
                }, 10);
            };

            const closePopup = () => {
                popup.classList.remove("show");
                setTimeout(() => {
                    popup.style.display = "";
                    popupWrap.classList = `popup__wrap`;
                }, 500);
            };

            popupOverlay.addEventListener("click", closePopup);
            popupClose.addEventListener("click", closePopup);

        })();
    </script>

    <script src="user/assets/js/jquery.superslides.min.js"></script>
    <script src="user/assets/js/bootstrap-select.js"></script>
    <script src="user/assets/js/inewsticker.js"></script>
    <script src="user/assets/js/bootsnav.js"></script>
    <script src="user/assets/js/images-loded.min.js"></script>
    <script src="user/assets/js/isotope.min.js"></script>
    <script src="user/assets/js/owl.carousel.min.js"></script>
    <script src="user/assets/js/baguetteBox.min.js"></script>
    <script src="user/assets/js/form-validator.min.js"></script>
    <script src="user/assets/js/contact-form-script.js"></script>
    <script src="user/assets/js/custom.js"></script>

    <script src="{{ asset('image-zoom/js/zoom-image.js') }}"></script>
    <script src="{{ asset('image-zoom/js/main.js') }}"></script>

</body>

</html>
