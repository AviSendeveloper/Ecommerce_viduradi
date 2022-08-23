<!doctype html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="GeniusOcean">
      <meta name="csrf-token" content="fUTilar1AmuMDF5Acw4kfh9DxhXUYLi8E6WIetRX">
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
   <style>
      .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
      }
      .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
      }
      .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
      }
      .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
      }
      input:checked + .slider {
      background-color: #2196F3;
      }
      input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
      }
      input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
      }
      /* Rounded sliders */
      .slider.round {
      border-radius: 34px;
      }
      .slider.round:before {
      border-radius: 50%;
      }
   </style>
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
               <input type="hidden" id="headerdata" value="COUPON">
               <div class="content-area">
                  <div class="mr-breadcrumb">
                     <div class="row">
                        <div class="col-lg-12">
                           <h4 class="heading">Coupons</h4>
                           <ul class="links">
                              <li>
                                 <a href="/dashboard">Dashboard </a>
                              </li>
                              <li>
                                 <a href="/admin-coupon">Coupons</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="product-area">
                     <div class="row">
                        <div class="col-lg-12">
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
                           <div class="mr-table allproduct">
                              <div class="alert alert-success validation" style="display: none;">
                                 <button type="button" class="close alert-close"><span>×</span></button>
                                 <p class="text-left"></p>
                              </div>
                              <div class="col-sm-4 table-contents float-right">
                                 <a class="add-btn" href="/add-edit-coupon">
                                 <i class="fas fa-plus"></i> Add New Coupon
                                 </a>
                              </div>
                              <div class="table-responsive">
                                 <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                    <thead>
                                       <tr>
                                          <th>Code</th>
                                          <th>Type</th>
                                          <th>Amount</th>
                                          <th>Expiry Date</th>
                                          <th>Status</th>
                                          <th>Options</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($coupons as $coupon)
                                       <tr>
                                          <td>{{$coupon['coupon_code']}}</td>
                                          <td>{{$coupon['coupon_type']}}</td>
                                          <td>{{$coupon['ammount']}} @if($coupon['ammount'] == "Percentage")
                                             %
                                             @else
                                             INR
                                             @endif
                                          </td>
                                          <td>{{$coupon['expiry_date']}}</td>
                                          <td>
                                             <label class="switch">
                                             <input data-id="{{$coupon['id']}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-style="ios" data-on="Active" data-off="InActive" {{ $coupon['status'] ? 'checked' : '' }}>
                                             <span class="slider round"></span>
                                             </label>
                                          </td>
                                          <td>
                                             <a href="/add-edit-coupon/{{$coupon['id']}}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;
                                             <a href="/delete-coupon/{{$coupon['id']}}"><i class="fas fa-trash"></i></a>
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
               <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="submit-loader">
                           <img  src="assets/images/1564224329loading3.gif" alt="">
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
                           <p class="text-center">You are about to delete this Coupon.</p>
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
                   url: '/changeCouponStatus',
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