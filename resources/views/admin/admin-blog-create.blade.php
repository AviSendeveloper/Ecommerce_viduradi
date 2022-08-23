<?php use App\Models\blogcategory; ?>
<!doctype html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="GeniusOcean">
      <meta name="csrf-token" content="JGovwDEJQpchk9P7CqezBqJOhSq2TqIbtJpFXkfl">
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
            @include('layout.nav')
            <!-- Main Content Area Start -->
            <div class="content-area">
               <div class="mr-breadcrumb">
                  <div class="row">
                     <div class="col-lg-12">
                        <h4 class="heading">Add New Post <a class="add-btn" href="/blog-post"><i class="fas fa-arrow-left"></i> Back</a></h4>
                        <ul class="links">
                           <li>
                              <a href="/dashbard">Dashboard </a>
                           </li>
                           <li><a href="javascript:;">Blog</a></li>
                           <li>
                              <a href="/blog-post">Posts</a>
                           </li>
                           <li>
                              <a href="/admin-blog-create">Add New Post</a>
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
                              <div class="alert alert-success validation" style="display: none;">
                                 <button type="button" class="close alert-close"><span>×</span></button>
                                 <p class="text-left"></p>
                              </div>
                              <div class="alert alert-danger validation" style="display: none;">
                                 <button type="button" class="close alert-close"><span>×</span></button>
                                 <ul class="text-left">
                                 </ul>
                              </div>
                              <form id="" action="/add-blog-form" method="POST" enctype="multipart/form-data">
                                @csrf
                                 <div class="row">
                                    <div class="col-lg-4">
                                       <div class="left-area">
                                          <h4 class="heading">Category*</h4>
                                       </div>
                                    </div>
                                    <?php $category = blogcategory::blog(); ?>
                                    <div class="col-lg-7">
                                       <select  name="category_id" required="">
                                        @foreach($category as $categories)
                                          <option value="{{$categories['id']}}">{{$categories['category']}}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-4">
                                       <div class="left-area">
                                          <h4 class="heading">Title *</h4>
                                          <p class="sub-heading">(In Any Language)</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <input type="text" class="input-field" name="title" placeholder="Title" required="" value="">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-4">
                                       <div class="left-area">
                                          <h4 class="heading">Current Featured Image *</h4>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <div class="img-upload">
                                          <div id="image-preview" class="img-preview" style="background: url(assets/admin/images/upload.png);">
                                             <label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i>Upload Image</label>
                                             <input type="file" name="image" class="img-upload" id="image-upload">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-4">
                                       <div class="left-area">
                                          <h4 class="heading">
                                             Description *
                                          </h4>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <textarea  class="nic-edit-p" name="details"></textarea> 
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-4">
                                       <div class="left-area">
                                          <h4 class="heading">Slug *</h4>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <input type="text" class="input-field" name="slug" placeholder="Slug" required="" value="">
                                       <div class="checkbox-wrapper">
                                          <input type="checkbox" name="secheck" class="checkclick" id="allowProductSEO">
                                          <label for="allowProductSEO">Allow Blog SEO</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="showbox">
                                    <div class="row">
                                       <div class="col-lg-4">
                                          <div class="left-area">
                                             <h4 class="heading">Meta Tags *</h4>
                                          </div>
                                       </div>
                                       <div class="col-lg-7">
                                          <ul id="metatags" class="myTags">
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-4">
                                          <div class="left-area">
                                             <h4 class="heading">
                                                Meta Description *
                                             </h4>
                                          </div>
                                       </div>
                                       <div class="col-lg-7">
                                          <div class="text-editor">
                                             <textarea class="input-field" name="meta_description" placeholder="Meta Description"></textarea> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-4">
                                       <div class="left-area">
                                          <h4 class="heading">Tags *</h4>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <ul id="tags" class="myTags">
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-4">
                                       <div class="left-area">
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <button class="addProductSubmit-btn" type="submit">Create Post</button>
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
      <script type="text/javascript">
         $("#metatags").tagit({
         fieldName: "meta_tag[]",
         allowSpaces: true 
         });
         
         $("#tags").tagit({
         fieldName: "tags[]",
         allowSpaces: true 
         });
         
      </script>
   </body>
</html>