<?php use App\Models\Product; ?>
<?php use App\Models\Cart; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        {{-- <link rel="stylesheet" href="user/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="user/assets/css/banner.css">
    
        <link rel="stylesheet" href="user/assets/css/style.css">
        <link rel="stylesheet" href="user/header/assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="user/header/assets/css/plugins/plugins.min.css">
        <link rel="stylesheet" href="user/header/assets/css/style.min.css">
        <link rel="stylesheet" href="user/header/assets/css/responsive.min.css"> --}}
        <link rel="stylesheet" href="{{ asset('user/assets/css/header.css') }}"> 
        <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('user/assets/css/banner.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/vendor/vendor.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/plugins/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/responsive.min.css')}}">
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
   
    <div class="cart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12">
                    <form id="paymentForm" name="paymentForm" action="/payment" method="post">
                        @csrf
                    <input type="hidden" name="address_id" value="{{$delivery['id']}}">
                    <div class="guys">
                        <div class="vsghd">

                            <div class="rtryt">
                                <h3 class="_1aULyb fgvbg"> <span class="_3ENQxz">1</span> Login</h3>
                                <p class="dfvsdf">{{Auth::user()->phone}}</p>

                            </div>
                           <!--  <div class="fedf">
                                <button class="_32l7f0">Change</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="guys">
                        <div class="vsghd">

                             <div class="rtryt">
                                <h3 class="_1aULyb fgvbg"> <span class="_3ENQxz">2</span>Delivery Address</h3>
                                <div class="_1QFLA6"><span><span class="npYOZI" data-address="{{ $delivery['id'] }}">{{ $delivery['name'] }}
                                        </span><span>{{ $delivery['address'] }}, {{ $delivery['locality'] }},
                                            {{ $delivery['city'] }},
                                            {{ $delivery['state'] }} - <span
                                                class="_2dQV-8">{{ $delivery['pincode'] }}</span></span></span>
                                </div>

                            </div>
                            <div class="fedf">
                               <a href="/checkout" class="_32l7f0">Change</a> 
                            </div>
                        </div>
                    </div>
                    <?php $count = Cart::totalCartItem() ?>
                    <div class="guys">
                        <div class="vsghd">

                            <div class="rtryt">
                                <h3 class="_1aULyb fgvbg"> <span class="_3ENQxz">3</span>Order
                                    Summary</h3>
                                <div class="_1QFLA6"><span class="npYOZI">{{$count}} Item</span></div>

                            </div>
                            <div class="fedf">
                               <a href="/add-delivery-address/{{ $delivery['id'] }}" class="_32l7f0">Change</a> 
                            </div>
                        </div>
                    </div>
                    <div class="guys info_content">
                        <h3 class="_1hUz_t _2-K-ro"><span class="_3ENQxz">4</span><span class="_1aULyb">Payment
                                Options</span></h3>
                        <div><label for="NET_OPTIONS" class="_2Fn-Ln _30jOKh _18Z3T6"><input type="radio" class="_3DAmyP" name="payment_gateway" value="Paytm" readonly="" id="NET_OPTIONS">
                                <div class="_1XFPmK"></div>
                                <div class="_2jIO64 _3Uc2dx">
                                    <div class="XYyD6I">
                                        <div class="_2nxZhC">
                                            <div class="_3EgrW-"></div>Paytm<ul></ul>
                                        </div>
                                    </div>
                                </div>
                            </label><label for="EMI_OPTIONS" class="_2Fn-Ln _30jOKh _18Z3T6"><input type="radio"
                                    class="_3DAmyP" name="payment_gateway" value="Razorpay" readonly="" id="EMI_OPTIONS">
                                <div class="_1XFPmK"></div>
                                <div class="_2jIO64 _3Uc2dx">
                                    <div class="XYyD6I">
                                        <div class="_2nxZhC">
                                            <div class="_3EgrW-"></div>Razorpay<ul></ul>
                                        </div>
                                    </div>
                                </div>
                            </label><label for="COD" class="_2Fn-Ln _30jOKh _18Z3T6"><input type="radio" class="_3DAmyP"
                                    name="payment_gateway" value="CashFree" readonly="" id="cashfree">
                                <div class="_1XFPmK"></div>
                                <div class="_2jIO64 _3Uc2dx">
                                    <div class="XYyD6I">
                                        <div class="_2nxZhC">
                                            <div class="_3EgrW-"></div>
                                            <div class="_2ECO5T">Cash Free</div>
                                            <ul></ul>
                                        </div>
                                    </div>
                                </div>
                            </label><label for="COD" class="_2Fn-Ln _30jOKh _18Z3T6"><input type="radio" class="_3DAmyP"
                                    name="payment_gateway" readonly="" value="COD" id="COD">
                                <div class="_1XFPmK"></div>
                                <div class="_2jIO64 _3Uc2dx">
                                    <div class="XYyD6I">
                                        <div class="_2nxZhC">
                                            <div class="_3EgrW-"></div>
                                            <div class="_2ECO5T">Cash on Delivery</div>
                                            <ul></ul>
                                        </div>
                                    </div>
                                </div>
                            </label></div>
                            <div style="margin:10px;"><a href="/orderresponse"><button class="_2KpZ6l _1seccl _3AWRsL">CONTINUE</button></a></div>
                        <hr>



                    </div>
                </form>

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

                    <?php $count = Cart::totalCartItem(); ?>
                    <?php $totalArr = Cart::userCartTotalPrice(); ?>
                   
                    <div class="gtfyfg">
                        <div class="gmgfy">
                            <h3 class="fdtfqw"> Price details</h3>
                            <hr>
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
                                    <span class="_1YVZr_ _33nGE1">{{ Session::get('couponAmount') }}</span>
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
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0">Shipping Charges</div>
                                </div>
                                <span class="_1YVZr_ _33nGE1">@if(Session::has('shipping_charges'))+ ₹{{ Session::get('shipping_charges') }} @else FREE @endif</span>
                            </div>
                            <hr>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0"><b>Total Amount</b></div>
                                </div>
                                {{-- @if (Session::has('GrandTotal'))
                                                    <span class="_1YVZr_ _33nGE1">{{ Session::get('GrandTotal') }}</span>
                                                 @else --}}
                                @if (Session::has('couponAmount') && Session::has('shipping_charges'))
                                    <span class="_1YVZr_ _33nGE1"><b>₹{{ ($totalArr['total_final_price']+Session::get('shipping_charges')) - Session::get('couponAmount') }}</b></span>
                                @elseif(Session::has('couponAmount'))
                                <span class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] - Session::get('couponAmount') }}</b></span>
                                @else
                                    <span class="_1YVZr_ _33nGE1"><b>₹{{ Session::get('GrandTotal') }}</b></span>
                                @endif
                                {{-- @endif --}}
                   
                            </div>
                            @if (Session::has('couponAmount'))
                                <?php $grand_total_price = $total_discount_price + Session::get('couponAmount'); ?>
                                <div class="_3s5O6i">You will save ₹{{ $grand_total_price }} on this order</div>
                            @else
                                <div class="_3s5O6i">You will save ₹{{ $totalArr['total_discount_price'] }} on this order</div>
                            @endif
                        </div>
                    </div>
                   
                    {{-- <div class="gtfyfg">
                        <div class="gmgfy">
                            <h3 class="fdtfqw"> Price details</h3>
                            <hr>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                  
                                    <div class="_2npqm0">Price ({{$count}} items)</div>
                                </div>
                                <span> ₹{{ $total_amount }}</span>
                            </div>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0">Discount</div>
                                </div>
                                <span class="_1YVZr_ _33nGE1">− ₹{{ $total_discount_price }}</span>
                            </div>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0">Coupon Ammount</div>
                                </div>
                                 @if (Session::has('couponAmount'))
                                 <span class="_1YVZr_ _33nGE1">{{ Session::get('couponAmount') }}</span>
                              @else
                                 <span class="_1YVZr_ _33nGE1">0</span>
                              @endif
                              
                            </div>
                            <hr>
                            <div class="Ob17DV">
                                <div class="_24KATy">
                                    <div class="_2npqm0"><b>Total Amount</b></div>
                                </div>
                                  @if (Session::has('GrandTotal'))
                                 <span class="_1YVZr_ _33nGE1">₹{{ Session::get('GrandTotal') }}</span>
                              @else
                                 <span class="_1YVZr_ _33nGE1"><b>₹{{ $total_final_price }}</b></span>
                              @endif
                              
                            </div>
                             @if (Session::has('couponAmount'))
                              <?php $grand_total_price = $total_discount_price + Session::get('couponAmount') ?>
                              <div class="_3s5O6i">You will save ₹{{ $grand_total_price }} on this order</div>
                           @else
                              <div class="_3s5O6i">You will save ₹{{ $total_discount_price }} on this order</div>
                           @endif
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>

    </div>

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



            for (const button of this.buttons) {
                if (!button.classList.contains(this.options.activeClassName))
                    continue;
                button.setAttribute("aria-expanded", "true");
                const body = button.nextElementSibling;
                body.style.display = "block";
                body.style.maxHeight = "none";
            }


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

                    this.buttons[0].focus();
                    break;
                case "35":

                    this.buttons[this.buttons.length - 1].focus();
                    break;
                case "38":

                    const prevIndex = this.buttons.indexOf(target) - 1;
                    if (this.buttons[prevIndex]) {
                        this.buttons[prevIndex].focus();
                    } else {
                        this.buttons[this.buttons.length - 1].focus();
                    }
                    break;
                case "40":

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


            if (body.style.maxHeight === "none") {
                body.style.maxHeight = `${body.scrollHeight}px`;
            }

            if (button.classList.contains(this.options.activeClassName)) {

                button.classList.remove(this.options.activeClassName);
                button.setAttribute("aria-expanded", "false");
                setTimeout(() => void(body.style.maxHeight = "0px"), 0);
            } else {

                button.classList.add(this.options.activeClassName);
                button.setAttribute("aria-expanded", "true");
                body.style.display = "block";
                body.style.maxHeight = `${body.scrollHeight}px`;
            }
        }

        handleTransitionend(event) {
            const body = event.currentTarget;
            if (body.style.maxHeight !== "0px") {

                body.style.maxHeight = "none";
            } else {

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



    window.addEventListener("DOMContentLoaded", () => {
        const accordionEls = [...document.querySelectorAll(".js-accordion")];
        for (const accordionEl of accordionEls) {
            new Accordion(accordionEl);
        }
    });
    </script>
    <script>
    hide = true;
    $('body').on("click", function() {
        if (hide) $('.info_content').removeClass('open');
        hide = true;
    });

    $('body').on('click', '.btn', function() {

        var self = $(".info_content");

        if (self.hasClass('open')) {
            $('.info_content').removeClass('open');
            return false;
        }

        $('.info_content').removeClass('open');

        self.toggleClass('open');
        hide = false;
    });
    </script>
    <script>
    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>


<script src="{{ asset('user/assets/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('user/assets/js/inewsticker.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('user/assets/js/images-loded.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('user/assets/js/custom.js') }}"></script>
</body>

</html>