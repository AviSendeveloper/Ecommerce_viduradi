<?php use App\Models\DeliverAddress; ?>
<?php use App\Models\Product; ?>
<?php use App\Models\Cart; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    {{-- <link rel="stylesheet" href="user/assets/css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="user/assets/css/header-style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="user/assets/css/header-responsive.css" />
    <link rel="stylesheet" href="user/assets/css/bootsnav.css">
    <link rel="stylesheet" href="user/assets/css/banner.css">
    <link rel="stylesheet" href="user/assets/css/style.css">
    <link rel="stylesheet" href="user/assets/css/save.css">
    <link rel="stylesheet" href="user/assets/css/header.css"> --}}
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('user/assets/css/banner.css')}}">
    
        <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/vendor/vendor.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/plugins/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/responsive.min.css')}}">
   <link rel="stylesheet" href="user/assets/css/header.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

<body>
    @include('section/header')
    <div class="cart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12">
                    <div class="guys">
                        <div class="vsghd">
                            <div class="rtryt">
                                <h3 class="_1aULyb fgvbg"> <span class="_3ENQxz">1</span> Login</h3>
                                <p class="dfvsdf">{{ Auth::user()->name }} {{ Auth::user()->phone }}</p>
                            </div>
                            <!-- <div class="fedf">
                           <button class="_32l7f0">Change</button>
                           </div> -->
                        </div>
                    </div>
                    <div class="guys">
                        <h3 class="_1hUz_t _2-K-ro"><span class="_3ENQxz">2</span><span
                                class="_1aULyb">Delivery
                                Address</span>
                        </h3>
                        <?php $DeliveryAddresses = DeliverAddress::DeliverAddress(); ?>
                        @foreach ($DeliveryAddresses as $DeliverAddress)
                            <label for="CNTCT88A34E245419465983736F8A8" class="_2Fn-Ln _1TW9af j0Sqdz _18Z3T6 _3L7Pww">
                                <input type="hidden" class="_3DAmyP" name="id"
                                    value="{{ $DeliverAddress['id'] }}" readonly="" id="CNTCT88A34E245419465983736F8A8"
                                    checked="">
                                <div class="_1XFPmK"></div>
                                <div class="_2jIO64">
                                    <div class="_2SkKgB">
                                        <div id="" class="">
                                            <p class="rPNEXT"><span
                                                    class="_2dQV-8">{{ $DeliverAddress['name'] }}</span><span
                                                    class="_2XilLp">{{ $DeliverAddress['address_type'] }}</span><span
                                                    class="_3mmRDy _2dQV-8">{{ $DeliverAddress['phone'] }}</span></p>
                                            <span class="">{{ $DeliverAddress['address'] }},
                                                {{ $DeliverAddress['locality'] }}, {{ $DeliverAddress['city'] }},
                                                {{ $DeliverAddress['state'] }} - <span
                                                    class="_2dQV-8">{{ $DeliverAddress['pincode'] }}</span></span>

                                            <a href="/add-delivery-address/{{ $DeliverAddress['id'] }}"> <button
                                                    class="phonee">Deliver Here</button></a>
                                        </div>
                                        <div class="_1AXmWp"><button type="button"
                                                class="_1MM7ZD">EDIT</button></div>
                                    </div>
                                </div>
                            </label>
                        @endforeach
                    </div>
                    <div class="guys">
                        <div class="accordion js-accordion" data-id="accordion1">
                            <button type="button" id="accordionOne" class="accordion__button js-accordion__button"
                                aria-expanded="false" aria-controls="sectionOne">
                                Add New Address
                            </button>
                            <div id="sectionOne" class="accordion__body js-accordion__body" role="region"
                                aria-labelledby="accordionOne">
                                <div class="dfvsdef" style="padding: 20px;">
                                    <form action="/add-edit-delivery-address" method="post" onsubmit="return validateForm()">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control" name="name" placeholder="Name"
                                                    required="" autocomplete="name" tabindex="1" value="">
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control" name="phone" id="phone_number"
                                                    placeholder="10-digit mobile number" required="" autocomplete="name"
                                                    tabindex="1" value="">
                                                <span id="phone_number_error" style="color:red"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control" name="pincode"
                                                    placeholder="Pincode" required="" maxlength="6"
                                                    autocomplete="postal-code" tabindex="3" value="">
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control" name="locality"
                                                    placeholder="Locality" required="" maxlength="6"
                                                    autocomplete="postal-code" tabindex="3" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <textarea class="form-control" name="address" placeholder="Address"
                                                    rows="4" cols="10" tabindex="5" required=""
                                                    autocomplete="street-address"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control" name="city"
                                                    placeholder="City/District/Town" required="" autocomplete="city"
                                                    tabindex="6" value="">
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <select class="form-control" name="state" required="" tabindex="7">
                                                    <option value="" disabled="">--Select State--</option>
                                                    <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar
                                                        Islands
                                                    </option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra &amp; Nagar Haveli &amp; Daman &amp; Diu">Dadra
                                                        &amp; Nagar Haveli &amp; Daman &amp; Diu
                                                    </option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
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
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control" name="landmark"
                                                    placeholder="Landmark (Optional)" tabindex="8" required="" 
                                                    maxlength="200" value="">
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="text" class="form-control" name="alternate_ph" id="altered_phone_number"
                                                    placeholder="Alternate Phone (Optional)" tabindex="9" required="" maxlength="10" value="">
                                                <span id="altered_phone_number_error" style="color:red"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="_2tiHgk">Address Type</p>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="radio" id="html" name="address_type" value="Home" required=""> <label
                                                    for="html">Home (All day delivery)</label><br>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <input type="radio" id="html" name="address_type" value="Work" required="">
                                                <label for="html">Work (Delivery between 10 AM - 5 PM)</label><br>
                                            </div>
                                        </div>
                                        <div class="l5QiYB _1hGj33"><button type="submit"
                                                class="_2KpZ6l _1JDhFS _3AWRsL" type="button" tabindex="10">Save and
                                                Deliver Here</button><button class="_2KpZ6l _8NNVow" type="button"
                                                tabindex="11">Cancel</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="guys">
                        <div class="vsghd">
                            <div class="rtryt">
                                <h3 class="_1aULyb fgvbg"> <span class="_3ENQxz">3</span> Order Summary</h3>
                            </div>
                        </div>
                    </div>
                    <div class="guys">
                        <div class="vsghd">
                            <div class="rtryt">
                                <h3 class="_1aULyb fgvbg"> <span class="_3ENQxz">4</span>Payment Options</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $userCartItem = Cart::userCartItem();
                $total_amount = 0;
                $total_final_price = 0;
                $total_discount_price = 0;
                ?>
                @foreach ($userCartItem as $item)
                    <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'], $item['size']); ?>
                    {{-- Count discounted price --}}
                    <?php
                    // Total amount, final_price(discounted_price), discount_price
                    $total_final_price = $total_final_price + $attrPrice['final_price'] * $item['quantity'];
                    $total_discount_price = $total_discount_price + $attrPrice['discount_price'] * $item['quantity'];
                    $total_amount = $total_amount + $attrPrice['product_price'] * $item['quantity'];
                    ?>
                    <!--  <div class="btn _3dsJAO removeItem" data-cartid="{{ $item['id'] }}">Remove</div> -->
                @endforeach
                <div class="col-md-5 col-lg-5 col-sm-12">
                    <div class="gtfyfg">
                        <div class="gmgfy">
                            <h3 class="fdtfqw"> Price details</h3>
                            <hr>
                            <?php
                                $count = Cart::totalCartItem();
                                $totalArr = Cart::userCartTotalPrice();
                            ?>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0">Price ({{ $count }} items)</div>
                                </div>
                                <span> ₹{{ $totalArr['total_amount'] }}</span>
                            </div>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0">Discount</div>
                                </div>
                                <span class="_1YVZr_ _33nGE1">− ₹{{ $totalArr['total_discount_price'] }}</span>
                            </div>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0">Coupon Amount</div>
                                </div>
                                @if (Session::has('couponAmount'))
                                    <span class="_1YVZr_ _33nGE1">- {{ Session::get('couponAmount') }}</span>
                                @else
                                    <span class="_1YVZr_ _33nGE1">0</span>
                                @endif
                            </div>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0">Special Discount</div>
                                </div>
                                <span class="_1YVZr_ _33nGE1 gst">- ₹{{ $totalArr['special_discount'] }}</span>
                            </div>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0">GST</div>
                                </div>
                                <span class="_1YVZr_ _33nGE1">+ ₹{{ $totalArr['igst'] }}</span>
                            </div>
                            <hr>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0"><b>Total Amount</b></div>
                                </div>
                                {{-- @if (Session::has('GrandTotal'))
                                    <span class="_1YVZr_ _33nGE1">{{ Session::get('GrandTotal') }}</span>
                                @else --}}
                                    <?php Session::put('GrandTotal', $totalArr['total_final_price']); ?>
                                    @if (Session::has('couponAmount'))
                                        @if (Session::get('couponAmount') < $totalArr['total_final_price'])
                                            <span class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] - Session::get('couponAmount') }}</b></span>
                                        @else
                                            <span class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] }}</b></span>
                                        @endif
                                    @else
                                        <span class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] }}</b></span>
                                    @endif
                                {{-- @endif --}}

                            </div>
                            @if (Session::has('couponAmount'))
                                <?php $grand_total_price = $total_discount_price + Session::get('couponAmount'); ?>
                                <div class="_3s5O6i">You will save ₹{{ $grand_total_price }} on this order
                                </div>
                            @else
                                <div class="_3s5O6i">You will save ₹{{ $totalArr['total_discount_price'] }} on this order
                                </div>
                            @endif

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ -->
    <!-- ===================== -->
    <script>
        function validateForm() {
            //collect form data in JavaScript variables  
            var phoneNumber = document.getElementById("phone_number").value;
            var alteredPhoneNumber = document.getElementById("altered_phone_number").value;
            var regex=/^[0-9]+$/;
    
            if (!phoneNumber.match(regex))
            {
                // alert('This field must be number');
                document.getElementById("phone_number_error").innerHTML = "**This field must be number";
                return false;
            }

            if (!alteredPhoneNumber.match(regex))
            {
                // alert('This field must be number');
                document.getElementById("altered_phone_number_error").innerHTML = "**This field must be number";
                return false;
            }
        }
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
