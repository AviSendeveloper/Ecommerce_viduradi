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
               <input type="hidden" id="headerdata" value="PRODUCT">
               <div class="content-area">
                  <div class="mr-breadcrumb">
                     <div class="row">
                        <div class="col-lg-12">
                           <h4 class="heading">Products</h4>
                           <ul class="links">
                              <li>
                                 <a href="admin">Dashboard </a>
                              </li>
                              <li>
                                 <a href="javascript:;">Products </a>
                              </li>
                              <li>
                                 <a href="admin/products">Catalog Products</a>
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
                                          <th>Name</th>
                                          <th>Type</th>
                                          <th>Stock</th>
                                          <th>Price</th>
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
               <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
                  <div class="modal-dialog highlight" role="document">
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
                           <h4 class="modal-title d-inline-block">Remove Catalog</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                           <p class="text-center">You are about to remove this Product from Catalog.</p>
                           <p class="text-center">Do you want to proceed?</p>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer justify-content-center">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                           <a class="btn btn-danger btn-ok">Remove</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal fade" id="setgallery" tabindex="-1" role="dialog" aria-labelledby="setgallery" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalCenterTitle">Image Gallery</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="top-area">
                              <div class="row">
                                 <div class="col-sm-6 text-right">
                                    <div class="upload-img-btn">
                                       <form  method="POST" enctype="multipart/form-data" id="form-gallery">
                                          <input type="hidden" name="_token" value="nvED5cnlgBDLB2tF4PxPjS7KlUVNQFAgX7Mi6kbY">
                                          <input type="hidden" id="pid" name="product_id" value="">
                                          <input type="file" name="gallery[]" class="hidden" id="uploadgallery" accept="image/*" multiple>
                                          <label for="image-upload" id="prod_gallery"><i class="icofont-upload-alt"></i>Upload File</label>
                                       </form>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <a href="javascript:;" class="upload-done" data-dismiss="modal"> <i class="fas fa-check"></i> Done</a>
                                 </div>
                                 <div class="col-sm-12 text-center">( <small>You can upload multiple Images.</small> )</div>
                              </div>
                           </div>
                           <div class="gallery-images">
                              <div class="selected-image">
                                 <div class="row">
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
      <script type="text/javascript">
         var table = $('#geniustable').DataTable({
               ordering: false,
                      processing: true,
                      serverSide: true,
                      ajax: 'admin/products/catalogs/datatables',
                      columns: [
                               { data: 'name', name: 'name' },
                               { data: 'type', name: 'type' },
                               { data: 'stock', name: 'stock' },
                               { data: 'price', name: 'price' },
                               { data: 'status', searchable: false, orderable: false},
                            { data: 'action', searchable: false, orderable: false }
         
                            ],
                       language : {
                        processing: '<img src="assets/images/1564224329loading3.gif">'
                       },
                drawCallback : function( settings ) {
                            $('.select').niceSelect();  
                }
                   });
                                        
                                    
         
         
         
      </script>
      <script type="text/javascript">
         // Gallery Section Update
         
             $(document).on("click", ".set-gallery" , function(){
                 var pid = $(this).find('input[type=hidden]').val();
                 $('#pid').val(pid);
                 $('.selected-image .row').html('');
                     $.ajax({
                             type: "GET",
                             url:"admin/gallery/show",
                             data:{id:pid},
                             success:function(data){
                               if(data[0] == 0)
                               {
                                $('.selected-image .row').addClass('justify-content-center');
                                $('.selected-image .row').html('<h3>No Images Found.</h3>');
                              }
                               else {
                                $('.selected-image .row').removeClass('justify-content-center');
                                $('.selected-image .row h3').remove();      
                                   var arr = $.map(data[1], function(el) {
                                   return el });
         
                                   for(var k in arr)
                                   {
                                $('.selected-image .row').append('<div class="col-sm-6">'+
                                                 '<div class="img gallery-img">'+
                                                     '<span class="remove-img"><i class="fas fa-times"></i>'+
                                                     '<input type="hidden" value="'+arr[k]['id']+'">'+
                                                     '</span>'+
                                                     '<a href="'+'assets/images/galleries/'+arr[k]['photo']+'" target="_blank">'+
                                                     '<img src="'+'assets/images/galleries/'+arr[k]['photo']+'" alt="gallery image">'+
                                                     '</a>'+
                                                 '</div>'+
                                            '</div>');
                                   }                         
                                }
          
                             }
                           });
               });
         
         
           $(document).on('click', '.remove-img' ,function() {
             var id = $(this).find('input[type=hidden]').val();
             $(this).parent().parent().remove();
                $.ajax({
                    type: "GET",
                    url:"admin/gallery/delete",
                    data:{id:id}
                });
           });
         
           $(document).on('click', '#prod_gallery' ,function() {
             $('#uploadgallery').click();
           });
                                                 
                                         
           $("#uploadgallery").change(function(){
             $("#form-gallery").submit();  
           });
         
           $(document).on('submit', '#form-gallery' ,function() {
                  $.ajax({
                   url:"admin/gallery/store",
                   method:"POST",
                   data:new FormData(this),
                   dataType:'JSON',
                   contentType: false,
                   cache: false,
                   processData: false,
                   success:function(data)
                   {
                    if(data != 0)
                    {
                                $('.selected-image .row').removeClass('justify-content-center');
                                $('.selected-image .row h3').remove();   
                        var arr = $.map(data, function(el) {
                        return el });
                        for(var k in arr)
                           {
                                $('.selected-image .row').append('<div class="col-sm-6">'+
                                                 '<div class="img gallery-img">'+
                                                     '<span class="remove-img"><i class="fas fa-times"></i>'+
                                                     '<input type="hidden" value="'+arr[k]['id']+'">'+
                                                     '</span>'+
                                                     '<a href="'+'assets/images/galleries/'+arr[k]['photo']+'" target="_blank">'+
                                                     '<img src="'+'assets/images/galleries/'+arr[k]['photo']+'" alt="gallery image">'+
                                                     '</a>'+
                                                 '</div>'+
                                            '</div>');
                            }          
                    }
                                     
                                       }
         
                  });
                  return false;
          }); 
         
         
         // Gallery Section Update Ends 
         
         
      </script>
   </body>
</html>