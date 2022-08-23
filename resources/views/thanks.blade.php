<?php use App\Models\Order; ?>
<?php use App\Models\OrderProduct; ?>
<?php use App\Models\Product; ?>
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
    <div class="coghty cart">
        <div class="container">
            <div class="vhguyh">
                <div class="row">
                    <div class="col-md-1 col-lg-1 col-sm-12">
                        <div class="fgtf">
                            <img class="_3c6JdB" src="user/assets/images/orderPlacedV2_cb4f64.png" alt="">
                        </div>
                    </div>
                    <?php $orderCount= Order::where('id',Session::get('order_id'))->count(); 
                          $order= Order::where('id', Session::get('order_id'))->first();
                          $product = OrderProduct::where('order_id', Session::get('order_id'))->get();
                    ?>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="XdpTC- _2GyCkX">
                           
                            <div><span>Order placed for </span>₹{{Session::get('GrandTotal')}}!</div>
                          
                        </div>
                        <div><span>Your {{$orderCount}} item will be delivered by </span><span class="_2GyCkX">Sat, Jan 8th
                                '22</span>.</div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="_3Tm5aQ">Why call? Just click!</div>
                        <div class="_33YwuI">Easily track all your Viduradi orders!</div>
                        <a class="_3J-yfZ" href="/order">Go to My Orders</a>
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-12">
                        <img class="_2GA8MD" src="user/assets/images/group.png" alt="">
                    </div>
                </div>


            </div>
            <div class="vhguyh">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div>
                            <div class="_1ZJv_G"><span class="_3jRtMt">Delivery Address</span></div>
                            <br>
                            <div class="_3LuzG3">
                                <div class="_1XnLtY">
                                    <div class="_3N-YiT">{{$order['name']}}</div>
                                </div>
                                <div class="_104tHa">{{$order['email']}}</div>
                                <div class="_1QP4w_">{{$order['address']}}, {{$order['name']}},  {{$order['locality']}},City. {{$order['city']}} -
                                    {{$order['pincode']}}, {{$order['state']}}</div>
                                <div class="_1XnLtY _2u8s7u">
                                    <div><span class="_3N-YiT">Phone number</span>
                                        <div class="_1egRWs">{{$order['phone']}}</div>
                                    </div>
                                </div>
                                <br>
                                <span class="_2K1cxl">This order is also tracked by {{Session::get('order_id')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="XdpTC- _2GyCkX">
                            <div></div>
                        </div>
                        <div class="_2kcozy">
                            <div></div>
                            <div class="-gBnNp"></div>
                        </div>
                    </div>
                    <!-- <div class="col-md-5 col-lg-5 col-sm-12">
                        <h4>More actions</h4>
                        <div class="_33YwuI">
                            <div>
                                <img class="_3Y5Y5U" src="user/assets/images/payNowLogopng.png" alt="">
                                <span class="xQQowV">Prefer contactless delivery ?</span>
                            </div>
                            <button class="_2KpZ6l bTMKxR"><span>Pay Now</span></button>

                        </div>
                        <br>
                        <div class="_33YwuI">
                            <div>
                                <img class="_3Y5Y5U" src="user/assets/images/download.svg" alt="">
                                <span class="xQQowV">Order shared with</span>
                            </div>
                            <button class="_2KpZ6l bTMKxR"><span>Manage</span></button>


                        </div>


                    </div> -->

                </div>

            </div>
            <div class="vhguyh">
              @foreach($product as $products)
              <?php $productAttr = Product::where('id',$products['product_id'])->first(); ?>
                <div class="row">
                    <div class="col-md-1 col-lg-1 col-sm-12">
                        <div class="fgtf">
                            <img class="_3c6JdB" src="{{asset('product/image')}}/{{$productAttr['main_image']}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <h4>{{$products['product_name']}}</h4>
                        <p>Color: {{$products['product_color']}}</p>
                        <p>Size: {{$products['product_size']}}</p>
                        <p>Quantity:{{$products['product_qty']}}</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="gfgbf3e">
                            <img src="user/assets/images/car.svg" alt="">
                            <h4>Delivery expected by Sat Jan 08</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="GYYyEN">
                            <div class="_1t3MJ7">₹{{$products['product_price']}}</div>
                            <div class="sre3w"><span class="_3vvH_e">1 Offer Applied</span>
                                <div class="Bv11UC"><span class="question">?</span></div>
                            </div>
                        </div>
                        <br>
                       
                    </div>
                </div>
              @endforeach

            </div>
        </div>

    </div>
<?php  
  Session::forget('order_id');
  Session::forget('GrandTotal');
  Session::forget('shipping_charges');
  Session::forget('couponAmount');
?>
    @include('section/footer')
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