<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="nvED5cnlgBDLB2tF4PxPjS7KlUVNQFAgX7Mi6kbY">
    <!-- Title -->
    <title>VIDURADI</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/1640748995viduradifav.png') }}" />
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

    <!-- Main Css   asset-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/select2.min.css') }}">
    <!-- stylesheet -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/common.css') }}" rel="stylesheet" />
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
                                <h4 class="heading">Add Role <a class="add-btn" href="/manage-roles"><i
                                            class="fas fa-arrow-left"></i> Back</a></h4>
                                <ul class="links">
                                    <li>
                                        <a href="admin">Dashboard </a>
                                    </li>
                                    <li>
                                        <a href="/manage-roles">Manage Roles</a>
                                    </li>
                                    <li>
                                        <a href="admin/role/create">Add Role</a>
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
                                        <form action="/homepage-customization" method="POST">
                                            @csrf
                                            <div class="alert alert-success validation" style="display: none;">
                                                <button type="button" class="close alert-close"><span>×</span></button>
                                                <p class="text-left"></p>
                                            </div>
                                            <div class="alert alert-danger validation" style="display: none;">
                                                <button type="button" class="close alert-close"><span>×</span></button>
                                                <ul class="text-left">
                                                </ul>
                                            </div>

                                            <?php
                                            use App\Models\HomePageCustomization;
                                            $homepageModel = new HomePageCustomization();
                                            $permission = $homepageModel->permissionList();
                                            ?>

                                            <h5 class="text-center">Permissions</h5>
                                            <hr>

                                            <div class="row justify-content-center">
                                                <div class="col-lg-4 d-flex justify-content-between">
                                                    <label class="control-label">Slider *</label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="slider" value="1"
                                                            @if ($permission['slider'] == 1) checked="" @else @endif>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-4 d-flex justify-content-between">
                                                    <label class="control-label">Service *</label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="service" value="1"
                                                            @if ($permission['service'] == 1) checked="" @else @endif>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-lg-4 d-flex justify-content-between">
                                                    <label class="control-label">Blog *</label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="blog" value="1"
                                                            @if ($permission['blog'] == 1) checked="" @else @endif>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-4 d-flex justify-content-between">
                                                    <label class="control-label">Footer Links *</label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="footer_link" value="1"
                                                            @if ($permission['footer_link'] == 1)checked="" @else  @endif>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-lg-4 d-flex justify-content-between">
                                                    <label class="control-label">Social Link *</label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="social_link" value="1"
                                                            @if ($permission['social_link'] == 1) checked="" @else @endif>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-4 d-flex justify-content-between">
                                                    {{-- <label class="control-label">Footer Links *</label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="footer_link" value="1"
                                                            @if ($permission['footer_link'] == 1)checked="" @else  @endif>
                                                        <span class="slider round"></span>
                                                    </label> --}}
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="left-area">

                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <button class="addProductSubmit-btn" type="submit">Create
                                                        Role</button>
                                                </div>
                                            </div>
                                        </form>
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
            "value": "1",
            "is_default": "1"
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
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>




</body>

</html>
