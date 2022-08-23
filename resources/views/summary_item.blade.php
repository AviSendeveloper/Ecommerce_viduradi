 <?php use App\Models\Product; ?>
<?php 
use App\Models\Cart;
use Illuminate\Support\Carbon;
?>

 <div class="guys info_content">
     <h3 class="_1hUz_t _2-K-ro"><span class="_3ENQxz">3</span><span class="_1aULyb">Order Summary</span>
     </h3>
     <?php
     $total_amount = 0;
     $total_final_price = 0;
     $total_discount_price = 0;
     ?>
     @foreach ($userCartItem as $item)
         <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'], $item['size']); ?>
         <div class="row hghg">
             <div class="col-md-2 col-lg-2 col-sm-12">
                 <img src="{{ asset('product/image') }}/{{ $item['product']['main_image'] }}"
                     alt="{{ $item['product']['main_image'] }}" style="width:100px;">
             </div>

             <div class="col-md-4 col-lg-4 col-sm-12">
                 <div class="_2Kn22P">
                     {{ $item['product']['product_name'] }}({{ $item['product']['product_code'] }})</div>
                 <div class="_3ZS8sw"><span>Size: {{ $item['size'] }}</span></div>
                 <span class="_2-ut7f _1WpvJ7">₹{{ $attrPrice['final_price'] }}</span>
                 <span class="_2-ut7f _2xc6hH">₹{{ $attrPrice['product_price'] }}</span>
                 <span class="dML6Ak">{{ $attrPrice['discount'] }}% Off</span>
             </div>
             <div class="col-md-6 col-lg-6 col-sm-12">
                 <div class="delivery">
                     <p>@php print date('l M y', strtotime(Carbon::now()->addDay(7))) @endphp | <span class="_1OMRfP">Free</span><span
                             class="_3CWtsA _2_Yr5B qtytuiv">₹40</span></p>

                 </div>
             </div>
             {{-- Count discounted price --}}
             <?php
             // Total amount, final_price(discounted_price), discount_price
             $total_final_price = $total_final_price + $attrPrice['final_price'] * $item['quantity'];
             $total_discount_price = $total_discount_price + $attrPrice['discount_price'] * $item['quantity'];
             $total_amount = $total_amount + $attrPrice['product_price'] * $item['quantity'];
             ?>

         </div>
         <div class="maincart">
             <div class="ew2ew">
                 <div class="nZz3kj _1hNI6F">
                     <div class="_3YT0U7 _10vWcL td-FUv WDiNrH">
                         <div class="qty-input">
                             <button type="button" name="" class="btn btnItemUpdate"
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
                         <div class="_3dsJAO removeItem" data-cartid="{{ $item['id'] }}">
                             <button>Remove</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     @endforeach
     <hr>
 </div>
