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
               <input type="hidden" id="headerdata" value="PRODUCT">
               <div class="content-area">
                  <div class="mr-breadcrumb">
                     <div class="row">
                        <div class="col-lg-12">
                           <h4 class="heading">Sections</h4>
                           <ul class="links">
                              <li>
                                 <a href="admin">Sections</a>
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
                              <div class="col-sm-4 table-contents" style="float: right;">
                                <a class="add-btn" href="/add-section">
                                    <i class="fas fa-plus"></i> <span class="remove-mobile">Add New Section<span>
                                </a>
                               </div>
                              <div class="table-responsiv">
                                <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sections as $section)
                                            <tr>
                                                <td>{{$section['id']}}</td>
                                                <td>{{$section['name']}}</td>
                                                <td>
                                                    <label class="switch">
                                                    <input data-id="{{$section['id']}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-style="ios" data-on="Active" data-off="InActive" {{ $section['status'] ? 'checked' : '' }}>
                                                    <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/edit-section/{{$section['id']}}"><i class="fas fa-edit"></i></a>
                                                    <a href="/delete-section/{{$section['id']}}"><i class="fas fa-trash"></i></a>
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
               <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
                  <div class="modal-dialog highlight" role="document">
                     <div class="modal-content">
                       <!--  <div class="submit-loader">
                           <img  src="assets/images/1564224329loading3.gif" alt="">
                        </div> -->
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
               <div class="modal fade" id="catalog-modal" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header d-block text-center">
                           <h4 class="modal-title d-inline-block">Update Status</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                           <p class="text-center">You are about to change the status of this Product.</p>
                           <p class="text-center">Do you want to proceed?</p>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer justify-content-center">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                           <a class="btn btn-success btn-ok">Proceed</a>
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
                           <p class="text-center">You are about to delete this Product.</p>
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
     <!--  <script type="text/javascript">
         var table = $('#geniustable').DataTable({
               ordering: false,
                      // processing: true,
                      serverSide: true,
                      ajax: 'admin/products/datatables',
                      columns: [
                               { data: 'name', name: 'name' },
                               { data: 'type', name: 'type' },
                               { data: 'stock', name: 'stock' },
                               { data: 'price', name: 'price' },
                               { data: 'status', searchable: false, orderable: false},
                            { data: 'action', searchable: false, orderable: false }
         
                            ],
                       // language : {
                       //  processing: '<img src="assets/images/1564224329loading3.gif">'
                       // },
                drawCallback : function( settings ) {
                            $('.select').niceSelect();  
                }
                   });
         
                $(function() {
               $(".btn-area").append('<div class="col-sm-4 table-contents">'+
                '<a class="add-btn" href="admin/products/types">'+
                 '<i class="fas fa-plus"></i> <span class="remove-mobile">Add New Product<span>'+
                 '</a>'+
                 '</div>');
             });                                            
                                   
         
         
         
         
         
      </script> -->
      
       <script>
      $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var section_id = $(this).data('id');
            //  alert(user_id);
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/change-sections-status',
                data: {'status': status, 'section_id': section_id},
                success: function(data){
                  console.log(data.success)
                }
            });
        })
      })
    </script>
   </body>
</html>