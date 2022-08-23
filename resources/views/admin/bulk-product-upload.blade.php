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
      <link rel="icon"  type="image/x-icon" href="assets/images/1640748995viduradifav.png"/>
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
      <link href="assets/admin/css/style.css" rel="stylesheet"/>
      <link href="assets/admin/css/custom.css" rel="stylesheet"/>
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
               <!-- Side Menu Area Start -->
               @include('layout.nav')
					<!-- Main Content Area Start -->
					
						<div class="content-area">
							<div class="mr-breadcrumb">
								<div class="row">
									<div class="col-lg-12">
											<h4 class="heading">Product Bulk Upload</h4>
											<ul class="links">
												<li>
													<a href="https://ecom.viduradi.com/admin">Dashboard </a>
												</li>
											<li>
												<a href="javascript:;">Products </a>
											</li>
											<li>
												<a href="https://ecom.viduradi.com/admin/products">All Products</a>
											</li>
												<li>
													<a href="https://ecom.viduradi.com/admin/products/import">Bulk Upload</a>
												</li>
											</ul>
									</div>
								</div>
							</div>
							<div class="add-product-content">
								<div class="row">
									<div class="col-lg-12 p-5">

					                      <div class="gocover" style="background: url(https://ecom.viduradi.com/assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
					                      <form id="geniusform" action="https://ecom.viduradi.com/admin/products/import-submit" method="POST" enctype="multipart/form-data">
					                        <input type="hidden" name="_token" value="9u1RhkVhVons4LEEicF24J4UjLbr2rrPx5iFMR8F">

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
												  <div class="col-lg-12 text-right">
													  <span style="margin-top:10px;"><a class="btn btn-primary" href="https://ecom.viduradi.com/assets/product-csv-format.csv">Download Sample CSV</a></span>
												  </div>

											  </div>
											  <hr>
											  <div class="row justify-content-center">
												  <div class="col-lg-12 d-flex justify-content-center text-center">
														<div class="csv-icon">
																<i class="fas fa-file-csv"></i>
														</div>
												  </div>
												  <div class="col-lg-12 d-flex justify-content-center text-center">
													  <div class="left-area mr-4">
														  <h4 class="heading">Upload a File *</h4>
													  </div>
													  <span class="file-btn">
														  <input type="file" id="csvfile" name="csvfile" accept=".csv">
													  </span>

												  </div>

											  </div>

						                        <input type="hidden" name="type" value="Physical">
												<div class="row">
													<div class="col-lg-12 mt-4 text-center">
														<button class="mybtn1 mr-5" type="submit">Start Import</button>
													</div>
												</div>
											</form>
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
			  var getattrUrl = 'https://ecom.viduradi.com/admin/getattributes';
			  var curr = {"id":1,"name":"INR","sign":"Rs.","value":"1","is_default":"1"};
				// console.log(curr);
			</script>

		<!-- Dashboard Core -->
		<script src="https://ecom.viduradi.com/assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
    <script src="https://ecom.viduradi.com/assets/admin/js/vendors/vue.js"></script>
		<script src="https://ecom.viduradi.com/assets/admin/js/vendors/bootstrap.min.js"></script>
		<script src="https://ecom.viduradi.com/assets/admin/js/jqueryui.min.js"></script>
		<!-- Fullside-menu Js-->
		<script src="https://ecom.viduradi.com/assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js"></script>
		<script src="https://ecom.viduradi.com/assets/admin/plugins/fullside-menu/waves.min.js"></script>

		<script src="https://ecom.viduradi.com/assets/admin/js/plugin.js"></script>
		<script src="https://ecom.viduradi.com/assets/admin/js/Chart.min.js"></script>
		<script src="https://ecom.viduradi.com/assets/admin/js/tag-it.js"></script>
		<script src="https://ecom.viduradi.com/assets/admin/js/nicEdit.js"></script>
        <script src="https://ecom.viduradi.com/assets/admin/js/bootstrap-colorpicker.min.js"></script>
        <script src="https://ecom.viduradi.com/assets/admin/js/notify.js"></script>
        <script src="https://ecom.viduradi.com/assets/admin/js/jquery.canvasjs.min.js"></script>
		
		<script src="https://ecom.viduradi.com/assets/admin/js/load.js"></script>
		<script src="https://ecom.viduradi.com/assets/vendor/js/select2.min.js"></script>
		<!-- Custom Js-->
		<script src="https://ecom.viduradi.com/assets/admin/js/custom.js"></script>
		<!-- AJAX Js-->
		<script src="https://ecom.viduradi.com/assets/admin/js/myscript.js"></script>
		<script>
			$(document).ready(function() {
				$('.js-example-basic-multiple').select2();
			});		
		</script>


		
<script src="https://ecom.viduradi.com/assets/admin/js/product.js"></script>


	</body>

</html>
