<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="7HvqVpWxoYXGSMgG0RNBlc51Z6jsR2VwEeitd8dR">
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
                                <h4 class="heading">{{ $title }} <a class="add-btn"
                                        href="/all-product"><i class="fas fa-arrow-left"></i> Back</a></h4>
                                <ul class="links">
                                    <li>
                                        <a href="admin">Dashboard </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Home Page Settings</a>
                                    </li>
                                    <li>
                                        <a href="/all-product">Products</a>
                                    </li>
                                    <li>
                                        <a href="admin/slider/create">{{ $title }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-header panel-header-sm">
                    </div>
                    @if (Session::has('success'))
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        {{ Session::forget('success') }}
                    @endif
                    @if (Session::has('error'))
                        <div class="col-md-12">
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        {{ Session::forget('error') }}
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Shirt Attribute Table
                                    </h4>
                                </div>
                                <form method="post" name="addAttribue" id="addAttribue"
                                    action="{{ url('add-attributes/' . $productdata['id']) }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $productdata['id'] }}">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="product_name" class="text-info"><b>Product
                                                            Name:{{ $productdata['product_name'] }}</b></label>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="{{ asset('product/image') }}/{{ $productdata['main_image'] }}"
                                                        style="width: 70px; padding-top: 20px">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <div class="field_wrapper">
                                                        <div>
                                                            <input id="size" type="text" name="size[]" value=""
                                                                placeholder="Size" style="width: 100px;" required="" />
                                                            <input id="color" type="text" name="color[]" value=""
                                                                placeholder="Color" style="width: 100px;" required="" />
                                                            <input id="sku" type="text" name="sku[]" value=""
                                                                placeholder="Sku" style="width: 100px;" required="" />
                                                            <input id="price" type="text" name="price[]" value=""
                                                                placeholder="Price" style="width: 100px;" required="" />
                                                            <input id="stock" type="text" name="stock[]" value=""
                                                                placeholder="Stock" style="width: 100px;" required="" />
                                                            <a href="javascript:void(0);" class="add_button"
                                                                title="Add field">Add</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Add attributes</button>
                                    </div>

                                </form>
                            </div>
                            <form id="editAttributeForm" name="editAttributeForm" method="post"
                                action="{{ url('edit-attributes/' . $productdata['id']) }}">
                                @csrf
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">

                                    <thead class="table table-sm table-dark">
                                        <th align="center">Id</th>
                                        <th align="center">Size</th>
                                        <th align="center">Colour</th>
                                        <th align="center">SKU</th>
                                        <th align="center"> Price</th>
                                        <th align="center">Stock</th>
                                        <th align="center">Action </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($productdata['attributes'] as $item)
                                            <input style="display: none;" type="text" name="attrId[]"
                                                value="{{ $item['id'] }}">
                                            <tr>
                                                <td align="center" class="table-danger">{{ $item['id'] }}</td>
                                                <td align="center" class="table-danger">{{ $item['size'] }}</td>
                                                <td align="center" class="table-danger">{{ $item['color'] }}</td>
                                                <td align="center" class="table-danger">{{ $item['sku'] }}</td>
                                                <td align="center" class="table-danger">
                                                    <input type="number" name="price[]" value="{{ $item['price'] }}">
                                                </td>
                                                <td align="center" class="table-danger">
                                                    <input type="number" name="stock[]" value="{{ $item['stock'] }}">
                                                </td>
                                                <td align="center" class="table-danger">
                                                    <a href="/delete-stock/{{ $item['id'] }}"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Update attributes</button>
                                </div>
                            </div>

                        </div>
                        </form>
                    </div>
                    <a href="/all-product" class="btn btn-danger float-right">Back</a>
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
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <!--Product Add remove Scripts-->
    <script type="text/javascript">
        $(document).ready(function() {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML =
                '<div> <div style="height: 10px;"></div><input type="text" name="size[]" value="" placeholder="Size" style="width: 100px" required=""/>&nbsp;<input type="text" name="color[]" value="" placeholder="Color" style="width: 100px" required=""/>&nbsp;<input type="text" name="sku[]" value="" placeholder="Sku" style="width: 100px" required=""/>&nbsp;<input type="text" name="price[]" value="" placeholder="Price" style="width: 100px" required=""/>&nbsp;<input type="text" name="stock[]" value="" placeholder="Stock" style="width: 100px" required=""/><a href="javascript:void(0);" class="remove_button">Remove</a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function() {
                //Check maximum number of input fields
                if (x < maxField) {
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });


        });
    </script>



</body>

</html>
