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
				<h4 class="heading">Affiliate Product <a class="add-btn"
						href="https://viduradi.com/admin/products/types"><i class="fas fa-arrow-left"></i> Back</a>
				</h4>
				<ul class="links">
					<li>
						<a href="https://viduradi.com/admin">Dashboard </a>
					</li>
					<li>
						<a href="javascript:;">Affiliate Products </a>
					</li>
					<li>
						<a href="https://viduradi.com/admin/products/import/index">All Products</a>
					</li>
					<li>
						<a href="https://viduradi.com/admin/products/import/create">Add Affiliate Product</a>
					</li>
				</ul>
			</div>
		</div>
	</div>


	<form id="geniusform" action="https://viduradi.com/admin/products/import/store" method="POST"
	enctype="multipart/form-data">
	<input type="hidden" name="_token" value="YGLjIvQEmtGWWISDgRg3CM3rxqTbcM4kna8IRHSm">

	<div class="row">
		<div class="col-lg-8">
			<div class="add-product-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="product-description">
							<div class="body-area">
		
								<div class="gocover"
									style="background: url(https://viduradi.com/assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
								</div>
									<div class="alert alert-success validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <p class="text-left"></p> 
      </div>
      <div class="alert alert-danger validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <ul class="text-left">
            </ul>
      </div>		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Product Name* </h4>
												<p class="sub-heading">(In Any Language)</p>
											</div>
										</div>
										<div class="col-lg-12">
											<input type="text" class="input-field" placeholder="Enter Product Name"
												name="name" required="">
										</div>
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Product Sku* </h4>
											</div>
										</div>
										<div class="col-lg-12">
											<input type="text" class="input-field" placeholder="Enter Product Sku"
												name="sku" required=""
												value="VeP617784T">
		
										</div>
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Product Affiliate Link* </h4>
												<p class="sub-heading">(External Link)</p>
											</div>
										</div>
										<div class="col-lg-12">
											<input type="text" class="input-field" placeholder="Enter Product Link"
												name="affiliate_link" required="">
											<div class="checkbox-wrapper">
												<input type="checkbox" name="product_condition_check" class="checkclick"
													id="conditionCheck" value="1">
												<label for="conditionCheck">Allow Product Condition</label>
											</div>
										</div>
									</div>
		
									<div class="showbox">
		
										<div class="row">
											<div class="col-lg-12">
												<div class="left-area">
													<h4 class="heading">Product Condition*</h4>
												</div>
											</div>
											<div class="col-lg-12">
												<select name="product_condition">
													<option value="2">New</option>
													<option value="1">Used</option>
												</select>
											</div>
		
										</div>
		
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Category*</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<select id="cat" name="category_id" required="">
												<option value="">Select Category</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/4"
													value="4">Electronic</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/5"
													value="5">Fashion &amp; Beauty</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/6"
													value="6">Camera &amp; Photo</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/7"
													value="7">Smart Phone &amp; Table</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/8"
													value="8">Sport &amp; Outdoor</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/9"
													value="9">Jewelry &amp; Watches</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/10"
													value="10">Health &amp; Beauty</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/11"
													value="11">Books &amp; Office</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/12"
													value="12">Toys &amp; Hobbies</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/13"
													value="13">Books</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/15"
													value="15">Automobiles &amp; Motorcycles</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/16"
													value="16">Home decoration &amp; Appliance</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/17"
													value="17">Portable &amp; Personal Electronics</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/18"
													value="18">Outdoor, Recreation &amp; Fitness</option>
																								<option data-href="https://viduradi.com/admin/load/subcategories/19"
													value="19">Surveillance Safety &amp; Security</option>
																							</select>
										</div>
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Sub Category*</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<select id="subcat" name="subcategory_id" disabled="">
												<option value="">Select Sub Category</option>
											</select>
										</div>
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Child Category*</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<select id="childcat" name="childcategory_id" disabled="">
												<option value="">Select Child Category</option>
											</select>
										</div>
									</div>
		
		
									<div class="row">
										<div class="col-lg-12">
											<ul class="list">
												<li>
													<input class="checkclick1" name="shipping_time_check" type="checkbox"
														id="check1" value="1">
													<label for="check1">Allow Estimated Shipping Time</label>
												</li>
											</ul>
										</div>
									</div>
		
		
		
									<div class="showbox">
		
										<div class="row">
											<div class="col-lg-12">
												<div class="left-area">
													<h4 class="heading">Product Estimated Shipping Time* </h4>
												</div>
											</div>
											<div class="col-lg-12">
												<input type="text" class="input-field"
													placeholder="Estimated Shipping Time" name="ship">
											</div>
										</div>
		
		
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
		
											</div>
										</div>
										<div class="col-lg-12">
											<ul class="list">
												<li>
													<input name="size_check" type="checkbox" id="size-check" value="1">
													<label for="size-check">Allow Product Sizes</label>
												</li>
											</ul>
										</div>
									</div>
									<div class="showbox" id="size-display">
										<div class="row">
											<div class="col-lg-12">
											</div>
											<div class="col-lg-12">
												<div class="product-size-details" id="size-section">
													<div class="size-area">
														<span class="remove size-remove"><i class="fas fa-times"></i></span>
														<div class="row">
															<div class="col-md-4 col-sm-6">
																<label>
																	Size Name :
																	<span>
																		(eg. S,M,L,XL,XXL,3XL,4XL)
																	</span>
																</label>
																<input type="text" name="size[]" class="input-field"
																	placeholder="Size Name">
															</div>
															<div class="col-md-4 col-sm-6">
																<label>
																	Size Qty :
																	<span>
																		(Number of quantity of this size)
																	</span>
																</label>
																<input type="number" name="size_qty[]" class="input-field"
																	placeholder="Size Qty" value="1" min="1">
															</div>
															<div class="col-md-4 col-sm-6">
																<label>
																	Size Price :
																	<span>
																		(This price will be added with base price)
																	</span>
																</label>
																<input type="number" name="size_price[]" class="input-field"
																	placeholder="Size Price" value="0" min="0">
															</div>
														</div>
													</div>
												</div>
		
												<a href="javascript:;" id="size-btn" class="add-more"><i
														class="fas fa-plus"></i>Add More Size </a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<ul class="list">
												<li>
													<input class="checkclick1" name="color_check" type="checkbox" id="check3"
														value="1">
													<label for="check3">Allow Product Colors</label>
												</li>
											</ul>
										</div>
									</div>
		
		
		
									<div class="showbox">
		
										<div class="row">
											<div class="col-lg-12">
												<div class="left-area">
													<h4 class="heading">
														Product Colors*
													</h4>
													<p class="sub-heading">
														(Choose Your Favorite Colors)
													</p>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="select-input-color" id="color-section">
													<div class="color-area">
														<span class="remove color-remove"><i class="fas fa-times"></i></span>
														<div class="input-group colorpicker-component cp">
															<input type="text" name="color[]" value="#000000"
																class="input-field cp" />
															<span class="input-group-addon"><i></i></span>
														</div>
													</div>
												</div>
												<a href="javascript:;" id="color-btn" class="add-more mt-4 mb-3"><i
														class="fas fa-plus"></i>Add More Color </a>
											</div>
										</div>
		
									</div>
		
									<div class="row" id="stckprod">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Product Stock*</h4>
												<p class="sub-heading">(Leave Empty will Show Always Available)</p>
											</div>
										</div>
										<div class="col-lg-12">
											<input name="stock" type="text" class="input-field"
												placeholder="e.g 20">
											<div class="checkbox-wrapper">
												<input type="checkbox" name="measure_check" class="checkclick"
													id="allowProductMeasurement" value="1">
												<label
													for="allowProductMeasurement">Allow Product Measurement</label>
											</div>
										</div>
									</div>
		
		
		
									<div class="showbox">
		
										<div class="row">
											<div class="col-lg-12">
												<div class="left-area">
													<h4 class="heading">Product Measurement*</h4>
												</div>
											</div>
											<div class="col-lg-6">
												<select id="product_measure">
													<option value="">None</option>
													<option value="Gram">Gram</option>
													<option value="Kilogram">Kilogram</option>
													<option value="Litre">Litre</option>
													<option value="Pound">Pound</option>
													<option value="Custom">Custom</option>
												</select>
											</div>
											<div class="col-lg-6 hidden" id="measure">
												<input name="measure" type="text" id="measurement" class="input-field"
													placeholder="Enter Unit">
											</div>
										</div>
		
									</div>
		
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">
													Product Description*
												</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="text-editor">
												<textarea class="nic-edit-p" name="details"></textarea>
											</div>
										</div>
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">
													Specification*
												</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="text-editor">
												<textarea name="specification" class="nic-edit-p"></textarea>
											</div>
										</div>
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">
													Product Buy/Return Policy*
												</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="text-editor">
												<textarea class="nic-edit-p" name="policy"></textarea>
											</div>
										</div>
									</div>
		
		
									<div class="row">
										<div class="col-lg-12">
											<div class="checkbox-wrapper">
												<input type="checkbox" name="seo_check" value="1" class="checkclick"
													id="allowProductSEO" value="1">
												<label for="allowProductSEO">Allow Product SEO</label>
											</div>
										</div>
									</div>
		
		
		
									<div class="showbox">
										<div class="row">
											<div class="col-lg-12">
												<div class="left-area">
													<h4 class="heading">Meta Tags *</h4>
												</div>
											</div>
											<div class="col-lg-12">
												<ul id="metatags" class="myTags">
												</ul>
											</div>
										</div>
		
										<div class="row">
											<div class="col-lg-12">
												<div class="left-area">
													<h4 class="heading">
														Meta Description *
													</h4>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="text-editor">
													<textarea name="meta_description" class="input-field"
														placeholder="Meta Description"></textarea>
												</div>
											</div>
										</div>
									</div>
		
									<div class="row">
										<div class="col-lg-12 text-center">
											<button class="addProductSubmit-btn"
												type="submit">Create Product</button>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="add-product-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="product-description">
							<div class="body-area">
		
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Feature Image Source*</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<select id="imageSource" name="image_source">
												<option value="file">File</option>
												<option value="link">Link</option>
											</select>
										</div>
									</div>
		
		
									<div id="f-file">
										<div class="row">
											<div class="col-lg-12">
												<div class="left-area">
													<h4 class="heading">Feature Image *</h4>
												</div>
											</div>
											<div class="col-lg-12">
													<div class="panel panel-body">
														<div class="span4 cropme text-center" id="landscape"
														style="width: 100%; height: 285px; border: 1px dashed #ddd; background: #f1f1f1;">
															
												<a href="javascript:;" id="crop-image" class="d-inline-block mybtn1">
													<i class="icofont-upload-alt"></i> Upload Image Here
												</a>
														</div>
													</div>
		
		
		
											</div>
										</div>
		
										<input type="hidden" id="feature_photo" name="photo" value="">
		
									</div>
		
									<div id="f-link" style="display: none;">
										<div class="row">
											<div class="col-lg-12">
												<div class="left-area">
													<h4 class="heading">Feature Image Link *</h4>
												</div>
											</div>
											<div class="col-lg-12">
		
												<input type="text" name="photolink" value="" class="input-field">
											</div>
										</div>
									</div>
									<input type="file" name="gallery[]" class="hidden" id="uploadgallery" accept="image/*"
										multiple>
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">
													Product Gallery Images *
												</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<a href="#" class="set-gallery" data-toggle="modal" data-target="#setgallery">
												<i class="icofont-plus"></i> Set Gallery
											</a>
										</div>
									</div>
				
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">
													Product Current Price*
												</h4>
												<p class="sub-heading">
													(In INR)
												</p>
											</div>
										</div>
										<div class="col-lg-12">
											<input name="price" step="0.01" type="number" class="input-field"
												placeholder="e.g 20" required="" min="0">
										</div>
									</div>
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Product Previous Price*</h4>
												<p class="sub-heading">(Optional)</p>
											</div>
										</div>
										<div class="col-lg-12">
											<input name="previous_price" step="0.01" type="number" class="input-field"
												placeholder="e.g 20" min="0">
										</div>
									</div>
		
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Youtube Video URL*</h4>
												<p class="sub-heading">(Optional)</p>
											</div>
										</div>
										<div class="col-lg-12">
											<input name="youtube" type="text" class="input-field"
												placeholder="Enter Youtube Video URL">
										</div>
									</div>
		
	
		
									<div class="row">
										<div class="col-lg-12">
											<div class="featured-keyword-area">
												<div class="left-area">
													<h4 class="heading">Feature Tags</h4>
												</div>
		
												<div class="feature-tag-top-filds" id="feature-section">
													<div class="feature-area">
														<span class="remove feature-remove"><i class="fas fa-times"></i></span>
														<div class="row">
															<div class="col-lg-6">
																<input type="text" name="features[]" class="input-field"
																	placeholder="Enter Your Keyword">
															</div>
		
															<div class="col-lg-6">
																<div class="input-group colorpicker-component cp">
																	<input type="text" name="colors[]" value="#000000"
																		class="input-field cp" />
																	<span class="input-group-addon"><i></i></span>
																</div>
															</div>
														</div>
													</div>
												</div>
		
												<a href="javascript:;" id="feature-btn" class="add-fild-btn"><i
														class="icofont-plus"></i> Add More Field</a>
											</div>
										</div>
									</div>
		
		
									<div class="row">
										<div class="col-lg-12">
											<div class="left-area">
												<h4 class="heading">Tags *</h4>
											</div>
										</div>
										<div class="col-lg-12">
											<ul id="tags" class="myTags">
											</ul>
										</div>
									</div>
									<input type="hidden" name="type" value="Physical">

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>

<div class="modal fade" id="setgallery" tabindex="-1" role="dialog" aria-labelledby="setgallery" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
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
								<label for="image-upload" id="prod_gallery"><i
										class="icofont-upload-alt"></i>Upload File</label>
							</div>
						</div>
						<div class="col-sm-6">
							<a href="javascript:;" class="upload-done" data-dismiss="modal"> <i
									class="fas fa-check"></i> Done</a>
						</div>
						<div class="col-sm-12 text-center">( <small>You can upload multiple Images.</small>
							)</div>
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
			  var mainurl = "https://viduradi.com";
			  var admin_loader = 1;
			  var whole_sell = 6;
			  var getattrUrl = 'https://viduradi.com/admin/getattributes';
			  var curr = {"id":1,"name":"INR","sign":"Rs.","value":"1","is_default":"1"};
				// console.log(curr);
			</script>

		<!-- Dashboard Core -->
		<script src="https://viduradi.com/assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
    <script src="https://viduradi.com/assets/admin/js/vendors/vue.js"></script>
		<script src="https://viduradi.com/assets/admin/js/vendors/bootstrap.min.js"></script>
		<script src="https://viduradi.com/assets/admin/js/jqueryui.min.js"></script>
		<!-- Fullside-menu Js-->
		<script src="https://viduradi.com/assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js"></script>
		<script src="https://viduradi.com/assets/admin/plugins/fullside-menu/waves.min.js"></script>

		<script src="https://viduradi.com/assets/admin/js/plugin.js"></script>
		<script src="https://viduradi.com/assets/admin/js/Chart.min.js"></script>
		<script src="https://viduradi.com/assets/admin/js/tag-it.js"></script>
		<script src="https://viduradi.com/assets/admin/js/nicEdit.js"></script>
        <script src="https://viduradi.com/assets/admin/js/bootstrap-colorpicker.min.js"></script>
        <script src="https://viduradi.com/assets/admin/js/notify.js"></script>
        <script src="https://viduradi.com/assets/admin/js/jquery.canvasjs.min.js"></script>
		
		<script src="https://viduradi.com/assets/admin/js/load.js"></script>
		<script src="https://viduradi.com/assets/vendor/js/select2.min.js"></script>
		<!-- Custom Js-->
		<script src="https://viduradi.com/assets/admin/js/custom.js"></script>
		<!-- AJAX Js-->
		<script src="https://viduradi.com/assets/admin/js/myscript.js"></script>
		<script>
			$(document).ready(function() {
				$('.js-example-basic-multiple').select2();
			});		
		</script>


		
<script src="https://viduradi.com/assets/admin/js/jquery.Jcrop.js"></script>
<script src="https://viduradi.com/assets/admin/js/jquery.SimpleCropper.js"></script>

<script type="text/javascript">
	// Gallery Section Insert

	$(document).on('click', '.remove-img', function () {
		var id = $(this).find('input[type=hidden]').val();
		$('#galval' + id).remove();
		$(this).parent().parent().remove();
	});

	$(document).on('click', '#prod_gallery', function () {
		$('#uploadgallery').click();
		$('.selected-image .row').html('');
		$('#geniusform').find('.removegal').val(0);
	});


	$("#uploadgallery").change(function () {
		var total_file = document.getElementById("uploadgallery").files.length;
		for (var i = 0; i < total_file; i++) {
			$('.selected-image .row').append('<div class="col-sm-6">' +
				'<div class="img gallery-img">' +
				'<span class="remove-img"><i class="fas fa-times"></i>' +
				'<input type="hidden" value="' + i + '">' +
				'</span>' +
				'<a href="' + URL.createObjectURL(event.target.files[i]) + '" target="_blank">' +
				'<img src="' + URL.createObjectURL(event.target.files[i]) + '" alt="gallery image">' +
				'</a>' +
				'</div>' +
				'</div> '
			);
			$('#geniusform').append('<input type="hidden" name="galval[]" id="galval' + i +
				'" class="removegal" value="' + i + '">')
		}

	});

	// Gallery Section Insert Ends	
</script>

<script type="text/javascript">
	$('#imageSource').on('change', function () {
		var file = this.value;
		if (file == "file") {
			$('#f-file').show();
			$('#f-link').hide();
			$('#f-link').find('input').prop('required', false);
		}
		if (file == "link") {
			$('#f-file').hide();
			$('#f-link').show();
			$('#f-link').find('input').prop('required', true);
		}
	});
</script>

<script type="text/javascript">
	$('.cropme').simpleCropper();
</script>

<script src="https://viduradi.com/assets/admin/js/product.js"></script>


	</body>

</html>
