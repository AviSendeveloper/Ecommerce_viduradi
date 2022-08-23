<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="JEStg52FG1ugINoD6ZvCrqYlO5QoHVwcBAFJY7rY">
    <!-- Title -->
    <title>VIDURADI</title>
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



    <style type="text/css">
        tr td:first-child {
            background-color: #2d3274;
        }

        .img-upload #image-preview {
            background-color: #2d3274 !important;
            background-size: unset !important;
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

                <input type="hidden" id="headerdata" value="SERVICE">
                <div class="content-area">
                    <div class="mr-breadcrumb">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="heading">Services</h4>
                                <ul class="links">
                                    <li>
                                        <a href="admin">Dashboard </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Home Page Settings </a>
                                    </li>
                                    <li>
                                        <a href="admin/service">Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-area">
                        <div class="row">
                            <div class="col-lg-12">
                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="mr-table allproduct">

                                    <div class="alert alert-success validation" style="display: none;">
                                        <button type="button" class="close alert-close"><span>×</span></button>
                                        <p class="text-left"></p>
                                    </div>
                                    <div class="col-sm-4 table-contents" style="float: right;">
                                        <a class="add-btn" href="/add-service">
                                            <i class="fas fa-plus"></i> <span class="remove-mobile">Add New
                                                Service<span>
                                        </a>
                                    </div>
                                    <div class="table-responsiv">
                                        <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Featured Image</th>
                                                    <th width="30%">Title</th>
                                                    <th width="20%">Category</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($services as $service)
                                                    <tr>
                                                        <td><img src="{{ asset('service/image') }}/{{ $service['image'] }}"></td>
                                                        <td>{{ $service['title'] }}</td>
                                                        <td>{{ $service['category'] }}</td>
                                                        <td>
                                                            <a href="/edit-service/{{ $service['id'] }}"><i
                                                                    class="fas fa-edit"></i></a>&nbsp;&nbsp;
                                                            <a href="/delete-service/{{ $service['id'] }}"><i
                                                                    class="fas fa-trash"></i>
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





                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="submit-loader">
                                <img src="assets/images/1564224329loading3.gif" alt="">
                            </div>
                            <div class="modal-header">
                                <h5 class="modal-title"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header d-block text-center">
                                <h4 class="modal-title d-inline-block">Confirm Delete</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <p class="text-center">You are about to delete this Service.</p>
                                <p class="text-center">Do you want to proceed?</p>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger btn-ok">Delete</a>
                            </div>

                        </div>
                    </div>
                </div>



                <!-- Main Content Area End -->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var mainurl = "https://viduradi.com";
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
    <script src="assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
    <script src="assets/admin/js/vendors/vue.js"></script>
    <script src="assets/admin/js/vendors/bootstrap.min.js"></script>
    <script src="assets/admin/js/jqueryui.min.js"></script>
    <!-- Fullside-menu Js-->
    <script src="assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js"></script>
    <script src="assets/admin/plugins/fullside-menu/waves.min.js"></script>

    <script src="assets/admin/js/plugin.js"></script>
    <script src="assets/admin/js/Chart.min.js"></script>
    <script src="assets/admin/js/tag-it.js"></script>
    <script src="assets/admin/js/nicEdit.js"></script>
    <script src="assets/admin/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/admin/js/notify.js"></script>
    <script src="assets/admin/js/jquery.canvasjs.min.js"></script>

    <script src="assets/admin/js/load.js"></script>
    <script src="assets/vendor/js/select2.min.js"></script>
    <!-- Custom Js-->
    <script src="assets/admin/js/custom.js"></script>
    <!-- AJAX Js-->
    <script src="assets/admin/js/myscript.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>






    {{-- <script type="text/javascript">
        var table = $('#geniustable').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            ajax: 'admin/service/datatables',
            columns: [{
                    data: 'photo',
                    name: 'photo',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'details',
                    name: 'details'
                },
                {
                    data: 'action',
                    searchable: false,
                    orderable: false
                }

            ],
            language: {
                processing: '<img src="assets/images/1564224329loading3.gif">'
            }
        });

        $(function() {
            $(".btn-area").append('<div class="col-sm-4 table-contents">' +
                '<a class="add-btn" data-href="admin/service/create" id="add-data" data-toggle="modal" data-target="#modal1">' +
                '<i class="fas fa-plus"></i> Add New Service' +
                '</a>' +
                '</div>');
        });
    </script> --}}







</body>

</html>
