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
      <link href="assets/admin/css/product.css" rel="stylesheet" />
      <link href="assets/admin/css/jquery.Jcrop.css" rel="stylesheet" />
      <link href="assets/admin/css/Jcrop-style.css" rel="stylesheet" />
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
                           <h4 class="heading">License Product <a class="add-btn"
                              href="admin/products/types"><i class="fas fa-arrow-left"></i> Back</a>
                           </h4>
                           <ul class="links">
                              <li>
                                 <a href="admin">Dashboard </a>
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
                              <li>
                                 <a href="admin/products/license/create">License Product</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <form id="geniusform" action="admin/products/store" method="POST"
                     enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="nvED5cnlgBDLB2tF4PxPjS7KlUVNQFAgX7Mi6kbY">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="add-product-content">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="product-description">
                                       <div class="body-area">
                                          <div class="gocover"
                                             style="background: url(assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
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
                                                   <h4 class="heading">Category*</h4>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <select id="cat" name="category_id" required="">
                                                   <option value="">Select Category</option>
                                                   <option data-href="admin/load/subcategories/4"
                                                      value="4">Electronic</option>
                                                   <option data-href="admin/load/subcategories/5"
                                                      value="5">Fashion &amp; Beauty</option>
                                                   <option data-href="admin/load/subcategories/6"
                                                      value="6">Camera &amp; Photo</option>
                                                   <option data-href="admin/load/subcategories/7"
                                                      value="7">Smart Phone &amp; Table</option>
                                                   <option data-href="admin/load/subcategories/8"
                                                      value="8">Sport &amp; Outdoor</option>
                                                   <option data-href="admin/load/subcategories/9"
                                                      value="9">Jewelry &amp; Watches</option>
                                                   <option data-href="admin/load/subcategories/10"
                                                      value="10">Health &amp; Beauty</option>
                                                   <option data-href="admin/load/subcategories/11"
                                                      value="11">Books &amp; Office</option>
                                                   <option data-href="admin/load/subcategories/12"
                                                      value="12">Toys &amp; Hobbies</option>
                                                   <option data-href="admin/load/subcategories/13"
                                                      value="13">Books</option>
                                                   <option data-href="admin/load/subcategories/15"
                                                      value="15">Automobiles &amp; Motorcycles</option>
                                                   <option data-href="admin/load/subcategories/16"
                                                      value="16">Home decoration &amp; Appliance</option>
                                                   <option data-href="admin/load/subcategories/17"
                                                      value="17">Portable &amp; Personal Electronics</option>
                                                   <option data-href="admin/load/subcategories/18"
                                                      value="18">Outdoor, Recreation &amp; Fitness</option>
                                                   <option data-href="admin/load/subcategories/19"
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
                                                <div class="left-area">
                                                   <h4 class="heading">Select Upload Type*</h4>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <select id="type_check" name="type_check">
                                                   <option value="1">Upload By File</option>
                                                   <option value="2">Upload By Link</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="row file">
                                             <div class="col-lg-12">
                                                <div class="left-area">
                                                   <h4 class="heading">Select File*</h4>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <input type="file" name="file" required="">
                                             </div>
                                          </div>
                                          <div class="row link hidden">
                                             <div class="col-lg-12">
                                                <div class="left-area">
                                                   <h4 class="heading">Link*</h4>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <textarea class="input-field" rows="4" name="link"
                                                   placeholder="Link"></textarea>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="featured-keyword-area">
                                                   <div class="heading-area">
                                                      <h4 class="title">Product License</h4>
                                                   </div>
                                                   <div class="feature-tag-top-filds" id="license-section">
                                                      <div class="license-area">
                                                         <span class="remove license-remove"><i class="fas fa-times"></i></span>
                                                         <div class="row">
                                                            <div class="col-lg-6">
                                                               <input type="text" name="license[]" class="input-field"
                                                                  placeholder="License Key" required="">
                                                            </div>
                                                            <div class="col-lg-6">
                                                               <input type="number" min="1" name="license_qty[]"
                                                                  class="input-field"
                                                                  placeholder="License Quantity" value="1">
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <a href="javascript:;" id="license-btn" class="add-fild-btn"><i
                                                      class="icofont-plus"></i> Add More Field</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="left-area">
                                                   <h4 class="heading">Cross Selling Products*</h4>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <select id="cat" class="js-example-basic-multiple" name="cs_products[]" multiple="multiple">
                                                   <option value="144">32 &#039;&#039;NAPCO D/GLASS ULTRA SLIM HD lED TV ES700E</option>
                                                   <option value="119">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 1</option>
                                                   <option value="116">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 116</option>
                                                   <option value="117">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 117</option>
                                                   <option value="118">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 118</option>
                                                   <option value="120">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 120</option>
                                                   <option value="121">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 121</option>
                                                   <option value="122">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 122</option>
                                                   <option value="95">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 95</option>
                                                   <option value="185">Demo</option>
                                                   <option value="93">Digital Product Title will Be Here by Name 1</option>
                                                   <option value="103">Digital Product Title will Be Here by Name 1</option>
                                                   <option value="104">Digital Product Title will Be Here by Name 104</option>
                                                   <option value="105">Digital Product Title will Be Here by Name 105</option>
                                                   <option value="106">Digital Product Title will Be Here by Name 106</option>
                                                   <option value="107">Digital Product Title will Be Here by Name 107</option>
                                                   <option value="109">Digital Product Title will Be Here by Name 109</option>
                                                   <option value="112">License key title will be here according to your wish 1</option>
                                                   <option value="114">License key title will be here according to your wish 1</option>
                                                   <option value="111">License key title will be here according to your wish 111</option>
                                                   <option value="130">License key title will be here according to your wish 130</option>
                                                   <option value="101">Physical Product Title Title will Be Here 101</option>
                                                   <option value="97">Physical Product Title Title will Be Here 97</option>
                                                   <option value="99">Physical Product Title Title will Be Here 99</option>
                                                   <option value="184">showrav Hasans</option>
                                                   <option value="126">Top Rated product title will be here according to your wish 1</option>
                                                   <option value="129">Top Rated product title will be here according to your wish 101</option>
                                                   <option value="123">Top Rated product title will be here according to your wish 123</option>
                                                   <option value="124">Top Rated product title will be here according to your wish 124</option>
                                                   <option value="96">Top Rated product title will be here according to your wish 96</option>
                                                </select>
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
                                                   <textarea name="details" class="nic-edit-p"></textarea>
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
                                                   <textarea name="policy" class="nic-edit-p"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="checkbox-wrapper">
                                                   <input type="checkbox" name="seo_check" class="checkclick" id="allowProductSEO"
                                                      value="1">
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
                                             <div class="col-lg-12">
                                                <div class="left-area">
                                                   <h4 class="heading">Platform * </h4>
                                                   <p class="sub-heading">(Optional)</p>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <input type="text" class="input-field" placeholder="Enter Platform"
                                                   name="platform">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="left-area">
                                                   <h4 class="heading">Region * </h4>
                                                   <p class="sub-heading">(Optional)</p>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <input type="text" class="input-field" placeholder="Enter Region"
                                                   name="region">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="left-area">
                                                   <h4 class="heading">License Type * </h4>
                                                   <p class="sub-heading">(Optional)</p>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <input type="text" class="input-field" placeholder="Enter Type"
                                                   name="licence_type">
                                             </div>
                                          </div>
                                          <input type="hidden" name="type" value="License">
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="left-area">
                                                </div>
                                             </div>
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
                                             <div class="col-lg-4">
                                                <div class="left-area">
                                                   <h4 class="heading">
                                                      Cross Selling Products*
                                                   </h4>
                                                </div>
                                             </div>
                                             <div class="col-lg-7">
                                                <select class="js-example-basic-multiple" name="cs_products[]" multiple="multiple">
                                                   <option value="144">32 &#039;&#039;NAPCO D/GLASS ULTRA SLIM HD lED TV ES700E</option>
                                                   <option value="119">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 1</option>
                                                   <option value="116">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 116</option>
                                                   <option value="117">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 117</option>
                                                   <option value="118">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 118</option>
                                                   <option value="120">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 120</option>
                                                   <option value="121">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 121</option>
                                                   <option value="122">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 122</option>
                                                   <option value="95">Affiliate Product Title will Be Here. Affiliate Product Title will Be Here 95</option>
                                                   <option value="185">Demo</option>
                                                   <option value="93">Digital Product Title will Be Here by Name 1</option>
                                                   <option value="103">Digital Product Title will Be Here by Name 1</option>
                                                   <option value="104">Digital Product Title will Be Here by Name 104</option>
                                                   <option value="105">Digital Product Title will Be Here by Name 105</option>
                                                   <option value="106">Digital Product Title will Be Here by Name 106</option>
                                                   <option value="107">Digital Product Title will Be Here by Name 107</option>
                                                   <option value="109">Digital Product Title will Be Here by Name 109</option>
                                                   <option value="112">License key title will be here according to your wish 1</option>
                                                   <option value="114">License key title will be here according to your wish 1</option>
                                                   <option value="111">License key title will be here according to your wish 111</option>
                                                   <option value="130">License key title will be here according to your wish 130</option>
                                                   <option value="101">Physical Product Title Title will Be Here 101</option>
                                                   <option value="97">Physical Product Title Title will Be Here 97</option>
                                                   <option value="99">Physical Product Title Title will Be Here 99</option>
                                                   <option value="184">showrav Hasans</option>
                                                   <option value="126">Top Rated product title will be here according to your wish 1</option>
                                                   <option value="129">Top Rated product title will be here according to your wish 101</option>
                                                   <option value="123">Top Rated product title will be here according to your wish 123</option>
                                                   <option value="124">Top Rated product title will be here according to your wish 124</option>
                                                   <option value="96">Top Rated product title will be here according to your wish 96</option>
                                                </select>
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
                                                <input name="price" type="number" class="input-field"
                                                   placeholder="e.g 20" step="0.01" required="" min="0">
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
                                          <input type="hidden" name="type" value="License">
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
                                    )
                                 </div>
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
      <script src="assets/admin/js/jquery.Jcrop.js"></script>
      <script src="assets/admin/js/jquery.SimpleCropper.js"></script>
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
         $('.cropme').simpleCropper();
      </script>
      <script src="assets/admin/js/product.js"></script>
   </body>
</html>