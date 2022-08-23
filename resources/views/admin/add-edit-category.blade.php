<!doctype html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="GeniusOcean">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Title -->
      <title>VIDURADI</title>
      <!-- favicon -->
      <link rel="icon"  type="image/x-icon" href="{{asset('assets/images/1640748995viduradifav.png')}}"/>
      <!-- Bootstrap -->
      <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" />
      <!-- Fontawesome -->
      <link rel="stylesheet" href="{{asset('assets/admin/css/fontawesome.css')}}">
      <!-- icofont -->
      <link rel="stylesheet" href="{{asset('assets/admin/css/icofont.min.css')}}">
      <!-- Sidemenu Css -->
      <link href="{{asset('assets/admin/plugins/fullside-menu/css/dark-side-style.css')}}" rel="stylesheet" />
      <link href="{{asset('assets/admin/plugins/fullside-menu/waves.min.css')}}" rel="stylesheet" />
      <link href="{{asset('assets/admin/css/plugin.css')}}" rel="stylesheet" />
      <link href="{{asset('assets/admin/css/jquery.tagit.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap-coloroicker.css')}}">
      <!-- Main Css -->
      <!-- <link rel="stylesheet" href="{{asset('assets/vendor/css/select2.min.css')}}"> -->
      <!-- stylesheet -->
      <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet"/>
      <link href="{{asset('assets/admin/css/custom.css')}}" rel="stylesheet"/>
      <link href="{{asset('assets/admin/css/responsive.css')}}" rel="stylesheet" />
      <link href="{{asset('assets/admin/css/common.css')}}" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

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
                           <h4 class="heading">{{$title}}</h4>
                           <ul class="links">
                              <li>
                                 <a href="/admin">Dashboard </a>
                              </li>
                             
                              <li>
                                 <a href="/add-category">Add Category</a>
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
                                 <div class="gocover" style="background: url(/assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                                 <form @if (empty($category['id'])) action="{{url('/add-edit-category')}}" @else action="{{url('/add-edit-category/'.$category['id'])}}" @endif id="category_form" method="POST" enctype="multipart/form-data">
                                  @csrf
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
                                             <h4 class="heading">Category Name *
                                             </h4>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <input type="text" class="input-field" placeholder="Category Name" name="category_name" @if (!empty($category['category_name'])) value="{{$category['category_name']}}" @endif required="">
                                       </div>
                                    </div>
                                    <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Select Section *
                                             </h4>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <select class="input-field " name="section_id" id="section_id" required="" >
                                            <option>Select Section</option>
                                            @foreach($getSections as $section)
                                            <option value="{{$section['id']}}" @if (!empty($category['section_id'] && $category['section_id'] == $section['id'])) selected @endif>{{$section['name']}}</option>
                                            @endforeach
                                          </select>
                                       </div>
                                    </div>
                                   <div id="appendCategoriesLevel">
                                      @include('admin.appends_categories_level')
                                   </div>
                                    
                                    <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Category Image *
                                             </h4>
                                            
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <input type="file" class="input-field" placeholder="Fixed Commission" name="category_image" @if ( empty($category['category_image'])) required="" @endif>
                                       </div>
                                       @if (!empty($category['category_image']))
                                          {{-- <div class="col-lg-3"></div> --}}
                                          <div class="col-lg-6">
                                             <img src="{{asset('category/image/'.$category['category_image'])}}" alt="" style="height:100px; weight:80px;">
                                             <a href="/delete-category-image/{{$category['id']}}">Delete Image</a>
                                          </div>
                                       @endif
                                    </div>
                                    <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Category Discount *
                                             </h4>
                                            
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <input type="text" class="input-field" placeholder="Category Discount " name="category_discount" @if (!empty($category['category_discount'])) value="{{$category['category_discount']}}" @endif required="">
                                       </div>
                                    </div>
                                    <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Category URL *
                                             </h4>
                                            
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <input type="text" class="input-field" placeholder="Category URL" name="url" @if (!empty($category['url'])) value="{{$category['url']}}" @endif required="">
                                       </div>
                                    </div>
                                    <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Category Description *
                                             </h4>
                                            
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <textarea class="input-field" placeholder="Category Description" name="description"  required="">@if (!empty($category['description'])) {{$category['description']}} @endif</textarea>
                                       </div>
                                    </div>
                                    <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Meta Title *
                                             </h4>
                                            
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <input type="text" class="input-field" placeholder="Meta Title " name="meta_title" @if (!empty($category['meta_title'])) value="{{$category['meta_title']}}" @endif required="">
                                       </div>
                                    </div>
                                    <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Meta Description *
                                             </h4>
                                            
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <textarea class="input-field" placeholder="Meta Description " name="meta_description" required="">@if (!empty($category['meta_description'])) {{$category['meta_description']}} @endif</textarea>
                                       </div>
                                    </div>
                                    <div class="row justify-content-center">
                                       <div class="col-lg-3">
                                          <div class="left-area">
                                             <h4 class="heading">Meta Keyword *
                                             </h4>
                                            
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <input type="text" class="input-field" placeholder="Meta Keyword " name="meta_keyword" @if (!empty($category['meta_keyword'])) value="{{$category['meta_keyword']}}" @endif required="">
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-lg-4">
                                          <div class="left-area">
                                          </div>
                                       </div>
                                       <div class="col-lg-7">
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
         var mainurl = "";
         var admin_loader = 1;
         var whole_sell = 6;
         var getattrUrl = '/admin/getattributes';
         var curr = {"id":1,"name":"INR","sign":"Rs.","value":"1","is_default":"1"};
         // console.log(curr);
      </script>
      <!-- Dashboard Core -->
      <script src="{{asset('/assets/admin/js/vendors/jquery-1.12.4.min.js')}}"></script>
      <script src="{{asset('/assets/admin/js/vendors/vue.js')}}"></script>
      <script src="{{asset('/assets/admin/js/vendors/bootstrap.min.js')}}"></script>
      <script src="{{asset('/assets/admin/js/jqueryui.min.js')}}"></script>
      <!-- Fullside-menu Js-->
      <script src="{{asset('/assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js')}}"></script>
      <script src="{{asset('/assets/admin/plugins/fullside-menu/waves.min.js')}}"></script>
      <script src="{{asset('/assets/admin/js/plugin.js')}}"></script>
      <script src="{{asset('/assets/admin/js/Chart.min.js')}}"></script>
      <script src="{{asset('/assets/admin/js/tag-it.js')}}"></script>
      <script src="{{asset('/assets/admin/js/nicEdit.js')}}"></script>
      <script src="{{asset('/assets/admin/js/bootstrap-colorpicker.min.j')}}s"></script>
      <script src="{{asset('/assets/admin/js/notify.js')}}"></script>
      <script src="{{asset('/assets/admin/js/jquery.canvasjs.min.js')}}"></script>
      <script src="{{asset('/assets/admin/js/load.js')}}"></script>
      <script src="{{asset('/assets/vendor/js/select2.min.js')}}"></script>
      <!-- Custom Js-->
      <script src="{{asset('/assets/admin/js/custom.js')}}"></script>
      <!-- AJAX Js-->
      <script src="{{asset('/assets/admin/js/myscript.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
         $(document).ready(function() {
          $('.js-example-basic-multiple').select2();
         });    
      </script>
      <script >
        $(".multiple-select").select2({
            // maximumSelectionLength: 2
            });
      </script>
      <script>
        $('#section_id').change(function(){
          var section_id = $(this).val()
         //  alert(section_id);

          $.ajax({
              headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
              type: 'post',
              url : '/append-categories-level',
              data : {section_id:section_id},
              success:function(resp){
               //   alert(resp); die;
                $("#appendCategoriesLevel").html(resp);
              },error:function(){
                alert("error")
              }
            });
        });
      </script>
   </body>
</html>