<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/banner.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/vendor/vendor.min.css') }}">
    <!-- <link rel="stylesheet" href="user/header/assets/css/plugins/plugins.min.css"> -->
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/header/assets/css/responsive.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
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

<body>
    <?php use App\Models\category; ?>
    <?php use App\Models\Product; ?>
    <?php use App\Models\Cart; ?>
    <?php use App\Models\SpecialDiscount; ?>
    <?php use App\Models\Wishlist; ?>
    <?php $totalArr = Cart::userCartTotalPrice(); ?>
    {{-- <h1>{{gettype($totalArr['special_discount'])}}</h1> --}}
    @include('section/header')
    @include('section/banner')
    <section>
        <div class="container-fluid">
            <div class="deals">
                <h3>Today's Deals
                    <!-- <span>See all Deals</span> -->
                </h3>
            </div>
            <?php
            $todaysDeals = Product::todaysDeal();
            ?>
            <div class="gallery gallery-responsive portfolio_slider">
                @foreach ($todaysDeals as $deal)
                    <div class="inner"><a href="/product/{{ $deal['id'] }}"><img
                                src="{{ asset('product/image') }}/{{ $deal['main_image'] }}">
                            <h4>{{ $deal['product_name'] }} ({{ $deal['product_code'] }})</h4>
                        </a>
                    </div>
                    @if (Auth::check())
                        @php $countWishlist = Wishlist::countWishlist($deal['id']) @endphp
                        @if ($countWishlist > 0)
                            <div data-v-2df2a16c="" class="wishlistIcon wishlistActive update-wishlist"
                                data-productid="{{ $deal['id'] }}">
                                <i class="fad fa-heart-circle"></i>
                            </div>
                        @else
                            <div data-v-2df2a16c="" class="wishlistIcon wishlistActive update-wishlist"
                                data-productid="{{ $deal['id'] }}">
                                <i class="far fa-heart"></i>
                            </div>
                        @endif
                    @else
                        <div data-v-2df2a16c="" class="wishlistIcon wishlistActive loginCheck"
                            data-productid="{{ $deal['id'] }}"><i
                                class="far fa-heart"></i></div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <?php $newArrivals = Product::newArrivals(); ?>
    <section>
        <div class="cata">
            <h2>NEW ARRIVALS</h2>
        </div>
        <div class="container-fluid">
            <div class="SlickCarousel">
                @foreach ($newArrivals as $newArrival)
                    <div class="ProductBlock">
                        <div class="Content">
                            <div class="img-fill img-hig">
                                <a href="/product/{{ $newArrival['id'] }}">
                                    <img src="{{ asset('product/image') }}/{{ $newArrival['main_image'] }}"
                                        alt="">
                                </a>
                            </div>
                            @if (Auth::check())
                                @php $countWishlist = Wishlist::countWishlist($newArrival['id']) @endphp
                                @if ($countWishlist > 0)
                                    <div data-v-2df2a16c="" class="wishlistIcon wishlistActive update-wishlist"
                                        data-productid="{{ $newArrival['id'] }}">
                                        <i class="fad fa-heart-circle"></i>
                                    </div>
                                @else
                                    <div data-v-2df2a16c="" class="wishlistIcon wishlistActive update-wishlist"
                                        data-productid="{{ $newArrival['id'] }}">
                                        <i class="far fa-heart"></i>
                                    </div>
                                @endif
                            @else
                                <div data-v-2df2a16c="" class="wishlistIcon wishlistActive loginCheck"
                                    data-productid="{{ $newArrival['id'] }}"><i
                                        class="far fa-heart"></i></div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    @include('section/category')


    <section>
        <div class="cata">
            <h2>Top Selling </h2>
        </div>
        <div class="container-fluid">


            <div class="SlickCarousel productlist">
                @foreach ($featuredArrayChunk as $key => $featuredItems)
                    @foreach ($featuredItems as $featuredItem)
                        <?php
                        $category = category::where('id', $featuredItem['category_id'])->first();
                        $discounted_price = Product::getDiscountedPrice($featuredItem['id']);
                        ?>
                        <div class="ProductBlock">
                            <div class="Content">
                                <div class="img-fill img-hig">
                                    <a href="/product/{{ $featuredItem['id'] }}">
                                        <img src="{{ asset('product/image') }}/{{ $featuredItem['main_image'] }}"
                                            alt="">
                                    </a>
                                </div>
                                @if (Auth::check())
                                    @php $countWishlist = Wishlist::countWishlist($featuredItem['id']) @endphp
                                    @if ($countWishlist > 0)
                                        <div data-v-2df2a16c="" class="wishlistIcon wishlistActive update-wishlist"
                                            data-productid="{{ $featuredItem['id'] }}">
                                            <i class="fad fa-heart-circle"></i>
                                        </div>
                                    @else
                                        <div data-v-2df2a16c="" class="wishlistIcon wishlistActive update-wishlist"
                                            data-productid="{{ $featuredItem['id'] }}">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    @endif
                                @else
                                    <div data-v-2df2a16c="" class="wishlistIcon wishlistActive loginCheck"
                                        data-productid="{{ $featuredItem['id'] }}"><i
                                            class="far fa-heart"></i></div>
                                @endif
                                <h5 class="text-left">{{ $featuredItem['product_name'] }}</h5>
                                <p class="listprice">{{ $category['category_name'] }}</p>
                                <div class="row">
                                    @if ($discounted_price > 0)
                                        <div class="col-12 special-products_pricing"><span class="offer fsemibold">₹
                                                {{ $discounted_price }}</span> <span class="product-price"
                                                style="text-decoration: line-through; color: rgb(204, 204, 204);">₹
                                                {{ $featuredItem['product_price'] }}</span> <span
                                                class="percentage-off">{{ $featuredItem['product_discount'] }}%
                                                OFF</span>
                                        </div>
                                    @else
                                        <div class="col-12 special-products_pricing"><span class="offer fsemibold">₹
                                                {{ $featuredItem['product_price'] }}</span></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </section>

    @include('section/footer_top')
    @include('section/footer')

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
                        $('div[data-productid=' + product_id + ']').html(
                            '<i class="fad fa-heart-circle"></i>');
                    } else if (resp.action == 'remove') {
                        $('div[data-productid=' + product_id + ']').html(
                            '<i class="far fa-heart"></i>');
                    }
                },
                error: function() {
                    alert('Error');
                }
            })
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
                            nextArrow: '.sertificates__btn--next',
                            prevArrow: '.sertificates__btn--prev',
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
                slidesToShow: 4,
                slidesToScroll: 1,
                pauseOnHover: false,
                appendArrows: $(".Container .Head .Arrows"),
                prevArrow: '<span class="Slick-Prev"></span>',
                nextArrow: '<span class="Slick-Next"></span>',
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
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
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
    <!-- <script src="header/assets/js/vendor/vendor.min.js"></script> -->
    <script src="header/assets/js/plugins/plugins.min.js"></script>


    <script src="header/assets/js/main.js"></script>
    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i
            class="fa fa-arrow-up"></i></a>


    <!-- <script src="user/assets/js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="user/assets/js/popper.min.js"></script> -->
    <!-- <script src="user/assets/js/bootstrap.min.js"></script> -->

    <script src="user/assets/js/jquery.superslides.min.js"></script>
    <script src="user/assets/js/bootstrap-select.js"></script>
    <script src="user/assets/js/inewsticker.js"></script>
    <!-- <script src="user/assets/js/bootsnav.js"></script> -->
    <script src="user/assets/js/images-loded.min.js"></script>
    <script src="user/assets/js/isotope.min.js"></script>
    <script src="user/assets/js/owl.carousel.min.js"></script>
    <script src="user/assets/js/baguetteBox.min.js"></script>
    <script src="user/assets/js/form-validator.min.js"></script>
    <script src="user/assets/js/contact-form-script.js"></script>
    <script src="user/assets/js/custom.js"></script>

</body>

</html>
