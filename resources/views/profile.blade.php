<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="user/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="user/assets/css/banner.css">
    
        <link rel="stylesheet" href="user/assets/css/style.css">
        <link rel="stylesheet" href="user/header/assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="user/header/assets/css/plugins/plugins.min.css">
        <link rel="stylesheet" href="user/header/assets/css/style.min.css">
        <link rel="stylesheet" href="user/header/assets/css/responsive.min.css">
   <link rel="stylesheet" href="user/assets/css/header.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"></script>
    </head>
<body>
    @include('section/header')
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="_3E8aIl">
                        <?php $dp = Auth::user()->dp; ?>
                        <div class="nUdcwy"><img class="_3X2gOt" height="50px" width="50px"@if($dp == NULL) src="user/assets/images/profile-pic.svg" @else src="{{asset('profiles/dp')}}/{{$dp}}" @endif>
                            <div class="DxGiT2">
                                <div class="_2QZ3Er">Hello,</div>
                                <div class="_1ruvv2">{{Auth::user()->name}}</div>
                            </div>
                        </div>
                    </div>
                    <!--profile  -->
                    <div class="_3p9Ct9">
                        <div class="_3E8aIl _1ejeYK">

                            <div class="_1K5fB-">
                                <div class="_15sjxS">
                                    <img class="_3GARO3" src="user/assets/images/one.svg"><a class="_16v3bB _3vaeIJ"
                                        href="/order">MY ORDERS</a>
                                </div>
                                <div class="_15sjxS "><img class="_3GARO3" src="user/assets/images/profile.svg">
                                    <div class="_3vaeIJ _16v3bB">ACCOUNT SETTINGS</div>
                                </div>

                                <ul class="tabs">
                                    <li class=" NS64GK _1MZ7_i active" rel="tab1"><a href="#">Profile Information</a>
                                    </li>
                                    <li class="NS64GK" rel="tab2"><a href="#">Manage Addresses</a></li>



                                </ul>
                                <hr>
                                <div class="_15sjxS "><img class="_3GARO3" src="user/assets/images/profile.svg">
                                    <div class="_3vaeIJ _16v3bB">MY STUFF</div>
                                </div>

                                <ul class="tabs">

                                    <li class="NS64GK" rel="tab3"><a href="#">My Coupons</a></li>
                                    <li class="NS64GK" rel="tab4"><a href="#">My Reviews & Ratings</a></li>
                                    <li class="NS64GK" rel="tab5"><a href="#">All Notifications</a></li>
                                    <li class="NS64GK" rel="tab6"><a href="#">My Wishlist</a></li>


                                </ul>
                                <hr>
                                <div>
                                    <span class="_16v3bB"><a href="/logout">Logout</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="vhguyh gtryr">
                        <div class="tab_container">
                            <form action="/submit-profile" method="post" enctype="multipart/form-data">
                                @csrf
                                
                            <div id="tab1" class="tab_content">
                                <div class="_1cyhik"><span class="_1mHr1S">Profile Picture</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-8">
                                        <input type="file" name="image" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="_1cyhik"><span class="_1mHr1S">Personal Information</span>
                             
                                   
                                    </div>
                                   
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-12">
                                        <input type="text" class="form-control" name="name" required=""
                                            autocomplete="name" tabindex="1" value="{{Auth::user()->name}}">
                                    </div>
                                   
                                   
                                </div>

                                <br><br>
                                <div class="_1509Hs"> Your Gender </div>
                                <div style="margin-top:13px;"><label for="Male" class="_2Fn-Ln _2fnqkz _3iI7Qn"><input
                                            type="radio" class="_3DAmyP" name="gender" readonly="" id="Male" value="Male" @if(Auth::user()->gender=='Male') checked @else @endif >
                                        <div class="_1XFPmK"></div>
                                        <div class="_2jIO64"><span tabindex="3">Male</span></div>
                                    </label><label for="Female" class="_2Fn-Ln _2fnqkz _3iI7Qn"><input type="radio"
                                            class="_3DAmyP" name="gender" readonly="" value="Female" id="Female" @if(Auth::user()->gender=='Female') checked @else @endif >
                                        <div class="_1XFPmK"></div>
                                        <div class="_2jIO64"><span tabindex="4">Female</span></div>
                                    </label></div>

                                <br>
                                <div class="_1cyhik"><span class="_1mHr1S">Email Address</span>
                             

                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-12">
                                        <input type="email" value="{{Auth::user()->email}}" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <br><br>
                                <div class="_1cyhik"><span class="_1mHr1S">Phone Number</span>
                             
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-12">
                                        <input type="phone" class="form-control" placeholder="Phone Number" name="phone" value="{{Auth::user()->phone}}">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Edit</button>
                               
                                <br><br>
                                <div class="_2PTLbk">FAQs</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            </form>
                            <!-- #tab1 -->

                            <div id="tab2" class="tab_content">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    ADD A NEW ADDRESS
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Name" required="" autocomplete="name"
                                                                tabindex="1" value="">
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="text" class="form-control" name="phone"
                                                                placeholder="10-digit mobile number" required=""
                                                                autocomplete="name" tabindex="1" value="">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="text" class="form-control" name="pincode"
                                                                placeholder="Pincode" required="" maxlength="6"
                                                                autocomplete="postal-code" tabindex="3" value="">
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="text" class="form-control" name="locality"
                                                                placeholder="Locality" required="" maxlength="6"
                                                                autocomplete="postal-code" tabindex="3" value="">
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 gytr3">
                                                            <textarea class="form-control" name="addressLine1"
                                                                placeholder="Address" rows="4" cols="10" tabindex="5"
                                                                required="" autocomplete="street-address"></textarea>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="text" class="form-control" name="city"
                                                                placeholder="City/District/Town" required=""
                                                                autocomplete="city" tabindex="6" value="">
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <select class="form-control" name="state" required=""
                                                                tabindex="7">
                                                                <option value="" disabled="">--Select State--</option>
                                                                <option value="Andaman &amp; Nicobar Islands">Andaman
                                                                    &amp;
                                                                    Nicobar
                                                                    Islands</option>
                                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                <option value="Arunachal Pradesh">Arunachal Pradesh
                                                                </option>
                                                                <option value="Assam">Assam</option>
                                                                <option value="Bihar">Bihar</option>
                                                                <option value="Chandigarh">Chandigarh</option>
                                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                                <option
                                                                    value="Dadra &amp; Nagar Haveli &amp; Daman &amp; Diu">
                                                                    Dadra
                                                                    &amp; Nagar Haveli &amp; Daman &amp; Diu</option>
                                                                <option value="Delhi">Delhi</option>
                                                                <option value="Goa">Goa</option>
                                                                <option value="Gujarat">Gujarat</option>
                                                                <option value="Haryana">Haryana</option>
                                                                <option value="Himachal Pradesh">Himachal Pradesh
                                                                </option>
                                                                <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir
                                                                </option>
                                                                <option value="Jharkhand">Jharkhand</option>
                                                                <option value="Karnataka">Karnataka</option>
                                                                <option value="Kerala">Kerala</option>
                                                                <option value="Ladakh">Ladakh</option>
                                                                <option value="Lakshadweep">Lakshadweep</option>
                                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                <option value="Maharashtra">Maharashtra</option>
                                                                <option value="Manipur">Manipur</option>
                                                                <option value="Meghalaya">Meghalaya</option>
                                                                <option value="Mizoram">Mizoram</option>
                                                                <option value="Nagaland">Nagaland</option>
                                                                <option value="Odisha">Odisha</option>
                                                                <option value="Puducherry">Puducherry</option>
                                                                <option value="Punjab">Punjab</option>
                                                                <option value="Rajasthan">Rajasthan</option>
                                                                <option value="Sikkim">Sikkim</option>
                                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                                <option value="Telangana">Telangana</option>
                                                                <option value="Tripura">Tripura</option>
                                                                <option value="Uttarakhand">Uttarakhand</option>
                                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                <option value="West Bengal">West Bengal</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="text" class="form-control" name="landmark"
                                                                placeholder="Landmark (Optional)" autocomplete="off"
                                                                tabindex="8" maxlength="200" value="">
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="text" class="form-control"
                                                                name="alternatePhone"
                                                                placeholder="Alternate Phone (Optional)"
                                                                autocomplete="off" tabindex="9" maxlength="10" value="">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <p class="_2tiHgk">Address Type</p>
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="radio" id="html" name="fav_language"
                                                                value="HTML">
                                                            <label for="html">Home (All day delivery)</label><br>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 gytr3">
                                                            <input type="radio" id="html" name="fav_language"
                                                                value="HTML">
                                                            &nbsp; <label for="html">Work (Delivery between 10 AM - 5
                                                                PM)</label><br>
                                                        </div>

                                                    </div>
                                                    <div class="l5QiYB _1hGj33"><button class="_2KpZ6l _1JDhFS _3AWRsL"
                                                            type="button" tabindex="10">Save and Deliver
                                                            Here</button><button class="_2KpZ6l _8NNVow" type="button"
                                                            tabindex="11">Cancel</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="_26SF1Q">
                                    <div class="umgxnI">
                                        <div class="dpjmKp"><img src="user/assets/images/dot.svg">
                                            <div class="_3E8aIl _1UHYca">
                                                <div class="_16FXBY"><span>Edit</span></div>
                                                <div class="_16FXBY"><span>Delete</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2FCIZU"><span class="_1GczDM">WORK</span></div>
                                    <p class="_2adSi5"><span class="_3CfVDh">Shreya Roy</span><span
                                            class="_1Z7fmh _3CfVDh">9999999999</span></p><span
                                        class="_2adSi5 WlNme0">Dk1405, Action Area1, Passionate Futurist solution Pvt.
                                        Ltd,
                                        Newtown, Action Area1, DLF Galleria, New Town, West Bengal - <span
                                            class="_2dQV-8">700156</span></span>
                                </div>
                            </div>
                            <!-- #tab2 -->
                            <div id="tab3" class="tab_content">
                                <div class="HrTrMw">Available Coupons</div>

                                <div class="_12iyw-"><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A1111335230&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">MIX VEG SOUP</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹2 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A11142f3430&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">Cherry Blossom Shoe Wax Black</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹3 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A111bcd8b30&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">MOTHER'S RECIPE Mango Pickle</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹4 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A1128069b30&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">HOT &amp; SOUR SOUP</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹2 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A113440fc30&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">Colin GlassCleanerRefil Triger</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹38 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A1138ed3730&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">Veeba Cheese and Chilli Spread</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹4 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A11491ddd30&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">Veeba Thousand Island Spread</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹9 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A114acf3f30&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">Harpic Flushmatic Aquamarine</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹6 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A116d206c30&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">CherryBlossom ShoeLiquidPolish</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹4 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a><a
                                        href="https://www.flipkart.com/all/pr?sid=all&amp;offer=nb%3Amp%3A11759fd230&amp;marketplace=GROCERY&amp;p%5B%5D=facets.availability%255B%255D%3DExclude%2BOut%2Bof%2BStock&amp;preOrderEnabled=false&amp;otracker=coupon"
                                        class="Qt1kqV" rel="noopener noreferrer" target="_blank">
                                        <div class="content _196wFE">
                                            <div class="_2I21cV">
                                                <div class="_2Y8vHM">MOTHER'S RECIPE Mixed Pickle</div>
                                                <div class="_2422t1"><span>Valid till 31 Jan, 2022</span></div>
                                            </div>
                                            <div class="_2I21cV _2CNmKJ">
                                                <div class="Rp7nDO">Get extra ₹4 off on 1 items</div>
                                                <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="load-more ">View more</div>

                                <br>
                                <br>
                                <div class="HrTrMw">Expired Coupons</div>
                                <div class="_12iyw- ">
                                    <div class="row _196wFE1">
                                        <div class="_2I21cV">
                                            <div class="_2Y8vHM">Extra ₹100 off on Grocery</div>
                                            <div class="_2422t1"><span>Valid till 30 Nov, 2021</span></div>
                                        </div>
                                        <div class="_2I21cV _2CNmKJ">
                                            <div class="Rp7nDO">Buy worth ₹700 save ₹100</div>
                                            <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                        </div>
                                    </div>
                                    <div class="_196wFE1">
                                        <div class="_2I21cV">
                                            <div class="_2Y8vHM">Extra ₹100 off on Grocery</div>
                                            <div class="_2422t1"><span>Valid till 30 Nov, 2021</span></div>
                                        </div>
                                        <div class="_2I21cV _2CNmKJ">
                                            <div class="Rp7nDO">Buy worth ₹700 save ₹100</div>
                                            <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                        </div>
                                    </div>
                                    <div class=" _196wFE1">
                                        <div class="_2I21cV">
                                            <div class="_2Y8vHM">Buy Samsung Galaxy A03 Core an</div>
                                            <div class="_2422t1"><span>Valid till 9 Jan, 2022</span></div>
                                        </div>
                                        <div class="_2I21cV _2CNmKJ">
                                            <div class="Rp7nDO">Buy Samsung Galaxy A03 Core and get ₹500 Off</div>
                                            <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                        </div>
                                    </div>
                                    <div class=" _196wFE1">
                                        <div class="_2I21cV">
                                            <div class="_2Y8vHM">Flat ₹150 off on Grocery</div>
                                            <div class="_2422t1"><span>Valid till 31 Aug, 2021</span></div>
                                        </div>
                                        <div class="_2I21cV _2CNmKJ">
                                            <div class="Rp7nDO">₹150 off on Grocery (min purchase of ₹700)</div>
                                            <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                        </div>
                                    </div>
                                    <div class=" _196wFE1">
                                        <div class="_2I21cV">
                                            <div class="_2Y8vHM">Grocery Mystery Box Offer</div>
                                            <div class="_2422t1"><span>Valid till 23 Jun, 2021</span></div>
                                        </div>
                                        <div class="_2I21cV _2CNmKJ">
                                            <div class="Rp7nDO">Buy worth ₹1200 save ₹100</div>
                                            <div class="Bv11UC"><span class="_1h905v">View T&amp;C</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #tab3 -->
                            <div id="tab4" class="tab_content">
                                <div class="_1l84Qy"><span>My Reviews </span><span class="_1PJgeS">(3)</span></div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 col-sm-12">
                                        <img src="user/assets/images/img4.jpeg" alt="">
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-sm-12">
                                        <div class=" mKkyI3">
                                            <div class="_1PTkR9">VATSALYA creation Alloy Jewel Set</div>
                                            <div class="_1MVdTi">
                                                <div class="dtehyevb">
                                                    <div class="_3LWZlK _1s6uAd">5<img src="user/assets/images/st.svg"
                                                            class="_1wB99o"></div>
                                                    <p class="_3aXSzz">Brilliant</p>
                                                </div>
                                                <div class="row">
                                                    <div class="_2X6unF">
                                                        <div>Nyc products</div>
                                                    </div>
                                                </div>
                                                <div class="dtehyevb VnHlpb">
                                                    <p class="_324pqI">Flipkart Customer</p>
                                                    <div class="_1iZCUX">
                                                        <p class="_324pqI">
                                                            Certified Buyer</p>
                                                        <div></div>
                                                    </div>
                                                    <p class="_324pqI">11 Oct, 2020</p>

                                                </div>
                                            </div>
                                            <div class="_6oAu8S"><a
                                                    href="/vatsalya-creation-alloy-jewel-set/write-review/itma2057f69567c7?pid=JWSEHHV8BD4VJHYH&amp;source=urp_e"
                                                    class="bdQ5Ar"> Edit </a><span class="bdQ5Ar"> Delete </span><a
                                                    class="bdQ5Ar"> Share </a></div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 col-sm-12">
                                        <img src="user/assets/images/img4.jpeg" alt="">
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-sm-12">
                                        <div class=" mKkyI3">
                                            <div class="_1PTkR9">VATSALYA creation Alloy Jewel Set</div>
                                            <div class="_1MVdTi">
                                                <div class="dtehyevb">
                                                    <div class="_3LWZlK _1s6uAd">5<img src="user/assets/images/st.svg"
                                                            class="_1wB99o"></div>
                                                    <p class="_3aXSzz">Brilliant</p>
                                                </div>
                                                <div class="row">
                                                    <div class="_2X6unF">
                                                        <div>Nyc products</div>
                                                    </div>
                                                </div>
                                                <div class="dtehyevb VnHlpb">
                                                    <p class="_324pqI">Flipkart Customer</p>
                                                    <div class="_1iZCUX">
                                                        <p class="_324pqI">
                                                            Certified Buyer</p>
                                                        <div></div>
                                                    </div>
                                                    <p class="_324pqI">11 Oct, 2020</p>

                                                </div>
                                            </div>
                                            <div class="_6oAu8S"><a
                                                    href="/vatsalya-creation-alloy-jewel-set/write-review/itma2057f69567c7?pid=JWSEHHV8BD4VJHYH&amp;source=urp_e"
                                                    class="bdQ5Ar"> Edit </a><span class="bdQ5Ar"> Delete </span><a
                                                    class="bdQ5Ar"> Share </a></div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 col-sm-12">
                                        <img src="user/assets/images/img4.jpeg" alt="">
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-sm-12">
                                        <div class=" mKkyI3">
                                            <div class="_1PTkR9">VATSALYA creation Alloy Jewel Set</div>
                                            <div class="_1MVdTi">
                                                <div class="dtehyevb">
                                                    <div class="_3LWZlK _1s6uAd">5<img src="user/assets/images/st.svg"
                                                            class="_1wB99o"></div>
                                                    <p class="_3aXSzz">Brilliant</p>
                                                </div>
                                                <div class="row">
                                                    <div class="_2X6unF">
                                                        <div>Nyc products</div>
                                                    </div>
                                                </div>
                                                <div class="dtehyevb VnHlpb">
                                                    <p class="_324pqI">Flipkart Customer</p>
                                                    <div class="_1iZCUX">
                                                        <p class="_324pqI">
                                                            Certified Buyer</p>
                                                        <div></div>
                                                    </div>
                                                    <p class="_324pqI">11 Oct, 2020</p>

                                                </div>
                                            </div>
                                            <div class="_6oAu8S"><a
                                                    href="/vatsalya-creation-alloy-jewel-set/write-review/itma2057f69567c7?pid=JWSEHHV8BD4VJHYH&amp;source=urp_e"
                                                    class="bdQ5Ar"> Edit </a><span class="bdQ5Ar"> Delete </span><a
                                                    class="bdQ5Ar"> Share </a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- --#tab4 -->

                            <div id="tab5" class="tab_content">
                                <div class="row _2qofEi1">
                                    <div class="col-md-2 col-lg-2 col-sm-12">
                                        <img src="user/assets/images/img4.jpeg" alt="">
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-sm-12">
                                        <div class="_2qofEi">Your Flipkart order containing PEDIGREE Biscrok Biscuits
                                            (Ab...
                                            has been delivered<div class="_2afUSs">
                                                <div class="_3EuDKk">10 Jan, 2022</div>
                                                <div class="_3EuDKk"><a href="#"><span class="_2ErE68">More
                                                            details</span></a></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="row _2qofEi1">
                                    <div class="col-md-2 col-lg-2 col-sm-12">
                                        <img src="user/assets/images/img4.jpeg" alt="">
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-sm-12">
                                        <div class="_2qofEi">Your Flipkart order containing PEDIGREE Biscrok Biscuits
                                            (Ab...
                                            has been delivered<div class="_2afUSs">
                                                <div class="_3EuDKk">10 Jan, 2022</div>
                                                <div class="_3EuDKk"><a href="#"><span class="_2ErE68">More
                                                            details</span></a></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="row _2qofEi1">
                                    <div class="col-md-2 col-lg-2 col-sm-12">
                                        <img src="user/assets/images/img4.jpeg" alt="">
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-sm-12">
                                        <div class="_2qofEi">Your Flipkart order containing PEDIGREE Biscrok Biscuits
                                            (Ab...
                                            has been delivered<div class="_2afUSs">
                                                <div class="_3EuDKk">10 Jan, 2022</div>
                                                <div class="_3EuDKk"><a href="#"><span class="_2ErE68">More
                                                            details</span></a></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--#tab5  -->
                            <div id="tab6" class="tab_content">
                                <div class="dvjhtgh">
                                    <img src="user/assets/images/mywishlist-empty.png" alt="">
                                    <span class="_3Juh7R">Empty Wishlist</span>
                                    <span class="_3WJ8Jv">You have no items in your wishlist. Start adding!</span>
                                </div>
                            </div>
                            <!--#tab5  -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========================== -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
    <!-- ========================= -->
    @include('section/footer')
    <script>
    // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

    /* if in tab mode */
    $("ul.tabs li").click(function() {

        $(".tab_content").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn();

        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");

        $(".tab_drawer_heading").removeClass("d_active");
        $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");


    });
    $(".tab_container").css("min-height", function() {
        return $(".tabs").outerHeight() + 50;
    });
    /* if in drawer mode */
    $(".tab_drawer_heading").click(function() {

        $(".tab_content").hide();
        var d_activeTab = $(this).attr("rel");
        $("#" + d_activeTab).fadeIn();

        $(".tab_drawer_heading").removeClass("d_active");
        $(this).addClass("d_active");

        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
    });
    </script>
    <script>
    var QtyInput = (function() {
        var $qtyInputs = $(".qty-input");

        if (!$qtyInputs.length) {
            return;
        }

        var $inputs = $qtyInputs.find(".product-qty");
        var $countBtn = $qtyInputs.find(".qty-count");
        var qtyMin = parseInt($inputs.attr("min"));
        var qtyMax = parseInt($inputs.attr("max"));

        $inputs.change(function() {
            var $this = $(this);
            var $minusBtn = $this.siblings(".qty-count--minus");
            var $addBtn = $this.siblings(".qty-count--add");
            var qty = parseInt($this.val());

            if (isNaN(qty) || qty <= qtyMin) {
                $this.val(qtyMin);
                $minusBtn.attr("disabled", true);
            } else {
                $minusBtn.attr("disabled", false);

                if (qty >= qtyMax) {
                    $this.val(qtyMax);
                    $addBtn.attr('disabled', true);
                } else {
                    $this.val(qty);
                    $addBtn.attr('disabled', false);
                }
            }
        });

        $countBtn.click(function() {
            var operator = this.dataset.action;
            var $this = $(this);
            var $input = $this.siblings(".product-qty");
            var qty = parseInt($input.val());

            if (operator == "add") {
                qty += 1;
                if (qty >= qtyMin + 1) {
                    $this.siblings(".qty-count--minus").attr("disabled", false);
                }

                if (qty >= qtyMax) {
                    $this.attr("disabled", true);
                }
            } else {
                qty = qty <= qtyMin ? qtyMin : (qty -= 1);

                if (qty == qtyMin) {
                    $this.attr("disabled", true);
                }

                if (qty < qtyMax) {
                    $this.siblings(".qty-count--add").attr("disabled", false);
                }
            }

            $input.val(qty);
        });
    })();
    </script>
    <script>
    class Accordion {
        constructor(element, options = {}) {
            this.accordion = element;
            this.buttons = null;
            this.bodies = null;
            this.options = {
                activeClassName: "is-active",
                closeOthers: true,
                ...options
            };


            this.handleKeydown = this.handleKeydown.bind(this);
            this.handleClick = this.handleClick.bind(this);
            this.handleTransitionend = this.handleTransitionend.bind(this);

            this.init();
        }

        init() {
            if (this.accordion.classList.contains("is-init-accordion")) {
                throw Error("Accordion is already initialized.");
            }

            this.buttons = [
                ...this.accordion.querySelectorAll(".js-accordion__button")
            ];

            this.bodies = [
                ...this.accordion.querySelectorAll(".js-accordion__body")
            ];


            // Handle active accordion item
            for (const button of this.buttons) {
                if (!button.classList.contains(this.options.activeClassName))
                    continue;
                button.setAttribute("aria-expanded", "true");
                const body = button.nextElementSibling;
                body.style.display = "block";
                body.style.maxHeight = "none";
            }

            // Hide all bodies except the active
            for (const body of this.bodies) {
                if (
                    body.previousElementSibling.classList.contains(
                        this.options.activeClassName))


                    continue;
                body.style.display = "none";
                body.style.maxHeight = "0px";
            }

            this.addEvents();

            this.accordion.classList.add("is-init-accordion");
        }

        closeOthers(elException) {
            for (const button of this.buttons) {
                if (button === elException) continue;
                button.classList.remove(this.options.activeClassName);
                button.setAttribute("aria-expanded", "false");
                const body = button.nextElementSibling;
                body.style.maxHeight = `${body.scrollHeight}px`;
                setTimeout(() => void(body.style.maxHeight = "0px"), 0);
            }
        }

        handleKeydown(event) {
            const target = event.target;
            const key = event.which.toString();

            if (
                target.classList.contains("js-accordion__button") &&
                key.match(/35|36|38|40/)) {
                event.preventDefault();
            } else {
                return false;
            }

            switch (key) {
                case "36":
                    // "Home" key
                    this.buttons[0].focus();
                    break;
                case "35":
                    // "End" key
                    this.buttons[this.buttons.length - 1].focus();
                    break;
                case "38":
                    // "Up Arrow" key
                    const prevIndex = this.buttons.indexOf(target) - 1;
                    if (this.buttons[prevIndex]) {
                        this.buttons[prevIndex].focus();
                    } else {
                        this.buttons[this.buttons.length - 1].focus();
                    }
                    break;
                case "40":
                    // "Down Arrow" key
                    const nextIndex = this.buttons.indexOf(target) + 1;
                    if (this.buttons[nextIndex]) {
                        this.buttons[nextIndex].focus();
                    } else {
                        this.buttons[0].focus();
                    }
                    break;
            }

        }

        handleClick(event) {
            const button = event.currentTarget;
            const body = button.nextElementSibling;

            if (this.options.closeOthers) {
                this.closeOthers(button);
            }

            // Set height to the active body
            if (body.style.maxHeight === "none") {
                body.style.maxHeight = `${body.scrollHeight}px`;
            }

            if (button.classList.contains(this.options.activeClassName)) {
                // Close accordion item
                button.classList.remove(this.options.activeClassName);
                button.setAttribute("aria-expanded", "false");
                setTimeout(() => void(body.style.maxHeight = "0px"), 0);
            } else {
                // Open accordion item
                button.classList.add(this.options.activeClassName);
                button.setAttribute("aria-expanded", "true");
                body.style.display = "block";
                body.style.maxHeight = `${body.scrollHeight}px`;
            }
        }

        handleTransitionend(event) {
            const body = event.currentTarget;
            if (body.style.maxHeight !== "0px") {
                // Remove the height from the active body
                body.style.maxHeight = "none";
            } else {
                // Hide the active body
                body.style.display = "none";
            }
        }

        addEvents() {
            this.accordion.addEventListener("keydown", this.handleKeydown);
            for (const button of this.buttons) {
                button.addEventListener("click", this.handleClick);
            }
            for (const body of this.bodies) {
                body.addEventListener("transitionend", this.handleTransitionend);
            }
        }

        destroy() {
            this.accordion.removeEventListener("keydown", this.handleKeydown);
            for (const button of this.buttons) {
                button.removeEventListener("click", this.handleClick);
            }
            for (const body of this.bodies) {
                body.addEventListener("transitionend", this.handleTransitionend);
            }

            this.buttons = null;
            this.bodies = null;

            this.accordion.classList.remove("is-init-accordion");
        }
    }


    // ---

    window.addEventListener("DOMContentLoaded", () => {
        const accordionEls = [...document.querySelectorAll(".js-accordion")];
        for (const accordionEl of accordionEls) {
            new Accordion(accordionEl);
        }
    });
    </script>
    <script>
    $(function() {
        $("._196wFE").slice(0, 3).show();
        $("body").on('click touchstart', '.load-more', function(e) {
            e.preventDefault();
            $("._196wFE:hidden").slice(0, 3).slideDown();
            if ($("._196wFE:hidden").length == 0) {
                $(".load-more").css('visibility', 'hidden');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1000);
        });
    });
    </script>

    <script src="user/assets/js/jquery.superslides.min.js"></script>
    <script src="user/assets/js/bootstrap-select.js"></script>
    <script src="user/assets/js/inewsticker.js"></script>
    <script src="user/assets/js/bootsnav.js"></script>
    <script src="user/assets/js/images-loded.min.js"></script>
    <script src="user/assets/js/isotope.min.js"></script>
    <script src="user/assets/js/owl.carousel.min.js"></script>
    <script src="user/assets/js/baguetteBox.min.js"></script>
    <script src="user/assets/js/form-validator.min.js"></script>
    <script src="user/assets/js/contact-form-script.js"></script>
    <script src="user/assets/js/custom.js"></script>
</body>

</html>