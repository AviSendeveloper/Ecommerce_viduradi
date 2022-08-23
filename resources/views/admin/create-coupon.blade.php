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
                      <h4 class="heading">Add New Coupon <a class="add-btn" href="/set-coupon"><i class="fas fa-arrow-left"></i> Back</a></h4>
                      <ul class="links">
                        <li>
                          <a href="admin">Dashboard </a>
                        </li>
                        <li>
                          <a href="/set-coupon">Coupons</a>
                        </li>
                        <li>
                          <a href="/create-coupon">Add New Coupon</a>
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
                      <form id="geniusform" action="admin/coupon/create" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="9u1RhkVhVons4LEEicF24J4UjLbr2rrPx5iFMR8F">

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Code *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="code" placeholder="Enter Code" required="" value="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Allow Product Type*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select  name="coupon_type" required="" id="select_type_coupon">
                                  <option value="" selected>Select Type</option>
                                  <option value="category">Category</option>
                                  <option value="sub_category">Sub Category</option>
                                  <option value="child_category">Child Category</option>
                                   
                                </select>
                          </div>
                        </div>

                        <div class="row d-none" id="category">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Category*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select  name="category">
                                  <option value="">Select Category</option>
                                                                          <option value="4">Electronic</option>
                                                                          <option value="5">Fashion &amp; Beauty</option>
                                                                          <option value="6">Camera &amp; Photo</option>
                                                                          <option value="7">Smart Phone &amp; Table</option>
                                                                          <option value="8">Sport &amp; Outdoor</option>
                                                                          <option value="9">Jewelry &amp; Watches</option>
                                                                          <option value="10">Health &amp; Beauty</option>
                                                                          <option value="11">Books &amp; Office</option>
                                                                          <option value="12">Toys &amp; Hobbies</option>
                                                                          <option value="13">Books</option>
                                                                          <option value="15">Automobiles &amp; Motorcycles</option>
                                                                          <option value="16">Home decoration &amp; Appliance</option>
                                                                          <option value="17">Portable &amp; Personal Electronics</option>
                                                                          <option value="18">Outdoor, Recreation &amp; Fitness</option>
                                                                          <option value="19">Surveillance Safety &amp; Security</option>
                                                                    </select>
                          </div>
                        </div>

                        <div class="row d-none" id="sub_category">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subcategory*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select  name="sub_category" >
                                  <option value="">Select Subcategory</option>
                                                                          <option value="2">TELEVISION</option>
                                                                          <option value="3">REFRIGERATOR</option>
                                                                          <option value="4">WASHING MACHINE</option>
                                                                          <option value="5">AIR CONDITIONERS</option>
                                                                          <option value="6">ACCESSORIES</option>
                                                                          <option value="7">BAGS</option>
                                                                          <option value="8">CLOTHINGS</option>
                                                                          <option value="9">SHOES</option>
                                                                          <option value="10">APPLE</option>
                                                                          <option value="11">SAMSUNG</option>
                                                                          <option value="12">LG</option>
                                                                          <option value="13">SONY</option>
                                                                          <option value="14">DSLR</option>
                                                                          <option value="15">Camera Phone</option>
                                                                          <option value="16">Action Camera</option>
                                                                          <option value="17">Digital Camera</option>
                                                                    </select>
                          </div>
                        </div>

                        <div class="row d-none" id="child_category">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Child Category*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select  name="child_category" >
                                  <option value="">Select Child Category</option>
                                                                          <option value="1">LCD TV</option>
                                                                          <option value="2">LED TV</option>
                                                                          <option value="3">Curved TV</option>
                                                                          <option value="4">Plasma TV</option>
                                                                          <option value="5">Top Freezer</option>
                                                                          <option value="6">Side-by-Side</option>
                                                                          <option value="7">Counter-Depth</option>
                                                                          <option value="8">Mini Fridge</option>
                                                                          <option value="9">Front Loading</option>
                                                                          <option value="10">Top Loading</option>
                                                                          <option value="11">Washer Dryer Combo</option>
                                                                          <option value="12">Laundry Center</option>
                                                                          <option value="13">Central Air</option>
                                                                          <option value="14">Window Air</option>
                                                                          <option value="15">Portable Air</option>
                                                                          <option value="16">Hybrid Air</option>
                                                                    </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Type *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select id="type" name="type" >
                                <option value="">Choose a type</option>
                                <option value="0">Discount By Percentage</option>
                                <option value="1">Discount By Amount</option>
                              </select>
                          </div>
                        </div>

                        <div class="row hidden">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading"></h4>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <input type="text" class="input-field less-width" name="price" placeholder="" required="" value=""><span></span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Quantity *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select id="times" required="">
                                <option value="0">Unlimited</option>
                                <option value="1">Limited</option>
                              </select>
                          </div>
                        </div>

                        <div class="row hidden">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Value *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field less-width" name="times" placeholder="Enter Value" value=""><span></span>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Start Date *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="start_date" autocomplete="off" id="from" placeholder="Select a date" required="" value="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">End Date *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="end_date" autocomplete="off" id="to" placeholder="Select a date" required="" value="">
                          </div>
                        </div>

                        <br>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <button class="addProductSubmit-btn" type="submit">Create Coupon</button>
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



    $('#type').on('change', function() {
      var val = $(this).val();
      var selector = $(this).parent().parent().next();
      if(val == "")
      {
        selector.hide();
      }
      else {
        if(val == 0)
        {
          selector.find('.heading').html('Percentage *');
          selector.find('input').attr("placeholder", "Enter Percentage").next().html('%');
          selector.css('display','flex');
        }
        else if(val == 1){
          selector.find('.heading').html('Amount *');
          selector.find('input').attr("placeholder", "Enter Amount").next().html('$');
          selector.css('display','flex');
        }
      }
    });




  $(document).on("change", "#times" , function(){
    var val = $(this).val();
    var selector = $(this).parent().parent().next();
    if(val == 1){
    selector.css('display','flex');
    }
    else{
    selector.find('input').val("");
    selector.hide();    
    }
});

</script>

<script type="text/javascript">
    var dateToday = new Date();
    var dates =  $( "#from,#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        changeYear: true,
        minDate: dateToday,
        onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
          instance = $(this).data("datepicker"),
          date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
          dates.not(this).datepicker("option", option, date);
    }
});



$(document).on('change','#select_type_coupon',function(){
  let coupon_type = $(this).val();
  if(coupon_type == 'category'){
    $('#category').removeClass('d-none');
    $('#child_category').addClass('d-none');
    $('#sub_category').addClass('d-none');
  }else if(coupon_type =='sub_category'){
    $('#category').addClass('d-none');
    $('#child_category').addClass('d-none');
    $('#sub_category').removeClass('d-none');
  }else{
    $('#category').addClass('d-none');
    $('#child_category').removeClass('d-none');
    $('#sub_category').addClass('d-none');
  }
})

</script>



	</body>

</html>
