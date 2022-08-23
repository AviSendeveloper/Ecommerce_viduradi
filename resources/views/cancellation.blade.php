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

    @include('section/header')
    <?php use App\Models\Product; ?>
    <section class="tracking-section">
        <div class="container">

            @foreach($orders['orders_products'] as $product)
            <?php $image = Product::where('id', $product['product_id'])->first(); ?>
            <div class="vhguyh">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-12">

                        <div class="_1ZJv_G"><span class="_3jRtMt">{{$product['product_name']}}</span></div>

                        <div class="_3LuzG3">
                            <div class="_1QP4w_">Qty:{{$product['product_qty']}}</div>
                            <br>
                            <div class="_1XnLtY _2u8s7u"><span class="_3N-YiT">₹{{$product['product_price']}}</span></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-12">
                        <img class="_3c6JdB" src="{{asset('product/image')}}/{{$image['main_image']}}" alt="">
                    </div>

                </div>

            </div>
            @endforeach
            <form action="/cancel-reason-submit" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$orders['id']}}">
                <div class="vhguyh">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <input type="radio" id="html" name="fav_language"
                                value="I want to chang address for the order">
                            <label for="html">I want to chang address for the order</label><br>
                            <input type="radio" id="css" name="fav_language"
                                value="I have purchased the product elsewhere">
                            <label for="css">I have purchased the product elsewhere</label><br>
                            <input type="radio" id="javascript" name="fav_language"
                                value="I want to convert my order to Prepaid">
                            <label for="javascript">I want to convert my order to Prepaid</label><br>
                            <input type="radio" id="javascript1" name="fav_language"
                                value="I want to convert my order to Prepaid">
                            <label for="javascript">I want to convert my order to Prepaid</label>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <button class="btn btn-primary"><a href="/order" style="text-decoration: none; color: white;">Back Order Details</a></button>
                            <button type="submit" class="btn btn-danger">Cancel Order</button>
                        </div>
                    </div>


                </div>
            </form>
    </section>

    <!-- <script src="user/header/assets/js/vendor/vendor.min.js"></script> -->
    <script src="http://127.0.0.1:8000/user/header/assets/js/plugins/plugins.min.js"></script>


    <script src="http://127.0.0.1:8000/user/header/assets/js/main.js"></script>

    <div class="additional-footer-container">
        <div class="additional-heading">HomeGrown Indian Brand</div>
        <div class="additional-footer-content">
            <div class="additional-item">
                <h3 class="additional-stats">Over <span class="fbold"><b>3 Million</b></span>
                    Happy Customers</h3>
            </div>
        </div>
    </div>

    @include('section/footer')
    <meta name="csrf-token" content="CTnAddoGiUHPK8SNzUaGpxxqE9OfnqfL7jDbo7st" />
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
    <script src="{{asset('header/assets/js/plugins/plugins.min.js')}}"></script>


    <script src="{{asset('header/assets/js/main.js')}}"></script>
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