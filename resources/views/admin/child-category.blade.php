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
										<input type="hidden" id="headerdata" value="CHILD CATEGORY">
<input type="hidden" id="attribute_data" value="ADD NEW ATTRIBUTE">
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading">Child Categories</h4>
										<ul class="links">
											<li>
												<a href="https://ecom.viduradi.com/admin">Dashboard </a>
											</li>
											<li><a href="javascript:;">Manage Categories</a></li>
											<li>
												<a href="https://ecom.viduradi.com/admin/childcategory">Child Categories</a>
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
										<div class="table-responsiv">
												<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
															<th>Category</th>
															<th>Sub Category</th>
			                        <th>Name</th>
			                        <th>Slug</th>
			                        <th width="20%">Attributes</th>
			                        <th>Status</th>
			                        <th>Options</th>
														</tr>
													</thead>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



										<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">

										<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
												<div class="submit-loader">
														<img  src="https://ecom.viduradi.com/assets/images/1564224329loading3.gif" alt="">
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





										<div class="modal fade" id="attribute" tabindex="-1" role="dialog" aria-labelledby="attribute" aria-hidden="true">

										<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
												<div class="submit-loader">
														<img  src="https://ecom.viduradi.com/assets/images/1564224329loading3.gif" alt="">
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






<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
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
            <p class="text-center">You are about to delete this Child Category. Everything under this category will be deleted.</p>
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

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: 'https://ecom.viduradi.com/admin/childcategory/datatables',
               columns: [
               			{ data: 'category', searchable: false, orderable: false},
               			{ data: 'subcategory', searchable: false, orderable: false},
                    { data: 'name', name: 'name' },
										{ data: 'slug', name: 'slug' },
                    { data: 'attributes', name: 'attributes', searchable: false, orderable: false },
                    { data: 'status', searchable: false, orderable: false},
            				{ data: 'action', searchable: false, orderable: false }
								],
                language : {
                	processing: '<img src="https://ecom.viduradi.com/assets/images/1564224329loading3.gif">'
                },
				drawCallback : function( settings ) {
	    				$('.select').niceSelect();
				}
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 table-contents">'+
        	'<a class="add-btn" data-href="https://ecom.viduradi.com/admin/childcategory/create" id="add-data" data-toggle="modal" data-target="#modal1">'+
          '<i class="fas fa-plus"></i> Add New Child Category'+
          '</a>'+
          '</div>');
      });



</script>



	</body>

</html>
