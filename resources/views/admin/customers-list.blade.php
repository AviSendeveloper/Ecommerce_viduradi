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
					  
					<input type="hidden" id="headerdata" value="CUSTOMER">
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading">Customers</h4>
										<ul class="links">
											<li>
												<a href="admin">Dashboard </a>
											</li>
											<li>
												<a href="admin/users">Customers</a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<div class="product-area">
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
							<div class="row">
								<div class="col-lg-12">
									<div class="mr-table allproduct">
										<div class="alert alert-success validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <p class="text-left"></p> 
      </div> 
      								<?php use App\Models\User; ?>
      								<?php $allUser = User::allUser(); ?>
										<div class="table-responsiv">
												<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
									                        <th>Name</th>
									                        <th>Email</th>
									                        <th>Contact Number</th>
									                        <th>Options</th>
														</tr>
													</thead>
													<tbody>
													@foreach($allUser as $user)
														<tr>
															<td>{{$user['name']}}</td>
															<td>{{$user['email']}}</td>
															<td>{{$user['phone']}}</td>
															<td><div class="action-list">
																<a href=""> <i class="fas fa-eye"></i> Details
																</a>

																<a href=""> <i type="button" class="fas fa edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Edit</i>
																</a>

																<a href="javascript:;" class="send" data-email="{{$user['email']}}" data-toggle="modal" data-target="#vendorform"><i class="fas fa-envelope"></i> Send
																</a>
																<select class="process select droplinks drop-success" style="display: none;">
																	<option data-val="0" value="">Block</option>
																	<option data-val="1" value="" selected="">UnBlock</option>
																</select>
																<a href="/delete-customer/{{$user['id']}}"><i class="fas fa-trash-alt"></i>
															</a>
															</div>
															
														</div>
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



							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form>
						          <div class="form-group">
						            <label for="recipient-name" class="col-form-label">Recipient:</label>
						            <input type="text" class="form-control" id="recipient-name">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="col-form-label">Message:</label>
						            <textarea class="form-control" id="message-text"></textarea>
						          </div>
						        </form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-primary">Send message</button>
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
            <p class="text-center">You are about to delete this Customer.</p>
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




<div class="sub-categori">
	<div class="modal" id="vendorform" tabindex="-1" role="dialog" aria-labelledby="vendorformLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="vendorformLabel">Send Message</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
			<div class="modal-body">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-12">
							<div class="contact-form">
								<form  action="/send-message-to-customer" method="post">
									@csrf
									<ul>
										<li>
											<input type="email" class="input-field eml-val" id="eml1" name="to" placeholder="Email *" value="" required="">
										</li>
										<li>
											<input type="text" class="input-field" id="subj1" name="subject" placeholder="Subject *" required="">
										</li>
										<li>
											<textarea class="input-field" name="message" id="msg1" placeholder="Your Message *" required=""></textarea>
										</li>
									</ul>
									<button class="submit-btn" type="submit">Send Message</button>
								</form>
							</div>
						</div>
					</div>
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
			  var mainurl = "https://viduradi.com";
			  var admin_loader = 1;
			  var whole_sell = 6;
			  var getattrUrl = 'admin/getattributes';
			  var curr = {"id":1,"name":"INR","sign":"Rs.","value":"1","is_default":"1"};
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


		


    <script type="text/javascript">

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: 'admin/users/datatables',
               columns: [
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
            			{ data: 'action', searchable: false, orderable: false }
                     ],
               language : {
                	processing: '<img src="assets/images/1564224329loading3.gif">'
                },
                drawCallback : function( settings ) {
                        $('.select').niceSelect();  
                }
            });


		$(document).on('click','.deposit',function(){
			if(admin_loader == 1)
			{
			$('.submit-loader').show();
			}
			$('#modal1').find('.modal-title').html('Manage Deposit');
			$('#modal1 .modal-content .modal-body').html('').load($(this).attr('data-href'),function(response, status, xhr){
				if(status == "success")
				{
					if(admin_loader == 1)
					{
						$('.submit-loader').hide();
					}
				}
				});
			});

		$(document).on('click','.reward',function(){
			if(admin_loader == 1)
			{
			$('.submit-loader').show();
			}
			$('#modal1').find('.modal-title').html('Manage Reward');
			$('#modal1 .modal-content .modal-body').html('').load($(this).attr('data-href'),function(response, status, xhr){
				if(status == "success")
				{
					if(admin_loader == 1)
					{
						$('.submit-loader').hide();
					}
				}
				});
			});
																
    </script>


    


	</body>

</html>
