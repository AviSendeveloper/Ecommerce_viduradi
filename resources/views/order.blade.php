<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('user/assets/css/banner.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/header/assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/header/assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/header/assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/header/assets/css/responsive.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/header.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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
</head>

<body>
    @include('section.header')
    
    <div class="ygghuihi banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="_3p9Ct9">
                        <div class="_3E8aIl _1ejeYK">
                            <div class="_1Rot47">
                                <div class="B7BJU0"><span>Filters</span></div>
                            </div>
                            <div class="Okfx8U">
                                <div id="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sort" value="delivered_order"
                                            id="sort2">
                                        <label class="form-check-label" for="flexRadioDefault1"
                                            style="padding-bottom: 11px;">
                                            Delivered Order
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sort" value="shipped_order"
                                            id="sort1">
                                        <label class="form-check-label" for="flexRadioDefault2"
                                            style="padding-bottom: 11px;">
                                            Shipped Order
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sort" value="cancel_order"
                                            id="sort">
                                        <label class="form-check-label" for="flexRadioDefault2"
                                            style="padding-bottom: 11px;">
                                            Cancel Order
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sort" value="new_order"
                                            id="sort3">
                                        <label class="form-check-label" for="flexRadioDefault2"
                                            style="padding-bottom: 11px;">
                                            New Order
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12 " id="filter_orders">
                    @include('ajax-order')
                   
                </div>

            </div>
        </div>

    </div>
    @include('section.footer')
    <script src="{{asset('user/assets/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('user/assets/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('user/assets/js/inewsticker.js')}}"></script>
    <script src="{{asset('user/assets/js/bootsnav.js')}}"></script>
    <script src="{{asset('user/assets/js/images-loded.min.js')}}"></script>
    <script src="{{asset('user/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/assets/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('user/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('user/assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('user/assets/js/custom.js')}}"></script>
    <script>
    $(document).ready(function() {
                $('#sort').on('change', function() {
                    var sort = $(this).val();
                    $.ajax({
                        type: 'get',
                        data: {
                            sort: sort,
                        },
                        url: "/order",
                        success: function(data) {
                            $('#filter_orders').html(data);
                        }
                    });
                });

                $('#sort1').on('change', function() {
                    var sort = $(this).val();
                    $.ajax({
                        type: 'get',
                        data: {
                            sort: sort,
                        },
                        url: "/order",
                        success: function(data) {
                            $('#filter_orders').html(data);
                        }
                    });
                });

                $('#sort2').on('change', function() {
                    var sort = $(this).val();
                    $.ajax({
                        type: 'get',
                        data: {
                            sort: sort,
                        },
                        url: "/order",
                        success: function(data) {
                            $('#filter_orders').html(data);
                        }
                    });
                });
                $('#sort3').on('change', function() {
                    var sort = $(this).val();
                    $.ajax({
                        type: 'get',
                        data: {
                            sort: sort,
                        },
                        url: "/order",
                        success: function(data) {
                            $('#filter_orders').html(data);
                        }
                    });
                });
                });
    </script>
</body>

</html>