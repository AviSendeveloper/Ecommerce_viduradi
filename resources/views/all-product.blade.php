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
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#slider").slider();
        });
    </script>
</head>

<body>
    @include('section/header')
    <section class="product-section">
        <div class="banner product-banner " style="margin-bottom:30px;">
            <img src="user/assets/images/img1.webp" alt="" style="width:100%;">
        </div>
        <div class="containe">

            <div class="breadcrumbs-base">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-item"><a class="breadcrumbs-crumb" href="#"><span
                                itemprop="title">Home</span></a></li>
                    <?php echo $categoryDetails['breadcrumbs']; ?>
                </ul>
            </div>
            <div class="drop-down-right-side">

                <form name="sortProducts" id="sortProducts">
                    <input type="hidden" name="url" id="url" value="">
                    <div class="row align-items-baseline">
                        <div class="col-md-10 col-lg-10">
                            <div class="panel tol" style="text-align: left;">
                                <h4 class="panel-title">
                                    <a class="styu" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <b> {{ $categoryDetails['catDetails']['category_name'] }}</b><span
                                            class="listprice">({{ $totalProduct }} Products
                                            Available)</span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2">
                            <select class="grfgdfg" name="sort" id="sort">
                                <option value="latest_product" @if (isset($_GET['sort']) && $_GET['sort'] == 'latest_product') selected @else @endif>
                                    Latest Product <i class="far fa-angle-down"></i></option>
                                <option value="highest_price" @if (isset($_GET['sort']) && $_GET['sort'] == 'highest_price') checked @else @endif>
                                    Highest Price First</option>
                                <option value="lowest_price" @if (isset($_GET['sort']) && $_GET['sort'] == 'lowest_price') checked @else @endif>
                                    Lowest Price First</option>
                            </select>
                        </div>

                    </div>
                </form>
            </div>
            <div class="pading">

                <div class="row ">
                    @if (!isset($_REQUEST['search']))
                        <div class="col-md-3 col-lg-3 col-sm-12 mobl-list">


                            <div class="vertical-filters-filters header-container">
                                <span class="header-title"><b>FILTERS</b></span>
                            </div>
                            <br>
                            <div class=" tntgbhn">

                                {{-- Category --}}
                                <div class="panel panl">

                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Category
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
                                        <form action="">

                                        </form>
                                        <div class="maxer">
                                            @foreach ($categoryList as $category)
                                                <div class="customcheckbox"><input type="checkbox" name="category[]"
                                                        value="{{ $category['id'] }}" class="category" id="S">
                                                    <label class="d-flex align-items-center label-wrapper">
                                                        <span>{{ $category['category_name'] }}</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                                <!-- end of panel -->


                                {{-- Brand --}}
                                <div class="panel panl">

                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Brand
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
                                        <form action="">

                                        </form>
                                        <div class="maxer">
                                            @foreach ($brandArray as $brand)
                                                <div class="customcheckbox"><input type="checkbox" name="brand[]"
                                                        value="{{ $brand }}" class="brand"
                                                        id="{{ $brand }}"> <label
                                                        class="d-flex align-items-center label-wrapper">
                                                        <span>{{ $brand }}</span>
                                                    </label></div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                                <!-- end of panel -->


                                {{-- Price --}}
                                <div class="panel panl">


                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Price
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
                                        <form action="">

                                        </form>
                                        <div class="maxer">
                                            {{-- <div class="customcheckbox">
                                                <input class="price" type="radio" name="price[]"
                                                    value="209-799" id="209">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>Rs. 209 to Rs. 1357</span>
                                                </label>
                                            </div>
                                            <div class="customcheckbox">
                                                <input class="price" type="radio" name="price[]"
                                                    value="800-2505" id="1357">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>Rs. 1357 to Rs. 2505</span>
                                                </label>
                                            </div>
                                            <div class="customcheckbox">
                                                <input class="price" type="radio" name="price[]"
                                                    value="2505-3653" id="2505">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>Rs. 2505 to Rs. 3653</span>
                                                </label>
                                            </div>
                                            <div class="customcheckbox">
                                                <input class="price" type="radio" name="price[]"
                                                    value="3653-4801" id="3653">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>Rs. 3653 to Rs. 4801</span>
                                                </label>
                                            </div> --}}
                                            <div class="customcheckbox">
                                                <input type="text" name="minimum_range" id="minimum_range"
                                                    class="form-control" value="0" readonly/>
                                            </div>
                                            <div style="padding-top:12px">
                                                <div id="price" class="price"></div>
                                                {{-- <span id="range"/></span> --}}
                                                <input type="hidden" id="range" value="0-100000" />
                                            </div>
                                            <div class="customcheckbox">
                                                <input type="text" name="maximum_range" id="maximum_range"
                                                    class="form-control" value="100000" readonly/>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end of panel -->


                                {{-- Color --}}
                                <div class="panel panl">

                                    <h4 class="panel-title"> <a class="vertical-filters-header"> COLOR </a></h4>
                                    <div class="panel-bod">
                                        <form name="sortProducts" id="sortProducts">
                                            <input type="hidden" name="url" id="url" value="">
                                            <div class="maxer">
                                                <div id="" class="list">
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="1709"><span
                                                                data-colorhex="blue"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(0, 116, 217);"></span>Blue
                                                            <span class="colour-num"> </span>
                                                            <input class="color" type="checkbox" name="color[]"
                                                                value="Blue" id="Blue">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="943"><span
                                                                data-colorhex="green"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(94, 177, 96);"></span>Green
                                                            <span class="colour-num">
                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Green" id="Green">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="786"><span
                                                                data-colorhex="black"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(54, 69, 79);"></span> Black
                                                            <span class="colour-num">
                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Black" id="Black">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="746"><span
                                                                data-colorhex="maroon"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(176, 48, 96);"></span>
                                                            Maroon
                                                            <span class="colour-num">

                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Maroon" id="Maroon">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="726"><span
                                                                data-colorhex="navy blue"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(60, 68, 119);"></span>
                                                            Navy Blue<span class="colour-num"> </span>
                                                            <input class="color" type="checkbox" name="color[]"
                                                                value="Navy Blue" id="Navy Blue">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="644"><span
                                                                data-colorhex="white"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            White
                                                            <span class="colour-num">

                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="White" id="White">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="588"><span
                                                                data-colorhex="yellow"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(234, 220, 50);"></span>
                                                            Yellow

                                                            <span class="colour-num">

                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Yellow" id="Yellow">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="532"><span
                                                                data-colorhex="pink"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(241, 169, 196);"></span>
                                                            Pink
                                                            <span class="colour-num">


                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Pink" id="Pink">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="506"><span
                                                                data-colorhex="orange"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(242, 141, 32);"></span>
                                                            Orange

                                                            <span class="colour-num">


                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Orange" id="Orange">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="489"><span
                                                                data-colorhex="red"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(211, 75, 86);"></span>
                                                            Red
                                                            <span class="colour-num">

                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Red" id="Red">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="472"><span
                                                                data-colorhex="beige"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(232, 230, 207);"></span>
                                                            Beige
                                                            <span class="colour-num">


                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Beige" id="Beige">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="441"><span
                                                                data-colorhex="grey"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(159, 168, 171);"></span>
                                                            Grey
                                                            <span class="colour-num">


                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Grey" id="Grey">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="346"><span
                                                                data-colorhex="mustard"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(204, 156, 51);"></span>
                                                            Mustard
                                                            <span class="colour-num">


                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Mustard" id="Mustard">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="306"><span
                                                                data-colorhex="brown"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(145, 80, 57);"></span>
                                                            Brown
                                                            <span class="colour-num">


                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Brown" id="Brown">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="267"><span
                                                                data-colorhex="purple"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(128, 0, 128);"></span>
                                                            Purple
                                                            <span class="colour-num">


                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Purple" id="Purple">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="common-customCheckbox" data-count="242"><span
                                                                data-colorhex="cream"
                                                                class="colour-label colour-colorDisplay"
                                                                style="background-color: rgb(237, 230, 185);"></span>
                                                            Cream
                                                            <span class="colour-num">


                                                            </span><input class="color" type="checkbox"
                                                                name="color[]" value="Cream" id="Cream">
                                                            <div class="common-checkboxIndicator"></div>
                                                        </label>
                                                    </div>
                                                    <span id="next">+ More</span>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- end of panel -->


                                {{-- Discount --}}
                                <div class="panel panl">


                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Discount Range
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
                                        <form action="">

                                        </form>
                                        <div class="maxer">

                                            <div class="customcheckbox">
                                                <input class="discount" type="radio" name="discount[]" value="10"
                                                    id="10">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>10% and above</span>
                                                </label>
                                            </div>
                                            <div class="customcheckbox">
                                                <input class="discount" type="radio" name="discount[]" value="30"
                                                    id="30">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>30% and above</span>
                                                </label>
                                            </div>
                                            <div class="customcheckbox">
                                                <input class="discount" type="radio" name="discount[]" value="50"
                                                    id="50">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>50% and above</span>
                                                </label>
                                            </div>
                                            <div class="customcheckbox">
                                                <input class="discount" type="radio" name="discount[]" value="70"
                                                    id="70">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>70% and above</span>
                                                </label>
                                            </div>
                                            <div class="customcheckbox">
                                                <input class="discount" type="radio" name="discount[]" value="90"
                                                    id="90">
                                                <label class="d-flex align-items-center label-wrapper">
                                                    <span>90% and above</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end of panel -->


                                {{-- Size --}}
                                <div class="panel panl">

                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Size
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
                                        <form action="">

                                        </form>
                                        <div class="maxer">

                                            <div class="customcheckbox"><input type="checkbox" name="size[]" value="S"
                                                    class="size" id="S"> <label
                                                    class="d-flex align-items-center label-wrapper">
                                                    <span>S</span>
                                                </label></div>
                                            <div class="customcheckbox"><input type="checkbox" name="size[]" value="M"
                                                    class="size" id="M"> <label
                                                    class="d-flex align-items-center label-wrapper">
                                                    <span>M</span>
                                                </label></div>
                                            <div class="customcheckbox"><input type="checkbox" name="size[]" value="L"
                                                    class="size" id="L"> <label
                                                    class="d-flex align-items-center label-wrapper">
                                                    <span>L</span>
                                                </label></div>
                                            <div class="customcheckbox"><input type="checkbox" name="size[]" value="XL"
                                                    class="size" id="XL"> <label
                                                    class="d-flex align-items-center label-wrapper">
                                                    <span>XL</span>
                                                </label></div>
                                            <div class="customcheckbox"><input type="checkbox" name="size[]"
                                                    value="XXL" class="size" id="XXL"> <label
                                                    class="d-flex align-items-center label-wrapper">
                                                    <span>XXL</span>
                                                </label></div>
                                            <div class="customcheckbox"><input type="checkbox" name="size[]"
                                                    value="XXXL" class="size" id="XXXL"> <label
                                                    class="d-flex align-items-center label-wrapper">
                                                    <span>XXXL</span>
                                                </label></div>

                                        </div>
                                    </div>

                                </div>
                                <!-- end of panel -->


                                {{-- Fabric --}}
                                <div class="panel panl">

                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Fabric
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
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
                                <!-- end of panel -->


                                {{-- Sleeve --}}
                                <div class="panel panl">

                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Sleeve
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
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
                                <!-- end of panel -->


                                {{-- Pattern --}}
                                <div class="panel panl">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="vertical-filters-header">
                                                Pattern
                                            </a>
                                        </h4>
                                    </div>

                                    <div class="panel-bod">
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
                                <!-- end of panel -->


                                {{-- Occassion --}}
                                <div class="panel panl">

                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Occassion
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
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
                                <!-- end of panel -->


                                {{-- Fit --}}
                                <div class="panel panl">

                                    <h4 class="panel-title">
                                        <a class="vertical-filters-header">
                                            Fit
                                        </a>
                                    </h4>


                                    <div class="panel-bod">
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

                        </div>
                    @endif
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

    {{-- Filer using ajax --}}
    <script>
        $(document).ready(function() {
            $('#sort').on('change', function() {
                var sort = $(this).val();
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        brand: brand,
                        fabric: fabric,
                        color: color,
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
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        brand: brand,
                        fabric: fabric,
                        color: color,
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

            $(".size").on('click', function() {
                var category = get_filter('category');
                var size = get_filter('size');
                var brand = get_filter('brand');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        size: size,
                        discount: discount,
                        brand: brand,
                        fabric: fabric,
                        color: color,
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

            $(".discount").on('click', function() {
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        brand: brand,
                        fabric: fabric,
                        color: color,
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

            $(".color").on('click', function() {
                var category = get_filter('category');
                var color = get_filter('color');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var brand = get_filter('brand');
                var fabric = get_filter('fabric');
                var sleeve = get_filter('sleeve');
                var pattern = get_filter('pattern');
                var fit = get_filter('fit');
                var occassion = get_filter('occassion');
                var sort = $("#sort input[type=radio]:checked").val();
                var url = $("#url").val();
                // alert(color)
                $.ajax({
                    url: url,
                    method: "get",
                    data: {
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        brand: brand,
                        color: color,
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

            $(".brand").on('click', function() {
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        brand: brand,
                        fabric: fabric,
                        color: color,
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
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        fabric: fabric,
                        color: color,
                        brand: brand,
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
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        fabric: fabric,
                        color: color,
                        brand: brand,
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
                var category = get_filter('category');
                var fabric = get_filter('fabric');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
                var brand = get_filter('brand');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        fabric: fabric,
                        color: color,
                        brand: brand,
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
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        fabric: fabric,
                        color: color,
                        brand: brand,
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

            $(".category").on('click', function() {
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        fabric: fabric,
                        color: color,
                        brand: brand,
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

            // Jquery range slider
            $( "#price" ).slider({
                range: true,
                min: 0,
                max: 100000,
                values: [ 0, 100000],
                slide:function(event, ui){
                    $("#minimum_range").val(ui.values[0]);
                    $("#maximum_range").val(ui.values[1]);
                    // $('range_price').val(ui.values[1] - ui.values[0]);
                    var range = $('#range').val(ui.values[0] + '-' + ui.values[1]);
                    load_price(ui.values[0], ui.values[1]);
                }
            });
            
            function load_price(minimum_range, maximum_range)
            {
                var category = get_filter('category');
                var brand = get_filter('brand');
                var size = get_filter('size');
                var discount = get_filter('discount');
                var price = $('#range').val();
                var color = get_filter('color');
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
                        category: category,
                        price: price,
                        size: size,
                        discount: discount,
                        fabric: fabric,
                        color: color,
                        brand: brand,
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
            }


            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }
        });
    </script>



    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("open-modal");

        // Get the <span> element that closes the modal
        var span = document.getElementById("close");

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
        var modal2 = document.getElementById("myModal2");
        var btn2 = document.getElementById("open-modal2");
        var span2 = document.getElementById("close2");
        btn2.onclick = function() {
            modal2.style.display = "block";
        }
        span2.onclick = function() {
            modal2.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>

    <script>
        $(document).ready(function() {

            var list = $(".list .form-check");
            var numToShow = 3;
            var button = $("#next");
            var numInList = list.length;
            list.hide();
            if (numInList > numToShow) {
                button.show();
            }
            list.slice(0, numToShow).show();

            button.click(function() {
                var showing = list.filter(':visible').length;
                list.slice(showing - 1, showing + numToShow).fadeIn();
                var nowShowing = list.filter(':visible').length;
                if (nowShowing >= numInList) {
                    button.hide();
                }
            });

        });
    </script>
</body>

</html>
