<!doctype html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="GeniusOcean">
      <!-- Title -->
      <title>VIDURADI|Login</title>
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
      <link href="assets/admin/css/style.css" rel="stylesheet"/>
      <link href="assets/admin/css/custom.css" rel="stylesheet"/>
      <link href="assets/admin/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <!-- Login and Sign up Area Start -->
      <section class="login-signup">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-5">
                  <div class="login-area">
                     <div class="header-area">
                        <h4 class="title">Register Now</h4>
                        <p class="text"></p>
                     </div>
                     <div class="login-form">
                        <div class="alert alert-info validation" style="display: none;">
                           <p class="text-left"></p>
                        </div>
                        <div class="alert alert-success validation" style="display: none;">
                           <button type="button" class="close alert-close"><span>×</span></button>
                           <p class="text-left"></p>
                        </div>
                        <div class="alert alert-danger validation" style="display: none;">
                           <button type="button" class="close alert-close"><span>×</span></button>
                           <p class="text-left"></p>
                        </div>
                        <form action="/admin-register" method="POST">
                          @csrf
                          <div class="form-input">
                              <input type="text" name="name" class="User Name" placeholder="Type Name" value="" required="" autofocus>
                              <i class="icofont-user-alt-5"></i>
                           </div>
                           <div class="form-input">
                              <input type="email" name="email" class="User Name" placeholder="Type Email Address" value="" required="" autofocus>
                              <i class="icofont-user-alt-5"></i>
                           </div>
                           <div class="form-input">
                              <input type="password" name="password" class="Password" placeholder="Type Password">
                              <i class="icofont-ui-password"></i>
                           </div>
                          
                           <button type="submit" class="submit-btn">Register</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Login and Sign up Area End -->
      <!-- Dashboard Core -->
      <script src="assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
      <script src="assets/admin/js/vendors/bootstrap.min.js"></script>
      <script src="assets/admin/js/jqueryui.min.js"></script>
      <!-- Fullside-menu Js-->
      <script src="assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js"></script>
      <script src="assets/admin/plugins/fullside-menu/waves.min.js"></script>
      <script src="assets/admin/js/plugin.js"></script>
      <script src="assets/admin/js/tag-it.js"></script>
      <script src="assets/admin/js/nicEdit.js"></script>
      <script src="assets/admin/js/bootstrap-colorpicker.min.js"></script>
      <script src="assets/admin/js/load.js"></script>
      <!-- Custom Js-->
      <script src="assets/admin/js/custom.js"></script>
      <!-- AJAX Js-->
      <script src="assets/admin/js/myscript.js"></script>
   </body>
</html>