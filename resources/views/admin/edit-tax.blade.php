<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <!-- Title -->
    <title>Tax</title>
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
    <!-- Main Css -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/vendor/css/select2.min.css') }}"> -->
    <!-- stylesheet -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/common.css') }}" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                                <h4 class="heading">Edit Tax <a class="add-btn" href="/manage-tax"><i
                                            class="fas fa-arrow-left"></i> Back</a></h4>
                                <ul class="links">
                                    <li>
                                        <a href="admin">Tax </a>
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
                                        <form action="/edit-tax" method="POST">
                                            @csrf
                                            <input type="hidden" name="tax_id" value="{{ $tax['id'] }}">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="left-area">
                                                        <h4 class="heading">Country *</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="input-field" name="country"
                                                        placeholder="Country" required="" value="{{ $tax['country'] }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="left-area">
                                                        <h4 class="heading">CGST *</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="input-field" name="cgst"
                                                        placeholder="CGST" required="" value="{{ $tax['cgst'] }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="left-area">
                                                        <h4 class="heading">SGST *</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="input-field" name="sgst"
                                                        placeholder="SGST" required="" value="{{ $tax['sgst'] }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="left-area">
                                                        <h4 class="heading">IGST *</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" class="input-field" name="igst"
                                                        placeholder="IGST" required="" value="{{ $tax['igst'] }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="left-area">
                                                        <h4 class="heading">Apply Tax *</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" id="before" name="apply_tax" value="Before Discount" {{ $tax['apply_tax'] == 'Before Discount' ? 'checked':''}}>
                                                        <label class="form-check-label" for="before">Before Discount</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" id="after" name="apply_tax" value="After Discount" {{ $tax['apply_tax'] == 'After Discount' ? 'checked':''}}>
                                                        <label class="form-check-label" for="after">After Discount</label>
                                                      </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h5 class="text-center">status</h5>
                                            <hr>

                                            <div class="row justify-content-center">
                                                <div class="col-lg-4 d-flex justify-content-between">
                                                    <label class="control-label">Status *</label>
                                                    <label class="switch">
                                                        <input type="checkbox" name="status" @if ($tax['status'] == 1) value="1" @else value="0" @endif>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="left-area">

                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <button class="addProductSubmit-btn" type="submit">Update
                                                        Tax</button>
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
    <script src="{{ asset('/assets/admin/js/vendors/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/vendors/vue.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/jqueryui.min.js') }}"></script>
    <!-- Fullside-menu Js-->
    <script src="{{ asset('/assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/plugins/fullside-menu/waves.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/plugin.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/Chart.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/tag-it.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/nicEdit.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/bootstrap-colorpicker.min.j') }}s"></script>
    <script src="{{ asset('/assets/admin/js/notify.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/jquery.canvasjs.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/load.js') }}"></script>
    <script src="{{ asset('/assets/vendor/js/select2.min.js') }}"></script>
    <!-- Custom Js-->
    <script src="{{ asset('/assets/admin/js/custom.js') }}"></script>
    <!-- AJAX Js-->
    <script src="{{ asset('/assets/admin/js/myscript.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>




</body>

</html>
