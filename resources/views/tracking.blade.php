<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('user/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('user/assets/css/banner.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/header/assets/css/vendor/vendor.min.css')}}">
    <!-- <link rel="stylesheet" href="user/header/assets/css/plugins/plugins.min.css"> -->
    <link rel="stylesheet" href="{{asset('user/header/assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/header/assets/css/responsive.min.css')}}">
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
    <?php use App\Models\products_images; 
            use App\Models\Product;
    ?>
    @include('section/header')
    <section class="tracking-section">
        <div class="container">

            <div class="vhguyh">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div>
                            <div class="_1ZJv_G"><span class="_3jRtMt">Delivery Address</span></div>
                            <br>
                            <div class="_3LuzG3">
                                <div class="_1XnLtY">
                                    <div class="_3N-YiT">{{$orders['name']}}</div>
                                </div>
                                <div class="_104tHa">{{$orders['email']}}</div>
                                <div class="_1QP4w_">{{$orders['address']}}, {{$orders['locality']}}, City.
                                    {{$orders['city']}}, Pin -
                                    {{$orders['pincode']}}, {{$orders['state']}}</div>
                                <div class="_1XnLtY _2u8s7u">
                                    <div><span class="_3N-YiT">Phone number</span>
                                        <div class="_1egRWs">{{$orders['phone']}}</div>
                                    </div>
                                </div>
                                <br>
                                <span class="_2K1cxl">This order is also tracked by {{$orders['id']}}</span>
                            </div>
                        </div>
                    </div>
                    @if($orders['order_status']=="Cancel")

                    @else
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="GYYy">
                            <div class="_2LAzKy"><a href="/cancel/{{$orders['id']}}"><img
                                        src="{{asset('user/assets/images/rong.svg')}}" class="_1dki8b ">
                                    <span class="_2YpB-X">Cancel</span></a>
                            </div>

                            <div class="_2LAzKy"><img src="{{asset('user/assets/images/contactusIcon.svg')}}"
                                    class="_1dki8b "> <span class="_2YpB-X">Need help?</span></div>
                        </div>
                    </div>
                    @endif

                </div>
            </div>

            @foreach($orders['orders_products'] as $ordersProducts)
            <?php $order_product = Product::where('id', $ordersProducts['product_id'])->first(); ?>
            <div class="vhguyh">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <h4>{{$ordersProducts['product_name']}}</h4>
                        <p>Color: {{$ordersProducts['product_color']}}</p>
                        <p>Size:{{$ordersProducts['product_size']}}</p>
                        <p>Quantity:{{$ordersProducts['product_qty']}}</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="gfgbf3">

                            <h4>₹{{$ordersProducts['product_price'] * $ordersProducts['product_qty']}}</h4>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-12">
                        <div class="fgtf">
                            <img class="_3c6JdB" src="{{asset('product/image')}}/{{$order_product['main_image']}}"
                                alt="">
                        </div>
                    </div>
                    <!-- <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="GYYy">
                            <div class="_2LAzKy"><img src="{{asset('user/assets/images/rong.svg')}}" class="_1dki8b ">
                                <span class="_2YpB-X">Cancel</span>
                            </div>

                            <div class="_2LAzKy"><img src="{{asset('user/assets/images/contactusIcon.svg')}}"
                                    class="_1dki8b "> <span class="_2YpB-X">Need help?</span></div>
                        </div>


                    </div> -->
                </div>


            </div>
            @endforeach
            <div class="vhguyh">
                <div class="row">
                    <div class="col-md-1 col-lg-1 col-sm-12">
                        <div class="fgtf">
                            <img class="_3c6JdB" src="user/assets/images/cello.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <h4>{{$orders['name']}}</h4>
                        <p>Payment Method: {{$orders['payment_method']}}</p>
                    </div>
                    @if($orders['order_status'] == 'Cancel')
                    <div class="col-md-8 col-lg-8 col-sm-12">

                        <div class="gfgbf3">
                            <div class="row justify-content-between">
                                <div class="order-tracking active">
                                    <span class="is-complete"></span>
                                    <p>Ordered<br><span>{{date('D, M d', strtotime($orders['created_at']))}}</span></p>
                                </div>
                                <div class="order-tracking track2 active">
                                    <span class="is-complete"></span>
                                    <p>Cancel<br></p>
                                </div>


                            </div>
                        </div>

                        <p class="text-center mt-4">Your request is being processed. It may take up to 4 hours for your
                            refund(if any) to be initiated.</p>
                    </div>
                    @else
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="gfgbf3">
                            <div class="row justify-content-between">
                                <div class="order-tracking active">
                                    <span class="is-complete"></span>
                                    <p>Ordered<br><span>{{date('D, M d', strtotime($orders['created_at']))}}</span></p>
                                </div>
                                <?php $shipped =$orders['created_at']->addDays(2);  
                                      $out_for_delivery =$orders['created_at']->addDays(8);
                                ?>
                                <div
                                    class="order-tracking @if($orders['order_status']=='Shipped' || $orders['order_status']=='Delivered' || $orders['order_status']=='Completed') active @endif ">
                                    <span class="is-complete"></span>
                                    <p>Shipped<br><span>{{date('D, M d', strtotime($shipped))}}</span></p>
                                </div>
                                <div
                                    class="order-tracking @if($orders['order_status']=='Delivered' || $orders['order_status']=='Completed') active @endif">
                                    <span class="is-complete"></span>
                                    <p>Out for
                                        Delivered<br><span>{{date('D, M d', strtotime($out_for_delivery))}}</span></p>
                                </div>
                                <div class="order-tracking @if($orders['order_status']=='Completed') active @endif">
                                    <span class="is-complete"></span>
                                    <p>Delivered<br><span>{{date('D, M d', strtotime($out_for_delivery))}}</span></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="col-md-2 col-lg-2 col-sm-12">
                        <div class="GYYy">
                            <!-- <div class="_2LAzKy"><img src="user/assets/images/rong.svg" class="_1dki8b "> <span
                                    class="_2YpB-X">Cancel</span></div>

                            <div class="_2LAzKy"><img src="user/assets/images/contactusIcon.svg" class="_1dki8b "> <span
                                    class="_2YpB-X">Need help?</span></div> -->
                        </div>


                    </div>
                </div>


            </div>

        </div>
    </section>

    @include('section/footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        var email = $('#email').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/subscribe',
            data: {
                email: email
            },
            type: 'post',
            success: function(resp) {
                if (resp['success']) {
                    swal("Congratulations!", "You have been subscribed to our Newsletter!",
                        "success")
                } else {
                    swal("", "You have already subscribed to our Newsletter!", "error")
                }

            },
            error: function() {
                alert(error);
            }
        });
    });
    </script>

    <script>
    $(window).on('load resize orientationchange', function() {
        $('.sertificates-slider').each(function() {
            var $carousel = $(this);
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
            interval: 5000
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


    <!-- <script src="header/assets/js/vendor/vendor.min.js"></script> -->
    <script src="header/assets/js/plugins/plugins.min.js"></script>


    <script src="header/assets/js/main.js"></script>
    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i
            class="fa fa-arrow-up"></i></a>


    <!-- <script src="user/assets/js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="user/assets/js/popper.min.js"></script> -->
    <!-- <script src="user/assets/js/bootstrap.min.js"></script> -->

    <script src="{{asset('user/assets/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('user/assets/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('user/assets/js/inewsticker.js')}}"></script>
    <!-- <script src="user/assets/js/bootsnav.js"></script> -->
    <script src="{{asset('user/assets/js/images-loded.min.js')}}"></script>
    <script src="{{asset('user/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/assets/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('user/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('user/assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('user/assets/js/custom.js')}}"></script>

</body>

</html>