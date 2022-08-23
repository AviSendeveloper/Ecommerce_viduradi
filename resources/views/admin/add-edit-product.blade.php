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
    <!-- Main Css -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/vendor/css/select2.min.css') }}"> -->
    <!-- stylesheet -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/common.css') }}" rel="stylesheet" />
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
                                <h4 class="heading">{{ $title }}</h4>
                                <ul class="links">
                                    <li>
                                        <a href="/admin">Dashboard </a>
                                    </li>

                                    <li>
                                        <a href="/add-product">Add Product</a>
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
                                            style="background: url(/assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
                                        </div>
                                        <form @if (empty($productdata['id'])) action="{{ url('/add-edit-product') }}" @else action="{{ url('/add-edit-product/' . $productdata['id']) }}" @endif id="product_form" method="POST"
                                            enctype="multipart/form-data">
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
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">product Name *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="product Name"
                                                        name="product_name" @if (!empty($productdata['product_name'])) value="{{ $productdata['product_name'] }}" @endif required="">
                                                </div>
                                            </div>
                                             <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Brand Name *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <select class="input-field " name="brand_id" id="section_id"
                                                        required="">
                                                        <option>Select Brand</option>
                                                        @foreach ($brands as $brand)
                                                            <option value="{{ $brand['id'] }}" @if (!empty($productdata['brand_id'])) selected="" @endif >{{ $brand['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Select Category *
                                             </h4>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <select class="input-field" name="category_id"  required="">
                                             <option value="">Select</option>
                                                @foreach($categories as $section)
                                                  <optgroup label="{{$section['name']}}" > </optgroup>
                                                  @foreach($section['categories'] as $category)
                                                    <option value="{{$category['id']}}"@if(!empty($productdata['category_id']) && $productdata['category_id']==$category['id'])selected="" @endif>&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;{{$category['category_name']}}</option>
                                                    @foreach($category['subcategories'] as $subcategories)
                                                    <option value="{{$subcategories['id']}}" @if(!empty($productdata['category_id']) && $productdata['category_id']==$subcategories['id'])selected="" @endif>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;{{$subcategories['category_name']}}</option>
                                                  @endforeach
                                                  @endforeach
                                                @endforeach
                                             
                                          </select>
                                       </div>
                                    </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">product Code *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="product Code"
                                                        name="product_code" @if (!empty($productdata['product_code'])) value="{{ $productdata['product_code'] }}" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Group Code *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="Group Code"
                                                        name="group_code" @if (!empty($productdata['group_code'])) value="{{ $productdata['group_code'] }}" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">product color *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="product Color"
                                                        name="product_color" @if (!empty($productdata['product_color'])) value="{{ $productdata['product_color'] }}" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">product Price *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="product Price"
                                                        name="product_price" @if (!empty($productdata['product_price'])) value="{{ $productdata['product_price'] }}" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">product Discount *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="product Discount"
                                                        name="product_discount" @if (!empty($productdata['product_discount'])) value="{{ $productdata['product_discount'] }}" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">product Weight *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="product Weight"
                                                        name="product_weight" @if (!empty($productdata['product_weight'])) value="{{ $productdata['product_weight'] }}" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">product Video *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="file" class="input-field" placeholder="product Video"
                                                        name="product_video" @if (empty($productdata['product_video'])) required="" @endif>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Main Image *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="file" class="input-field"
                                                        placeholder="Main Image" name="main_image"
                                                        @if (empty($productdata['main_image'])) required="" @endif>
                                                </div>
                                                @if (!empty($product['product_image']))
                                                    {{-- <div class="col-lg-3"></div> --}}
                                                    <div class="col-lg-6">
                                                        <img src="{{ asset('product/image/' . $productdata['main_image']) }}"
                                                            alt="" style="height:100px; weight:80px;">
                                                        <a href="/delete-product-image/{{ $productdata['id'] }}">Delete
                                                            Image</a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Description *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    {{-- <input type="text" class="input-field" placeholder="Main Image"
                                                        name="main_image" @if (!empty($productdata['main_image'])) value="{{ $productdata['main_image'] }}" @endif required=""> --}}
                                                   <textarea name="description" class="input-field" id="" cols="30" rows="10" placeholder="Description" required="">@if (!empty($productdata['description'])) {{ $productdata['description'] }} @endif</textarea>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Wash Care *
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="Wash Care"
                                                        name="wash_care" @if (!empty($productdata['wash_care'])) value="{{ $productdata['wash_care'] }}" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Febric *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <select class="input-field " name="febric" id="section_id"
                                                        required="">
                                                        <option>Select Febric</option>
                                                        @foreach ($febricArr as $febric)
                                                            <option value="{{ $febric }}" @if (!empty($productdata['fabric'])) selected="" @endif >{{ $febric }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Pattern *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <select class="input-field " name="pattern" id="section_id"
                                                        required="">
                                                        <option>Select Pattern</option>
                                                        @foreach ($patternArr as $pattern)
                                                            <option value="{{ $pattern }}" @if (!empty($productdata['pattern'])) selected="" @endif >{{ $pattern }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Sleeve *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <select class="input-field " name="sleeve" id="section_id"
                                                        required="">
                                                        <option>Select Sleeve</option>
                                                        @foreach ($sleeveArr as $sleeve)
                                                            <option value="{{ $sleeve }}"  @if (!empty($productdata['sleeve'])) value="{{ $productdata['sleeve'] }}" selected="" @endif>{{ $sleeve }}</option>
                                                        @endforeach
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Fit *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <select class="input-field " name="fit" id="section_id"
                                                        required="">
                                                        <option>Select Fit</option>
                                                        @foreach ($fitArr as $fit)
                                                            <option value="{{ $fit }}" @if (!empty($productdata['fit'])) value="{{ $productdata['fit'] }}" selected="" @endif>{{ $fit }}</option>
                                                        @endforeach
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Occassion *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <select class="input-field " name="occassion" id="section_id"
                                                        required="">
                                                        <option>Select Occassion</option>
                                                        @foreach ($occassionArr as $occassion)
                                                            <option value="{{ $occassion }}" @if (!empty($productdata['occassion'])) value="{{ $productdata['occassion'] }}" selected="" @endif>{{ $occassion }}</option>
                                                        @endforeach
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Meta Title *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field" placeholder="Meta Title "
                                                        name="meta_title" @if (!empty($productdata['meta_title'])) value="{{ $productdata['meta_title'] }}"  selected="" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Meta Description *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <textarea class="input-field" placeholder="Meta Description "
                                                        name="meta_description" 
                                                        required="">@if (!empty($productdata['meta_description'])) {{ $productdata['meta_description'] }} @endif</textarea>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Meta Keyword *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="input-field"
                                                        placeholder="Meta Keyword " name="meta_keyword"
                                                        @if (!empty($productdata['meta_keywords'])) value="{{ $productdata['meta_keywords'] }}" @endif required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3">
                                                    <div class="left-area">
                                                        <h4 class="heading">Featured Item *
                                                        </h4>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="checkbox" name="is_featured" value="1" required=""  @if (!empty($productdata['is_featured']) && $productdata['is_featured']=="Yes") checked="" @endif>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="left-area">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <button class="addProductSubmit-btn" type="submit">Save</button>
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
        var mainurl = "";
        var admin_loader = 1;
        var whole_sell = 6;
        var getattrUrl = '/admin/getattributes';
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script>
        $(".multiple-select").select2({
            // maximumSelectionLength: 2
        });
    </script>
    <script>
        $('#section_id').change(function() {
            var section_id = $(this).val()
            // alert(section_id);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/append-categories-level',
                data: {
                    section_id: section_id
                },
                success: function(resp) {
                    $("#appendCategoriesLevel").html(resp);
                },
                error: function() {
                    alert("error")
                }
            });
        });
    </script>
</body>

</html>