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
                           <h4 class="heading">Add Product</h4>
                           <ul class="links">
                              <li>
                                 <a href="admin">Dashboard</a>
                              </li>
                              <li>
                                 <a href="javascript:;">Products </a>
                              </li>
                              <li>
                                 <a href="admin/products">All Products</a>
                              </li>
                              <li>
                                 <a href="admin/products/types">Add Product</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="add-product-content">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="product-description">
                              <div class="heading-area">
                                 <h2 class="title">
                                    Product Types
                                 </h2>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="ap-product-categories">
                        <div class="row">
                           <div class="col-lg-4">
                              <a href="/add-edit-product">
                                 <div class="cat-box box1">
                                    <div class="icon">
                                       <i class="fas fa-tshirt"></i>
                                    </div>
                                    <h5 class="title">Physical </h5>
                                 </div>
                              </a>
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
   </body>
</html>