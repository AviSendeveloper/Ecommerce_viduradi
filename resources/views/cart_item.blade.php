<meta name="csrf-token" content="{{ csrf_token() }}">
<?php
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Carbon;
?>
<?php
$totalArr = Cart::userCartTotalPrice();
$totalCartItem = Cart::totalCartItem();
?>
<div class="row">
    {{-- Cart --}}
    <div class="col-md-8 col-lg-8 col-sm-12">
        <div>
            <div class="fgtfuih">
                <div class="maincart">
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <div class="_3g_HeN">My Cart ({{ $totalCartItem }})</div>
                        </div>
                        <div class="col-md-9 col-lg-9">

                        </div>
                    </div>
                </div>
                {{-- Cart item start --}}
                @foreach ($userCartItem as $item)
                <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'], $item['size']); ?>
                <div class="maincart">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-12">
                            <img src="{{ asset('product/image') }}/{{ $item['product']['main_image'] }}" alt=""
                                style="width:100px;">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="dsada"><a class="_2Kn22P gBNbID" href="#">{{ $item['product']['product_name'] }}
                                    ({{ $item['product']['product_code'] }})
                                </a>
                            </div>
                            <div class="_3ZS8sw">Size:{{ $item['size'] }} </div>
                            <!-- <div class="_3ZS8sw">Seller:KuntiCraft<img class="WC-2wP" src="//static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/fa_62673a.png"></div> -->
                            <div class="ew2ew">
                                {{-- Count discounted price --}}
                                <span class="_2-ut7f _1WpvJ7">₹{{ $attrPrice['final_price'] }}</span>
                                <span class="_2-ut7f _2xc6hH">₹{{ $attrPrice['product_price'] }}</span>
                                <span class="dML6Ak">{{ $attrPrice['discount'] }}% Off</span>
                            </div>
                            <div class="_3tcB5a">
                                <div>
                                    {{-- <div class="_2Tpdn3">Or Pay </div>
                                        <div class="_2Tpdn3">₹191 + </div>

                                        <div class="_2Tpdn3"> 48</div> --}}
                                </div>
                            </div>
                            {{-- <div class="_1tBBEs">Currently out of stock for 033123</div> --}}
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <div class="_2zbf83">
                                <ul class="_1ZEsQ4">
                                    <li class="JEy4SL">
                                        <div class="_2pqhhf">Delivery in @php print date('l M y', strtotime(Carbon::now()->addDay(7))) @endphp | <span class="_3CWtsA"><span
                                                    class="_1OMRfP">Free</span></span> <span
                                                class="_3CWtsA _2_Yr5B qtytuiv">₹40</span></div>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nZz3kj _1hNI6F">
                        <div class="_3YT0U7 _10vWcL td-FUv WDiNrH">
                            <div class="qty-input">
                                <button type="button" name="" class="btn btnItemUpdate qtyMinus"
                                    data-cartid="{{ $item['id'] }}">
                                    -
                                </button>
                                <input class="product-qty" type="number" name="product-qty"
                                    value="{{ $item['quantity'] }}">
                                <button type="button" name="" value="up" class="btn  btnItemUpdate qtyPlus"
                                    data-cartid="{{ $item['id'] }}">
                                    +
                                </button>
                            </div>
                            <div class="_3dsJAO"><a href="/add-save-for-later/{{ $item['id'] }}"><button>Save for later</button></a></div>
                            <div class="_3dsJAO removeItem" data-cartid="{{ $item['id'] }}">
                                <button>Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- Cart item end --}}
                <div class="_1AtVbE col-12-12 _78xt5Y">
                    <div class="VUS-tD eBV0fb">
                        <a href="/checkout"><button class="_2KpZ6l _2ObVJD _3AWRsL"><span>Place
                                    Order</span></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="gtfyfg">
            <div class="gmgfy">
                <h3 class="fdtfqw"> Price details</h3>
                <hr>
                <div class="Ob17DV">
                    <div class="_24KATy">
                        <div class="_2npqm0">Price ({{ $totalCartItem }} items)</div>
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
                        <span class="_1YVZr_ _33nGE1 couponAmount">- {{ Session::get('couponAmount') }}</span>
                    @else
                        <span class="_1YVZr_ _33nGE1 couponAmount">0</span>
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
                    <span class="_1YVZr_ _33nGE1 gst">+ ₹{{ $totalArr['igst'] }}</span>
                </div>
                <hr>
                <div class="Ob17DV">
                    <div class="_24KATy">
                        <div class="_2npqm0"><b>Total Amount</b></div>
                    </div>
                    @if (Session::has('couponAmount'))
                    @if (Session::get('couponAmount') < $totalArr['total_final_price']) <span class="_1YVZr_ _33nGE1">
                        <b>₹{{ $totalArr['total_final_price'] - Session::get('couponAmount') }}</b></span>
                        @else
                        <span class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] }}</b></span>
                        @endif
                        @else
                        <span class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] }}</b></span>
                        @endif
                        {{-- <span class="_1YVZr_ _33nGE1 grand_total"><b>₹{{ $totalArr['total_final_price'] }}</b></span>
                        --}}
                </div>
                <div class="_3s5O6i">You will save ₹{{ $totalArr['total_discount_price'] }} on this order
                </div>
            </div>

        </div>
        <br>
        <div class="gtfyfg">
            <div class="container-fluid">
                <div class="announcement">
                    <div class="coupon">
                        <form id="ApplyCoupon" action="javascript:void(0)" method="post" @if (Auth::check()) user="1" @endif>
                            @csrf
                            <input type="text" name="code" id="code" @if (Session::has('couponAmount')) value="{{ Session::get('couponCode') }}" @else value="" @endif placeholder="Enter Coupon Code" required />
                            <div class="tooltip">
                                <button @if (Session::has('couponAmount')) type='button' @else type='submit' @endif>
                                    Apply
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Save Later --}}
    @if ($totalMovedItem > 0)
        <div class="col-md-8 col-lg-8 col-sm-12">
            <div>
                <div class="fgtfuih">
                    <div class="maincart">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <div class="_3g_HeN">Save Later ({{ $totalMovedItem }})</div>
                            </div>
                            <div class="col-md-9 col-lg-9">

                            </div>
                        </div>
                    </div>
                    {{-- Cart item start --}}
                    @foreach ($movedItem as $item)
                    <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'], $item['size']); ?>
                    <div class="maincart">
                        <div class="row">
                            <div class="col-md-2 col-lg-2 col-sm-12">
                                <img src="{{ asset('product/image') }}/{{ $item['product']['main_image'] }}" alt=""
                                    style="width:100px;">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="dsada"><a class="_2Kn22P gBNbID" href="#">{{ $item['product']['product_name'] }}
                                        ({{ $item['product']['product_code'] }})
                                    </a>
                                </div>
                                <div class="_3ZS8sw">Size:{{ $item['size'] }} </div>
                                <!-- <div class="_3ZS8sw">Seller:KuntiCraft<img class="WC-2wP" src="//static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/fa_62673a.png"></div> -->
                                <div class="ew2ew">
                                    {{-- Count discounted price --}}
                                    <span class="_2-ut7f _1WpvJ7">₹{{ $attrPrice['final_price'] }}</span>
                                    <span class="_2-ut7f _2xc6hH">₹{{ $attrPrice['product_price'] }}</span>
                                    <span class="dML6Ak">{{ $attrPrice['discount'] }}% Off</span>
                                </div>
                                <div class="_3tcB5a">
                                    <div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                {{-- <div class="_2zbf83">
                                    <ul class="_1ZEsQ4">
                                        <li class="JEy4SL">
                                            <div class="_2pqhhf">Delivery in @php print date('l M y', strtotime(Carbon::now()->addDay(7))); @endphp | <span class="_3CWtsA"><span
                                                        class="_1OMRfP">Free</span></span> <span
                                                    class="_3CWtsA _2_Yr5B there">₹40</span></div>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                        <div class="nZz3kj _1hNI6F">
                            <div class="_3YT0U7 _10vWcL td-FUv WDiNrH">
                                <div class="qty-input">
                                    <button type="button" name="" class="btn btnItemUpdate qtyMinus">
                                        -
                                    </button>
                                    <input class="product-qty" type="number" name="product-qty"
                                        value="{{ $item['quantity'] }}">
                                    <button type="button" name="" value="up" class="btn  btnItemUpdate qtyPlus">
                                        +
                                    </button>
                                </div>
                                <div class="_3dsJAO"><a href="/add-cart-from-save-later/{{ $item['id'] }}"><button>Move to Cart</button></a></div>
                                <div class="_3dsJAO removeItemssssssss" data-cartid="{{ $item['id'] }}">
                                    <button>Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>