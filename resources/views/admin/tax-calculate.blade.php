
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
										</nav>
					<!-- Main Content Area Start -->
					  
					
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading">Tax Calculate</h4>
										<ul class="links">
											<li>
												<a href="https://ecom.viduradi.com/admin">Dashboard </a>
											</li>
											<li>
												<a href="javascript:;">Total Earning </a>
											</li>
											<li>
												<a href="https://ecom.viduradi.com/admin/tax/calculate">Tax Calculate</a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<form action="https://ecom.viduradi.com/admin/tax/calculate" method="GET">
							<div class="product-area">
							  <div class="row">
							   
								<div class="alert alert-success validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <p class="text-left"></p> 
      </div>
      <div class="alert alert-danger validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <ul class="text-left">
            </ul>
      </div>  
							   
								<div class="col-sm-3  offset-2 mt-3">
									<input type="text"  autocomplete="off" class="input-field discount_date" value=""  name="start_date"  placeholder="Enter Date"  value="">
								  </div>
								  <div class="col-sm-3 mt-3">
									<input type="text"  autocomplete="off" class="input-field discount_date" value="" name="end_date"  placeholder="Enter Date"  value="">
								  </div>
								  <div class="col-sm-4 mt-3">
								   <button type="submit" class="mybtn1">Check</button>
								   <button type="button" id="reset" class="mybtn1">Reset</button>
								  </div>
							  
				
								<div class="col-lg-12">
								  <p class="text-center"> <b>     Total Earning : Rs.1254.3999999999996</b></p>
								  <p class="text-center"> <b>Current Month Earning : 0</b></p>
								  <p class="text-center"> <b>Last 30 Days Earning : 0</b></p>
								  <div class="mr-table allproduct">
				
								</form>
										<div class="alert alert-success validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <p class="text-left"></p> 
      </div> 
										<div class="table-responsiv">
												<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
									                        <th width="5%">#</th>
									                        <th width="25%">Order Number</th>
									                        <th width="20%">Txn ID</th>
									                        <th width="20%">Tax</th>
									                        <th width="20%">Tax Location</th>
									                        <th width="10%">Created At</th>
														</tr>
													</thead>
													<tbody>
																													<tr>
																<td>1</td>
																<td>
																	<a  href="https://ecom.viduradi.com/admin/order/129/invoice">
																		QTxnQiShCv
																	</a>
																	
																</td>
																<td>
																	pay_HHikTsz5g9do9v
																</td>
																<td>
																₹12360.67
																</td>
																<td>
																New Youk
																</td>
																<td>
																	01-06-2021
																</td>
															</tr>
																													<tr>
																<td>2</td>
																<td>
																	<a  href="https://ecom.viduradi.com/admin/order/130/invoice">
																		2ZHrp4BvIZ
																	</a>
																	
																</td>
																<td>
																	
																</td>
																<td>
																₹12360.67
																</td>
																<td>
																New Youk
																</td>
																<td>
																	01-06-2021
																</td>
															</tr>
																													<tr>
																<td>3</td>
																<td>
																	<a  href="https://ecom.viduradi.com/admin/order/131/invoice">
																		FJrE0mLfb4
																	</a>
																	
																</td>
																<td>
																	
																</td>
																<td>
																₹30426.26
																</td>
																<td>
																New Youk
																</td>
																<td>
																	01-06-2021
																</td>
															</tr>
																													<tr>
																<td>4</td>
																<td>
																	<a  href="https://ecom.viduradi.com/admin/order/132/invoice">
																		zLtUMpZGvg
																	</a>
																	
																</td>
																<td>
																	20210601111212800110168582002648229
																</td>
																<td>
																₹30426.26
																</td>
																<td>
																New Youk
																</td>
																<td>
																	01-06-2021
																</td>
															</tr>
																													<tr>
																<td>5</td>
																<td>
																	<a  href="https://ecom.viduradi.com/admin/order/133/invoice">
																		PXgt1622534662
																	</a>
																	
																</td>
																<td>
																	6D945305LV112502Y
																</td>
																<td>
																$2.6
																</td>
																<td>
																New Youk
																</td>
																<td>
																	01-06-2021
																</td>
															</tr>
																													<tr>
																<td>6</td>
																<td>
																	<a  href="https://ecom.viduradi.com/admin/order/135/invoice">
																		D8tWJ6fHX1
																	</a>
																	
																</td>
																<td>
																	
																</td>
																<td>
																$4.12
																</td>
																<td>
																New Youk
																</td>
																<td>
																	02-10-2021
																</td>
															</tr>
																													<tr>
																<td>7</td>
																<td>
																	<a  href="https://ecom.viduradi.com/admin/order/136/invoice">
																		pZurldhoPH
																	</a>
																	
																</td>
																<td>
																	
																</td>
																<td>
																$4.12
																</td>
																<td>
																New Youk
																</td>
																<td>
																	02-10-2021
																</td>
															</tr>
																													<tr>
																<td>8</td>
																<td>
																	<a  href="https://ecom.viduradi.com/admin/order/137/invoice">
																		S5pBCrWsDV
																	</a>
																	
																</td>
																<td>
																	3453245
																</td>
																<td>
																$2.46
																</td>
																<td>
																New Youk
																</td>
																<td>
																	02-10-2021
																</td>
															</tr>
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


		    <script type="text/javascript">
		$('#geniustable').DataTable();	
		$(document).on('click','#reset',function(){
		$('.discount_date').val('');
		location.href = 'https://ecom.viduradi.com/admin/tax/calculate';
		})												
    </script>

	



	</body>

</html>
