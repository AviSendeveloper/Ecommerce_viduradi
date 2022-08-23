<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="nvED5cnlgBDLB2tF4PxPjS7KlUVNQFAgX7Mi6kbY">
    <!-- Title -->
    <title>Physical</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/1640748995viduradifav.png" />
    <!-- Bootstrap -->
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/admin/css/fontawesome.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/admin/css/icofont.min.css">
    <!-- Sidemenu Css -->
    <link href="assets/admin/plugins/fullside-menu/css/dark-side-style.css" rel="stylesheet" />
    <link href="assets/admin/plugins/fullside-menu/waves.min.css" rel="stylesheet" />
    <link href="assets/admin/css/plugin.css" rel="stylesheet" />
    <link href="assets/admin/css/jquery.tagit.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/admin/css/bootstrap-coloroicker.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="assets/vendor/css/select2.min.css">
    <!-- stylesheet -->
    <link href="assets/admin/css/style.css" rel="stylesheet" />
    <link href="assets/admin/css/custom.css" rel="stylesheet" />
    <link href="assets/admin/css/responsive.css" rel="stylesheet" />
    <link href="assets/admin/css/common.css" rel="stylesheet" />
    <link href="assets/admin/css/product.css" rel="stylesheet" />
    <link href="assets/admin/css/jquery.Jcrop.css" rel="stylesheet" />
    <link href="assets/admin/css/Jcrop-style.css" rel="stylesheet" />
    {{-- For Data Sorting --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
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


                <input type="hidden" id="headerdata" value="ORDER">

                <div class="content-area">
                    <div class="mr-breadcrumb">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="heading">All Orders</h4>
                                <ul class="links">
                                    <li>
                                        <a href="admin">Dashboard </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Orders</a>
                                    </li>
                                    <li>
                                        <a href="admin/orders">All Orders</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mr-table allproduct">
                                    <div class="alert alert-success validation" style="display: none;">
                                        <button type="button" class="close alert-close"><span>×</span></button>
                                        <p class="text-left"></p>
                                    </div>

                                    <div class="container">
                                        <table class="table table-bordered responsiv" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>Customer Name</th>
                                                    <th>Order Status</th>
                                                    <th>Payment Method</th>
                                                    <th>Payment Status</th>
                                                    <th>Amount</th>
                                                    <th>Placed On</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orderList as $order)
                                                    <tr>
                                                        <td>{{ $order['id'] }}</td>
                                                        <td>{{ $order['name'] }}</td>
                                                        <td>{{ $order['order_status'] }}</td>
                                                        <td>{{ $order['payment_method'] }}</td>
                                                        @if ($order['payment_method'])
                                                            <td>Completed</td>
                                                        @else
                                                            <td>Pending</td>
                                                        @endif
                                                        <td>{{ $order['grand_total'] }}</td>
                                                        <td>{{ date('d-m-Y', strtotime($order['created_at'])) }}</td>
                                                        <td>
                                                            <a href="/admin-order-details/all/{{ $order['id'] }}"><i
                                                                    class="fas fa-info-circle"></i></a>
                                                        </td>
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

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    <script>
        $(function() {
            $('#dataTable').DataTable({
                "pageLength": 3,
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false "order": [
                    [3, 'asc']
                ]
            });
        });
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





    <script type="text/javascript">
        var table = $('#geniustable').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            ajax: 'admin/orders/datatables/none',
            columns: [{
                    data: 'customer_email',
                    name: 'customer_email'
                },
                {
                    data: 'order_number',
                    name: 'order_number'
                },
                {
                    data: 'totalQty',
                    name: 'totalQty'
                },
                {
                    data: 'pay_amount',
                    name: 'pay_amount'
                },
                {
                    data: 'action',
                    searchable: false,
                    orderable: false
                }
            ],
            language: {
                processing: '<img src="assets/images/1564224329loading3.gif">'
            },
            drawCallback: function(settings) {
                $('.select').niceSelect();
            }
        });
    </script>





</body>

</html>
