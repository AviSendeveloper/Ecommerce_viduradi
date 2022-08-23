<?php use App\Models\Payment; ?>
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

      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
   </head>
   <body>
      <?php use App\Models\Order; ?>
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
                           <h4 class="heading">Order Payments</h4>
                           <ul class="links">
                              <li>
                                 <a href="admin">Dashboard </a>
                              </li>
                              <li>
                                 <a href="javascript:;">Payments </a>
                              </li>
                              <li>
                                 <a href="/order-product">Order Payments</a>
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
                              <div class="container">
                                <table class="table table-bordered responsive" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Transaction ID</th>
                                            <th>Fee / Charges</th>
                                            <th>Order Status</th>
                                            <th>Created On</th>
                                            <th>Payment Method</th>
                                            <th>Total Amount</th>
                                            <th>Action </th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php $payment = Payment::payments(); ?>
                                      @foreach($payment as $payments)
                                      <?php $order = Order::where('id', $payments['order_id'])->first(); ?>
                                        <tr>
                                            <td>{{$payments['order_id']}}</td>
                                            <td>{{$payments['transaction_id']}}</td>
                                            <td>{{$payments['fee']}}</td>
                                            <td>{{$order['order_status']}}</td>
                                            <td>{{$payments['created_at']}}</td>
                                            <td>{{$payments['payment_method']}}</td>
                                            <td>{{$payments['total_ammount']}}</td>
                                            <td>
                                              <a title="View Payments Detail" href="/view-payment-invoice/{{$payments['order_id']}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                              <a title="Download invoice" href="/print-payment-invoice/{{$payments['order_id']}}"><i class="fas fa-file"></i></a>
                                              <a title="Delete unwanted payments" href="/delete-payment/{{$payments['id']}}"><i class="fas fa-trash"></i></a>
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
    $(document).ready(function() {
          $('#dataTable').DataTable();
    });
</script>
<script>
$(function () {
    $('#dataTable').DataTable({
   
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
      "order": [[3, 'asc']]
      });
  });
</script> 
   </body>
</html>