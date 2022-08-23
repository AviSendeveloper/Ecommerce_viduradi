<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="user/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="user/assets/css/banner.css">

    <link rel="stylesheet" href="user/assets/css/style.css">
    <link rel="stylesheet" href="user/header/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="user/header/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="user/header/assets/css/style.min.css">
    <link rel="stylesheet" href="user/header/assets/css/responsive.min.css">
    <link rel="stylesheet" href="user/assets/css/header.css">
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
    @include('section/header')
    <section class="banner-section">
        <div class="banner" style="margin-bottom:30px;">
            <img src="user/assets/images/img1.webp" alt="" style="width:100%;">
        </div>
        <div class="container-fluid">
            <span class="list-list"><a href="/">Home </a> <i class="fa fa-angle-right"></i><?php echo $categoryDetails['breadcrumbs']; ?>
            </span>
            <div class="pading">
                <div class="row ">
                    <div class="col-md-3 col-lg-3 col-sm-12 tntgbhn">


                        <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="styu" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            {{ $categoryDetails['catDetails']['category_name'] }}<span
                                                class="listprice">({{ count($categoryProducts) }} Products
                                                Available)</span>
                                        </a>
                                    </h4>

                                </div>
                                <!-- <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    
                                    <div class="maxer">
                                        <div class="customcheckbox"><input type="checkbox"> <label
                                                class="d-flex align-items-center label-wrapper">
                                                <span>Hoodies</span>
                                            </label></div>
                                        

                                    </div>
                                </div>
                            </div> -->
                            </div>
                            <!-- end of panel -->

                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed styu" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Sort By
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <form name="sortProducts" id="sortProducts">
                                            <input type="hidden" name="url" id="url" value="{{ $url }}">
                                            <div class="maxer">
                                                <div id="">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sort"
                                                            value="latest_product" id="sort"
                                                            @if (isset($_GET['sort']) && $_GET['sort'] == 'latest_product') checked @else @endif>
                                                        <label class="form-check-label" for="flexRadioDefault1"
                                                            style="padding-left: 20px;padding-bottom: 11px;">
                                                            Latest Product
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sort"
                                                            value="highest_price" id="sort1"
                                                            @if (isset($_GET['sort']) && $_GET['sort'] == 'highest_price') checked @else @endif>
                                                        <label class="form-check-label" for="flexRadioDefault2"
                                                            style="padding-left: 20px;padding-bottom: 11px;">
                                                            Highest Price First
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sort"
                                                            value="lowest_price" id="sort2"
                                                            @if (isset($_GET['sort']) && $_GET['sort'] == 'lowest_price') checked @else @endif>
                                                        <label class="form-check-label" for="flexRadioDefault2"
                                                            style="padding-left: 20px;padding-bottom: 11px;">
                                                            Lowest Price First
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end of panel -->

                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed styu" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            Fabric <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <form action="">

                                        </form>
                                        <div class="maxer">
                                            @foreach ($febricArr as $fabric)
                                                <div class="customcheckbox">
                                                    <input class="fabric" type="checkbox" name="fabric[]"
                                                        value="{{ $fabric }}" id="{{ $fabric }}">
                                                    <label class="d-flex align-items-center label-wrapper">
                                                        <span>{{ $fabric }}</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of panel -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed styu" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Sleeve <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <form action="">

                                        </form>
                                        <div class="maxer">
                                            @foreach ($sleeveArr as $sleeve)
                                                <div class="customcheckbox"><input type="checkbox" name="sleeve[]"
                                                        value="{{ $sleeve }}" class="sleeve"
                                                        id="{{ $sleeve }}"> <label
                                                        class="d-flex align-items-center label-wrapper">
                                                        <span>{{ $sleeve }}</span>
                                                    </label></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end of panel -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed styu" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Pattern <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <form action="">

                                        </form>
                                        <div class="maxer">
                                            @foreach ($patternArr as $pattern)
                                                <div class="customcheckbox"><input type="checkbox" name="pattern[]"
                                                        value="{{ $pattern }}" class="pattern"
                                                        id="{{ $pattern }}"> <label
                                                        class="d-flex align-items-center label-wrapper">
                                                        <span>{{ $pattern }}</span>
                                                    </label></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end of panel -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingeight">
                                    <h4 class="panel-title">
                                        <a class="collapsed styu" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseeight" aria-expanded="false"
                                            aria-controls="collapseeight">
                                            Occassion <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseeight" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingeight">
                                    <div class="panel-body">
                                        <form action="">

                                        </form>
                                        <div class="maxer">
                                            @foreach ($occassionArr as $occassion)
                                                <div class="customcheckbox"><input type="checkbox" name="occassion[]"
                                                        value="{{ $occassion }}" class="occassion"
                                                        id="{{ $occassion }}"> <label
                                                        class="d-flex align-items-center label-wrapper">
                                                        <span>{{ $occassion }}</span>
                                                    </label></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end of panel -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed styu" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            Fit <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <form action="">

                                        </form>
                                        <div class="maxer">
                                            @foreach ($fitArr as $fit)
                                                <div class="customcheckbox"><input type="checkbox" name="fit[]"
                                                        value="{{ $fit }}" class="fit"
                                                        id="{{ $fit }}"> <label
                                                        class="d-flex align-items-center label-wrapper">
                                                        <span>{{ $fit }}</span>
                                                    </label></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end of panel -->

                        </div>

                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 filter_products">
                        @include('ajax-product-listing')
                    </div>
                </div>
            </div>

        </div>
    </section>


    @include('section/footer')
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
        $(document).ready(function() {
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion, #bs-collapse')
                .on('show.bs.collapse', function(a) {
                    $(a.target).prev('.panel-heading').addClass('active');
                })
                .on('hide.bs.collapse', function(a) {
                    $(a.target).prev('.panel-heading').removeClass('active');
                });
        });
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
    <script>
        $(document).ready(function() {
            $('#sort').on('change', function() {
                var sort = $(this).val();
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var url = $("#url").val();
                // alert(url)
                $.ajax({
                    type: 'get',
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    url: url,
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                });
            });

            $(".fabric").on('click', function() {
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            $(".sleeve").on('click', function() {
                var sleeve = get_filter('sleeve');
                var fabric = get_filter('fabric');
                // var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            $(".pattern").on('click', function() {
                // var brand = get_filter('brand');
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            $(".fit").on('click', function() {
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            $(".occassion").on('click', function() {
                // var brand = get_filter('brand');
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });


            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }
        });
    </script>


    <!-- ----------------------------------------------------------------------------------------------------- -->
    <script>
        $(document).ready(function() {
            $('#sort1').on('change', function() {
                var sort = $(this).val();
                var url = $("#url").val();
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                // alert(url)
                $.ajax({
                    type: 'get',
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    url: url,
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                });
            });
            $(".fabric").on('click', function() {
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort1 input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            $(".sleeve").on('click', function() {
                var sleeve = get_filter('sleeve');
                var fabric = get_filter('fabric');
                // var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort1 input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            $(".pattern").on('click', function() {
                // var brand = get_filter('brand');
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort1 input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            $(".fit").on('click', function() {
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort1 input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        brand: brand,
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            $(".occassion").on('click', function() {
                // var brand = get_filter('brand');
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort1 input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }
        });
    </script>
    <!-- ---------------------------------------------------------------------------------------------- -->
    <script>
        $(document).ready(function() {
            $('#sort2').on('change', function() {
                var sort = $(this).val();
                var url = $("#url").val();
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                // alert(url)
                $.ajax({
                    type: 'get',
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    url: url,
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                });
            });
            $(".fabric").on('click', function() {
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort2 input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });
            $(".sleeve").on('click', function() {
                var sleeve = get_filter('sleeve');
                var fabric = get_filter('fabric');
                // var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort2 input[type=radio]:checked").val();
                var url = $("#url").val();
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        fabric: fabric,
                        sleeve: sleeve,
                        pattern: pattern,
                        fit: fit,
                        occassion: occassion,
                        sort: sort,
                        url: url
                    },
                    success: function(data) {
                        $('.filter_products').html(data);
                    }
                })
            });

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }
        });
    </script>


</body>

</html>
