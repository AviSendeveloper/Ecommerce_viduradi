
<!doctype html>
<html lang="en" dir="ltr">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="author" content="GeniusOcean">
    	<meta name="csrf-token" content="AENtXibCVV4FQuasRe9Kl6vIIPLN3o1gDfiqzPXV">
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
                      <h4 class="heading">Google Login</h4>
                    <ul class="links">
                      <li>
                        <a href="admin">Dashboard </a>
                      </li>
                      <li>
                        <a href="javascript:;">Social Settings</a>
                      </li>
                      <li>
                        <a href="admin/social/google">Google Login</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="add-product-content1">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">
                        <div class="gocover" style="background: url(assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
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
                       <form action="/admin-social-update" id="" method="POST" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" name="id" value="{{$data['id']}}">

                        <div class="alert alert-success validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <p class="text-left"></p> 
      </div>
      <div class="alert alert-danger validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <ul class="text-left">
            </ul>
      </div>  

                        <div class="row justify-content-center">
                            <div class="col-lg-3">
                              <div class="left-area">
                                <h4 class="heading">
                                    Google Login
                                </h4>
                              </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="action-list">
                                     <label class="switch">
                                             <input data-id="{{$data->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-style="ios" data-on="Active" data-off="InActive" {{ $data->status ? 'checked' : '' }}>
                                             <span class="slider round"></span>
                                          </label>
                                  </div>
                            </div>
                          </div>

                        <div class="row justify-content-center">
                          <div class="col-lg-3">
                            <div class="left-area">
                                <h4 class="heading">Client ID *</h4>
                                <p class="sub-heading">Get Your Client ID from console.cloud.google.com</p>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <input type="text" class="input-field" placeholder="Enter Client ID" name="app_id" value="{{$data['app_id']}}" required="">
                          </div>
                        </div>

                        <div class="row justify-content-center">
                          <div class="col-lg-3">
                            <div class="left-area">
                                <h4 class="heading">Client Secret *</h4>
                                <p class="sub-heading">Get Your Client Secret from console.cloud.google.com</p>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <input type="text" class="input-field" placeholder="Enter Client Secret" name="app_secret" value="{{$data['app_secret']}}" required="">
                          </div>
                        </div>


                        <div class="row justify-content-center">
                          <div class="col-lg-3">
                            <div class="left-area">
                                <h4 class="heading">Website URL *</h4>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <input type="text" class="input-field" name="url" placeholder="Website URL"  value="{{$data['url']}}" readonly>
                          </div>
                        </div>

                        <div class="row justify-content-center">
                          <div class="col-lg-3">
                            <div class="left-area">
                                <h4 class="heading">Redirect URL *</h4>
                                <p class="sub-heading">Copy this url and paste it to your Redirect URL in console.cloud.google.com.</p>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <input type="text" class="input-field" placeholder="Enter Site URL" name="redirect_url" value="{{$data['redirect_url']}}" readonly>
                          </div>
                        </div>


                        <div class="row justify-content-center">
                          <div class="col-lg-3">
                            <div class="left-area">
                              
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <button class="addProductSubmit-btn" type="submit">Save</button>
                          </div>
                        </div>
                     </form>
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
			  var curr = {"id":1,"name":"INR","sign":"Rs.","value":1,"is_default":1};
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

    <script>
      $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var user_id = $(this).data('id'); 
             
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeFacebookStatus',
                data: {'status': status, 'user_id': user_id},
                success: function(data){
                  console.log(data.success)
                }
            });
        })
      })
    </script>
		

	</body>

</html>
