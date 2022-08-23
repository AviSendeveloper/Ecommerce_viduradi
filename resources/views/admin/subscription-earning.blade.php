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
										<h4 class="heading">Subscription Eairning</h4>
										<ul class="links">
											<li>
												<a href="https://ecom.viduradi.com/admin">Dashboard </a>
											</li>
											<li>
												<a href="javascript:;">Total Earning </a>
											</li>
											<li>
												<a href="https://ecom.viduradi.com/admin/subscription/earning">Subscription Eairning</a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<form action="https://ecom.viduradi.com/admin/subscription/earning" method="GET">
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
								  <p class="text-center"> <b>     Total Earning : Rs.272157</b></p>
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
									                        <th width="20%">Subscription Name</th>
									                        <th width="20%">User Name</th>
									                        <th width="20%">Txn ID</th>
									                        <th width="20%">Amount</th>
									                        <th width="10%">Created At</th>
														</tr>
													</thead>
													<tbody>
																													<tr>
																<td>1</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	MOJO1523H05A67177309
																</td>
																<td>
																Rs.8274
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>2</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.8274
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>3</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.8274
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>4</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.8274
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>5</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	20210523111212800110168564402666864
																</td>
																<td>
																Rs.8274
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>6</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>7</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>8</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>9</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>10</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>11</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>12</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>13</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>14</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>15</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>16</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>17</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>18</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>19</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>20</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	931855296
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>21</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.43670.28
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>22</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.43670.28
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>23</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.43670.28
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>24</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	
																</td>
																<td>
																Rs.43670.28
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>25</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	2170358
																</td>
																<td>
																Rs.43670.28
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>26</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	2170364
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>27</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	SSLCZ_TXN_60aa18d154433
																</td>
																<td>
																Rs.10155.6
																</td>
																<td>
																	23-05-2021
																</td>
															</tr>
																													<tr>
																<td>28</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	43T59207553019345
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	24-05-2021
																</td>
															</tr>
																													<tr>
																<td>29</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	82380062E2495580K
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	24-05-2021
																</td>
															</tr>
																													<tr>
																<td>30</td>
																<td>Premium</td>
																<td>Deleted</td>
																<td>
																	1237066577
																</td>
																<td>
																Rs.120
																</td>
																<td>
																	25-05-2021
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
	location.href = 'https://ecom.viduradi.com/admin/subscription/earning';
	})												
</script>


	</body>

</html>
