<?php use App\Models\{Order,Product,User,addblog}; ?>
<?php
 
$months = array();
$count = 0;

while ($count <= 3) {
   $months[] = date('M Y', strtotime("-".$count." month"));
   $count++;
}

$dataPoints = array(
	array("y" => $usersCount[3], "label" => $months[3]),
	array("y" => $usersCount[2], "label" => $months[2]),
	array("y" => $usersCount[1], "label" => $months[1]),
	array("y" => $usersCount[0], "label" => $months[0])
);
 
?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="nvED5cnlgBDLB2tF4PxPjS7KlUVNQFAgX7Mi6kbY">
    <!-- Title -->
    <title>Dashboard</title>
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
</head>

<body>
    <div class="page">
        <div class="page-main">
            <!-- Header Menu Area Start -->
            @include('layout.header')
            <!-- Header Menu Area End -->
            <div class="wrapper">
                @include('layout.nav')
                <!-- Main Content Area Start -->


                <div class="content-area">
                    @if(Session::has('cache'))

                    <div class="alert alert-success validation">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <h3 class="text-center">{{ Session::get("cache") }}</h3>
                    </div>


                    @endif
                     <?php 
                        $OrderPending = Order::PendingOrder();
                        $AllOrder = Order::AllOrder();
                        $CancelOrder = Order::CancelOrder();
                        $AllProduct = Product::AllProduct();
                        $TotalUser = User::TotalUser();
                        $TotalBlog = addblog::TotalBlog();
                        $ThirtyDays = User::ThirtyDays();
                        $ThirtyDaysOrder = Order::ThirtyDaysOrder();
                     ?>
                    <div class="row row-cards-one">
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="mycard bg1">
                                <div class="left">
                                    <h5 class="title">Orders Pending! </h5>
                                    <span class="number">{{$OrderPending}}</span>
                                    <a href="admin/orders/pending" class="link">View All</a>
                                </div>
                                <div class="right d-flex align-self-center">
                                    <div class="icon">
                                        <i class="icofont-dollar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="mycard bg2">
                                <div class="left">
                                    <h5 class="title">Orders Cancel!</h5>
                                    <span class="number">{{$CancelOrder}}</span>
                                    <a href="admin/orders/processing" class="link">View All</a>
                                </div>
                                <div class="right d-flex align-self-center">
                                    <div class="icon">
                                        <i class="icofont-truck-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="mycard bg3">
                                <div class="left">
                                    <h5 class="title">Total Order!</h5>
                                    <span class="number">{{$AllOrder}}</span>
                                    <a href="admin/orders/completed" class="link">View All</a>
                                </div>
                                <div class="right d-flex align-self-center">
                                    <div class="icon">
                                        <i class="icofont-check-circled"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="mycard bg4">
                                <div class="left">
                                    <h5 class="title">Total Products!</h5>
                                    <span class="number">{{$AllProduct}}</span>
                                    <a href="admin/products" class="link">View All</a>
                                </div>
                                <div class="right d-flex align-self-center">
                                    <div class="icon">
                                        <i class="icofont-cart-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="mycard bg5">
                                <div class="left">
                                    <h5 class="title">Total Customers!</h5>
                                    <span class="number">{{$TotalUser}}</span>
                                    <a href="admin/users" class="link">View All</a>
                                </div>
                                <div class="right d-flex align-self-center">
                                    <div class="icon">
                                        <i class="icofont-users-alt-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="mycard bg6">
                                <div class="left">
                                    <h5 class="title">Total Posts!</h5>
                                    <span class="number">{{$TotalBlog}}</span>
                                    <a href="admin/blog" class="link">View All</a>
                                </div>
                                <div class="right d-flex align-self-center">
                                    <div class="icon">
                                        <i class="icofont-newspaper"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cards-one">
                        <div class="col-md-6 col-xl-3">
                            <div class="card c-info-box-area">
                                <div class="c-info-box box1">
                                    <p>{{$ThirtyDays}}</p>
                                </div>
                                <div class="c-info-box-content">
                                    <h6 class="title">New Customers</h6>
                                    <p class="text">Last 30 Days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card c-info-box-area">
                                <div class="c-info-box box2">
                                    <p>{{$TotalUser}}</p>
                                </div>
                                <div class="c-info-box-content">
                                    <h6 class="title">Total Customers</h6>
                                    <p class="text">All Time</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card c-info-box-area">
                                <div class="c-info-box box3">
                                    <p>{{$ThirtyDaysOrder}}</p>
                                </div>
                                <div class="c-info-box-content">
                                    <h6 class="title">Total Orders</h6>
                                    <p class="text">Last 30 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card c-info-box-area">
                                <div class="c-info-box box4">
                                    <p>{{$AllOrder}}</p>
                                </div>
                                <div class="c-info-box-content">
                                    <h6 class="title">Total Orders</h6>
                                    <p class="text">All Time</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cards-one">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="card">
                                <h5 class="card-header">Users Reports</h5>
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cards-one">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="card">
                                <h5 class="card-header">Top Referrals</h5>
                                <div class="card-body">
                                    <div class="admin-fix-height-card">
                                        <div id="chartContainer-topReference"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="card">
                                <h5 class="card-header">Most Used OS</h5>
                                <div class="card-body">
                                    <div class="admin-fix-height-card">
                                        <div id="chartContainer-os"></div>
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
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Users Reports"
	},
	axisY: {
		title: "Number of Users"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
    <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    </script>
    <script language="JavaScript">
    displayLineChart();

    function displayLineChart() {
        var data = {
            labels: [
                '08 Jan', '07 Jan', '06 Jan', '05 Jan', '04 Jan', '03 Jan', '02 Jan', '01 Jan', '31 Dec',
                '30 Dec', '29 Dec', '28 Dec', '27 Dec', '26 Dec', '25 Dec', '24 Dec', '23 Dec', '22 Dec',
                '21 Dec', '20 Dec', '19 Dec', '18 Dec', '17 Dec', '16 Dec', '15 Dec', '14 Dec', '13 Dec',
                '12 Dec', '11 Dec', '10 Dec',
            ],
            datasets: [{
                label: "Prime and Fibonacci",
                fillColor: "#3dbcff",
                strokeColor: "#0099ff",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [
                    '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                    '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
                ]
            }]
        };
        var ctx = document.getElementById("lineChart").getContext("2d");
        var options = {
            responsive: true
        };
        var lineChart = new Chart(ctx).Line(data, options);
    }
    </script>
    <script type="text/javascript">
    $('#poproducts').dataTable({
        "ordering": false,
        'lengthChange': false,
        'searching': false,
        'ordering': false,
        'info': false,
        'autoWidth': false,
        'responsive': true,
        'paging': false
    });
    </script>
    <script type="text/javascript">
    $('#pproducts').dataTable({
        "ordering": false,
        'lengthChange': false,
        'searching': false,
        'ordering': false,
        'info': false,
        'autoWidth': false,
        'responsive': true,
        'paging': false
    });
    </script>
    <script type="text/javascript">
    var chart1 = new CanvasJS.Chart("chartContainer-topReference", {
        exportEnabled: true,
        animationEnabled: true,

        legend: {
            cursor: "pointer",
            horizontalAlign: "right",
            verticalAlign: "center",
            fontSize: 16,
            padding: {
                top: 20,
                bottom: 2,
                right: 20,
            },
        },
        data: [{
            type: "pie",
            showInLegend: true,
            legendText: "",
            toolTipContent: "{name}: <strong>{#percent%} (#percent%)</strong>",
            indexLabel: "#percent%",
            indexLabelFontColor: "white",
            indexLabelPlacement: "inside",
            dataPoints: [{
                    y: 15,
                    name: "yandex.ru"
                },
                {
                    y: 6,
                    name: "www.google.com"
                },
                {
                    y: 6,
                    name: "codecanyon.net"
                },
                {
                    y: 5,
                    name: "www.facebook.com"
                },
                {
                    y: 2,
                    name: "geniusocean.com"
                },
            ]
        }]
    });
    chart1.render();

    var chart = new CanvasJS.Chart("chartContainer-os", {
        exportEnabled: true,
        animationEnabled: true,
        legend: {
            cursor: "pointer",
            horizontalAlign: "right",
            verticalAlign: "center",
            fontSize: 16,
            padding: {
                top: 20,
                bottom: 2,
                right: 20,
            },
        },
        data: [{
            type: "pie",
            showInLegend: true,
            legendText: "",
            toolTipContent: "{name}: <strong>{#percent%} (#percent%)</strong>",
            indexLabel: "#percent%",
            indexLabelFontColor: "white",
            indexLabelPlacement: "inside",
            dataPoints: [{
                    y: 1185,
                    name: "Windows 10"
                },
                {
                    y: 536,
                    name: "Windows 8.1"
                },
                {
                    y: 502,
                    name: "Mac OS X"
                },
                {
                    y: 415,
                    name: "Windows 7"
                },
                {
                    y: 384,
                    name: "Unknown OS Platform"
                },
            ]
        }]
    });
    chart.render();
    </script>
</body>

</html>