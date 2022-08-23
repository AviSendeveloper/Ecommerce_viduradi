<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="fUTilar1AmuMDF5Acw4kfh9DxhXUYLi8E6WIetRX">
    <!-- Title -->
    <title>VIDURADI</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/1640748995viduradifav.png" />
    <!-- Bootstrap -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/fontawesome.css') }}">
    <!-- icofont -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/icofont.min.css') }}">
    <!-- Sidemenu Css -->
    <link href="{{ asset('assets/admin/plugins/fullside-menu/css/dark-side-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/fullside-menu/waves.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/admin/css/plugin.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/admin/css/jquery.tagit.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-coloroicker.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/select2.min.css') }}">
    <!-- stylesheet -->

    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/common.css') }}" rel="stylesheet" />



    <link href="{{ asset('assets/admin/css/jquery-ui.css') }}" rel="stylesheet" type="text/css">


</head>

<body>
    <div class="page">
        <div class="page-main">
            <!-- Header Menu Area Start -->
            @include('layout.header')
            <!-- Header Menu Area End -->
            <div class="wrapper">
                <!-- Side Menu Area Start -->
                @include('layout.nav')
                <!-- Main Content Area Start -->

                <div class="content-area">

                    <div class="mr-breadcrumb">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="heading">Add New Coupon <a class="add-btn"
                                        href="/admin-coupon"><i class="fas fa-arrow-left"></i> Back</a></h4>
                                <ul class="links">
                                    <li>
                                        <a href="admin">Dashboard </a>
                                    </li>
                                    <li>
                                        <a href="/admin-coupon">Coupons</a>
                                    </li>
                                    <li>
                                        <a href="/add-admin-coupon">Add New Coupon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="add-product-content1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-description">
                                    <div class="body-area">
                                        <div class="gocover"
                                            style="background: url(assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
                                        </div>
                                        <div class="alert alert-success validation" style="display: none;">
                                            <button type="button" class="close alert-close"><span>×</span></button>
                                            <p class="text-left"></p>
                                        </div>
                                        <div class="alert alert-danger validation" style="display: none;">
                                            <button type="button" class="close alert-close"><span>×</span></button>
                                            <ul class="text-left">
                                            </ul>
                                        </div>
                                        <table class="responsive" cellpadding="20">
                                            <form method="post"
                                                @if (isset($coupon['id'])) action="/add-edit-coupon/{{ $coupon['id'] }}" @else action="/add-edit-coupon" @endif>
                                                @csrf

                                                @if (empty($coupon['coupon_code']))
                                                    <tr>
                                                        <td><strong>Coupon Option</strong></td>
                                                        <td><input type="radio" id="automaticCoupon"
                                                                name="coupon_option" value="Automatic"
                                                                required="">Automatic&nbsp;&nbsp;
                                                            <input type="radio" id="manualCoupon" name="coupon_option"
                                                                value="Manual" required="">Manual&nbsp;&nbsp;
                                                        </td>
                                                    </tr>

                                                    <tr id="couponField">
                                                        <td><strong>Coupon Code</strong></td>
                                                        <td><input type="text" name="coupon_code"></td>
                                                    </tr>
                                                @else
                                                    <input type="hidden" name="coupon_option"
                                                        value="{{ $coupon['coupon_option'] }}">
                                                    <tr id="couponField">
                                                        <td><strong>Coupon Code</strong></td>
                                                        <td><span>{{ $coupon['coupon_code'] }}</span></td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td><strong>Coupon Type</strong></td>
                                                    <td><input type="radio" name="coupon_type" value="Multiple Times"
                                                            required=""
                                                            @if (isset($coupon['coupon_type']) && $coupon['coupon_type'] == 'Multiple Times') checked="" @endif>Multiple
                                                        Times&nbsp;&nbsp;
                                                        <input type="radio" name="coupon_type" value="Single Times"
                                                            @if (isset($coupon['coupon_type']) && $coupon['coupon_type'] == 'Single Times') checked="" @endif
                                                            required="">Single Times &nbsp;&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Amount Type</strong></td>
                                                    <td><input type="radio" name="amount_type" value="Percentage"
                                                            required=""
                                                            @if (isset($coupon['ammount_type']) && $coupon['ammount_type'] == 'Percentage') checked="" @endif>Percentage
                                                        &nbsp;(in %)&nbsp;
                                                        <input type="radio" name="amount_type" value="Fixed" required=""
                                                            @if (isset($coupon['ammount_type']) && $coupon['ammount_type'] == 'Fixed') checked="" @endif>Fixed
                                                        &nbsp;(in INR or USD)&nbsp;
                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr id="couponField">
                                                    <td><strong>Amount</strong></td>
                                                    <td><input type="text" name="amount" placeholder="Enter Ammount"
                                                            required=""
                                                            @if (isset($coupon['ammount'])) value="{{ $coupon['ammount'] }}" @endif>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Select Users</strong></td>
                                                    <td>
                                                        <select name="users[]" class="input-field multipe-select"
                                                            multiple="">
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user['email'] }}"
                                                                    @if (in_array($user['email'], $selUsers)) selected="" @endif>
                                                                    {{ $user['email'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Select Category</strong></td>
                                                    <td>
                                                        <select class="input-field multipe-select" name="categories[]"
                                                            required="" multiple="">
                                                            <option value="">Select</option>
                                                            @foreach ($categories as $section)
                                                                <optgroup label="{{ $section['name'] }}"> </optgroup>
                                                                @foreach ($section['categories'] as $category)
                                                                    <option value="{{ $category['id'] }}"
                                                                        @if (in_array($category['id'], $selCats)) selected="" @endif>
                                                                        &nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;{{ $category['category_name'] }}
                                                                    </option>
                                                                    @foreach ($category['subcategories'] as $subcategories)
                                                                        <option value="{{ $subcategories['id'] }}"
                                                                            @if (in_array($subcategories['id'], $selCats)) selected="" @endif>
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;{{ $subcategories['category_name'] }}
                                                                        </option>
                                                                    @endforeach
                                                                @endforeach
                                                            @endforeach

                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr id="couponField">
                                                    <td><strong>Expiry Date</strong></td>
                                                    <td><input type="date" name="expiry_date"
                                                            data-inputmask-alias="datetime"
                                                            data-inputmask-inputformat="dd/mm/yyyy"
                                                            @if (isset($coupon['expiry_date'])) value="{{ $coupon['expiry_date'] }}" @endif
                                                            data-mask required=""></td>
                                                </tr>
                                                <tr>
                                                    <td><button type="submit" class="btn btn-primary">Submit</button>
                                                    </td>
                                                </tr>
                                            </form>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area End -->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var mainurl = "https://ecom.viduradi.com";
        var admin_loader = 1;
        var whole_sell = 6;
        var getattrUrl = 'admin/getattributes';
        var curr = {
            "id": 1,
            "name": "INR",
            "sign": "Rs.",
            "value": 1,
            "is_default": 1
        };
        // console.log(curr);
    </script>

    <!-- Dashboard Core -->
    <script src="{{ asset('assets/admin/js/vendors/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/vue.js') }}"></script>
    <script src="{{ asset('assets/admin/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jqueryui.min.js') }}"></script>
    <!-- Fullside-menu Js-->
    <script src="{{ asset('assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/fullside-menu/waves.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tag-it.js') }}"></script>
    <script src="{{ asset('assets/admin/js/nicEdit.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/notify.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.canvasjs.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/load.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/select2.min.js') }}"></script>
    <!-- Custom Js-->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <!-- AJAX Js-->
    <script src="{{ asset('assets/admin/js/myscript.js') }}"></script>

    <script type="text/javascript">
        //show /hide coupon Code for manual and automatic

        $("#manualCoupon").click(function() {
            $("#couponField").show();
        });
        $("#automaticCoupon").click(function() {
            $("#couponField").hide();
        });
    </script>
    <script>
        $(".multipe-select").select2({
            // maximumSelectionLength: 2
        });
    </script>

</body>

</html>
