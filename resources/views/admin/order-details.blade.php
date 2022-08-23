<?php use App\Models\Product; ?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="ebPSm0i0PppyZJlDs0fmmQQq2VQus47Htk9vyb3B">
    <!-- Title -->
    <title>VIDURADI</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/1640748995viduradifav.png" />
    <!-- Bootstrap -->
    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="/assets/admin/css/fontawesome.css">
    <!-- icofont -->
    <link rel="stylesheet" href="/assets/admin/css/icofont.min.css">
    <!-- Sidemenu Css -->
    <link href="/assets/admin/plugins/fullside-menu/css/dark-side-style.css" rel="stylesheet" />
    <link href="/assets/admin/plugins/fullside-menu/waves.min.css" rel="stylesheet" />

    <link href="/assets/admin/css/plugin.css" rel="stylesheet" />

    <link href="/assets/admin/css/jquery.tagit.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/admin/css/bootstrap-coloroicker.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="/assets/vendor/css/select2.min.css">
    <!-- stylesheet -->

    <link href="/assets/admin/css/style.css" rel="stylesheet" />
    <link href="/assets/admin/css/custom.css" rel="stylesheet" />
    <link href="/assets/admin/css/responsive.css" rel="stylesheet" />
    <link href="/assets/admin/css/common.css" rel="stylesheet" />



    <style type="text/css">
        .order-table-wrap table#example2 {
            margin: 10px 20px;
        }

    </style>


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
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                            <div class="col-lg-12">
                                <h4 class="heading">Order Details <a class="add-btn"
                                        href="javascript:history.back();"><i class="fas fa-arrow-left"></i> Back</a>
                                </h4>
                                <ul class="links">
                                    <li>
                                        <a href="/dashboard">Dashboard </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Orders</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Order Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="order-table-wrap">
                        <div class="alert alert-success validation" style="display: none;">
                            <button type="button" class="close alert-close"><span>×</span></button>
                            <p class="text-left"></p>
                        </div>
                        <div class="alert alert-danger validation" style="display: none;">
                            <button type="button" class="close alert-close"><span>×</span></button>
                            <ul class="text-left">
                            </ul>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="special-box">
                                    <div class="heading-area">
                                        <h4 class="title">
                                            Order Details
                                        </h4>
                                    </div>
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th class="45%" width="45%">Order ID</th>
                                                    <td width="10%">:</td>
                                                    <td class="45%" width="45%">{{ $orderDetails['id'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Total Product</th>
                                                    <td width="10%">:</td>
                                                    <?php $count = count($orderDetails['orders_products']) ?>
                                                    <td width="45%">{{ $count }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Total Cost</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">Rs.{{ $orderDetails['grand_total'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Shipping Charges</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">Rs.{{ $orderDetails['shipping_charges'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Ordered Date</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{ $orderDetails['created_at'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Payment Method</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{ $orderDetails['payment_method'] }}</td>
                                                </tr>

                                                {{-- <tr>
                                                    <th width="45%">Paytm Transaction ID</th>
                                                    <td width="10%">:</td>
                                                    <td width="45%">{{ $orderDetails[''] }}</td>
                                                </tr> --}}


                                                <th width="45%">Order Status</th>
                                                <th width="10%">:</th>
                                                <td width="45%">
                                                    @if ($path == 'all')
                                                        <form action="/update-order-status" method="post">
                                                            @csrf
                                                            <input type="hidden" name="order_id" value="{{ $orderDetails['id'] }}">
                                                            <select name="status" id="order_status">
                                                                @foreach ($orderStatus as $status)
                                                                    <option value="{{ $status['name'] }}" @if ($status['name'] == $orderDetails['order_status']) {{ 'selected' }} @endif>{{ $status['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                            <input type="text" name="courier_name" @if(empty($orderDetails['courier_name'])) id="courier_name"  @endif value="{{$orderDetails['courier_name']}}" placeholder=" Courier Name">
                                                            <input type="text" value="{{$orderDetails['tracking_number']}}" name="tracking_number" @if(empty($orderDetails['tracking_number'])) id="tracking_number" @endif placeholder="Tracking Number">
                                                            <input type="text" value="{{$orderDetails['invoice']}}" name="invoice" @if(empty($orderDetails['invoice'])) id="invoice" @endif placeholder="Invoice Number">
                                                            <button type="submit" class="btn btn-warning btn-sm">Update</button>
                                                        </form>
                                                    @else
                                                        {{ $orderDetails['order_status'] }}
                                                    @endif
                                                </td>
                                                <tr>
                                                <th width="45%">Order Logs</th>
                                                <th width="10%">:</th>
                                                <td width="45%">
                                                    
                                                    @foreach($orderLog as $log)
                                                    <strong>{{$log['order_status']}}</strong><br>
                                                    {{date('j F, Y, g:i a', strtotime($log['created_at']))}} <br>
                                                    @endforeach
                                                </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="footer-area">
                                        <a href="/view-payment-invoice/{{ $orderDetails['id'] }}"
                                            class="mybtn1"><i class="fas fa-eye"></i> View Invoice</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="special-box">
                                    <div class="heading-area">
                                        <h4 class="title">
                                            Billing Details
                                        </h4>
                                    </div>
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th width="45%">Name</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%">{{ $orderDetails['name'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Email</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%">{{ $userDetails['email'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Phone</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%">{{ $orderDetails['phone'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Address</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%">{{ $orderDetails['address'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">State</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%">{{ $orderDetails['state'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">City</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%">{{ $orderDetails['city'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Locality</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%">{{ $orderDetails['locality'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="45%">Postal Code</th>
                                                    <th width="10%">:</th>
                                                    <td width="45%">{{ $orderDetails['pincode'] }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12 order-details-table">
                                <div class="mr-table">
                                    <h4 class="title">Products Ordered</h4>
                                    <div class="table-responsiv">
                                        <table id="example2" class="table table-hover dt-responsive" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                <tr>
                                                    <th width="10%">Product Image</th>
                                                    <th width="10%">Product Code</th>
                                                    <th>Product Name</th>
                                                    <th>Color</th>
                                                    <th width="20%">Size</th>
                                                    <th>Quantity</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orderDetails['orders_products'] as $product)
                                                    <?php $image = Product::where('id', $product['product_id'])->first();?>
                                                    <tr>
                                                        <td width="10%"><img src="{{asset('product/image')}}/{{$image['main_image']}}" alt=""></td>
                                                        <td>{{ $product['product_code'] }}</td>
                                                        <td>{{ $product['product_name'] }}</td>
                                                        <td>{{ $product['product_color'] }}</td>
                                                        <td>{{ $product['product_size'] }}</td>
                                                        <td>{{ $product['product_qty'] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
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
    <script src="/assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
    <script src="/assets/admin/js/vendors/vue.js"></script>
    <script src="/assets/admin/js/vendors/bootstrap.min.js"></script>
    <script src="/assets/admin/js/jqueryui.min.js"></script>
    <!-- Fullside-menu Js-->
    <script src="/assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js"></script>
    <script src="/assets/admin/plugins/fullside-menu/waves.min.js"></script>

    <script src="/assets/admin/js/plugin.js"></script>
    <script src="/assets/admin/js/Chart.min.js"></script>
    <script src="/assets/admin/js/tag-it.js"></script>
    <script src="/assets/admin/js/nicEdit.js"></script>
    <script src="/assets/admin/js/bootstrap-colorpicker.min.js"></script>
    <script src="/assets/admin/js/notify.js"></script>
    <script src="/assets/admin/js/jquery.canvasjs.min.js"></script>

    <script src="/assets/admin/js/load.js"></script>
    <script src="/assets/vendor/js/select2.min.js"></script>
    <!-- Custom Js-->
    <script src="/assets/admin/js/custom.js"></script>
    <!-- AJAX Js-->
    <script src="/assets/admin/js/myscript.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script> --}}



    {{-- <script type="text/javascript">
        $('#example2').dataTable({
            "ordering": false,
            'lengthChange': false,
            'searching': false,
            'ordering': false,
            'info': false,
            'autoWidth': false,
            'responsive': true
        });
    </script> --}}

    {{-- <script type="text/javascript">
        $(document).on('click', '#license', function(e) {
            var id = $(this).parent().find('input[type=hidden]').val();
            var key = $(this).parent().parent().find('input[type=hidden]').val();
            $('#key').html(id);
            $('#license-key').val(key);
        });
        $(document).on('click', '#license-edit', function(e) {
            $(this).hide();
            $('#edit-license').show();
            $('#license-cancel').show();
        });
        $(document).on('click', '#license-cancel', function(e) {
            $(this).hide();
            $('#edit-license').hide();
            $('#license-edit').show();
        });

        $(document).on('submit', '#edit-license', function(e) {
            e.preventDefault();
            $('button#license-btn').prop('disabled', true);
            $.ajax({
                method: "POST",
                url: $(this).prop('action'),
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if ((data.errors)) {
                        for (var error in data.errors) {
                            $.notify('<li>' + data.errors[error] + '</li>', 'error');
                        }
                    } else {
                        $.notify(data, 'success');
                        $('button#license-btn').prop('disabled', false);
                        $('#confirm-delete').modal('toggle');

                    }
                }
            });
        });
    </script> --}}
 <script type="text/javascript">
        $("#courier_name").hide();
        $("#tracking_number").hide();
        $("#invoice").hide();
        $("#order_status").on("change", function(){
          if(this.value=="Shipped"){
             $("#courier_name").show();
             $("#tracking_number").show();
             $("#invoice").show();
          } else {
             $("#courier_name").hide();
             $("#tracking_number").hide();
            $("#invoice").hide();
          }
        })
      </script>


</body>

</html>
