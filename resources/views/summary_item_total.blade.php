 <?php use App\Models\Cart; ?>
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
         <div class="Ob17DV">
             <div class="_24KATy">
                 <div class="_2npqm0">Delivery Charges</div>
             </div>
             <span class="_1YVZr_ _33nGE1">
                 @if ($totalArr['total_final_price'] < 500)
                     + ₹{{ Session::get('shipping_charges') }}
                 @else
                     {{ Session::forget('shipping_charges') }} FREE
                 @endif
             </span>
         </div>
         <hr>
         <div class="Ob17DV">
             <div class="_24KATy">
                 <div class="_2npqm0"><b>Total Amount</b></div>
             </div>
             {{-- @if (Session::has('GrandTotal'))
                                 <span class="_1YVZr_ _33nGE1">{{ Session::get('GrandTotal') }}</span>
                              @else --}}
             <?php
             if (Session::has('shipping_charges') && Session::has('couponAmount')) {
                 $tz = $totalArr['total_final_price'] + Session::get('shipping_charges') - Session::get('couponAmount');
                 Session::put('GrandTotal', $tz);
             } elseif (Session::has('shipping_charges')) {
                 $tz = $totalArr['total_final_price'] + Session::get('shipping_charges');
                 Session::put('GrandTotal', $tz);
             } elseif (Session::has('couponAmount')) {
                 $tz = $totalArr['total_final_price'] - Session::get('couponAmount');
                 Session::put('GrandTotal', $tz);
             } else {
                 Session::put('GrandTotal', $totalArr['total_final_price']);
                 // echo"<pre>";print_r('swarnad');die;
             }
             
             ?>
             @if (Session::has('couponAmount'))
                 @if (Session::get('couponAmount') < $totalArr['total_final_price'])
                     <span
                         class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] + Session::get('shipping_charges') - Session::get('couponAmount') }}</b></span>
                 @else
                     <span
                         class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] + Session::get('shipping_charges') }}</b></span>
                 @endif
             @else
                 <span
                     class="_1YVZr_ _33nGE1"><b>₹{{ $totalArr['total_final_price'] + Session::get('shipping_charges') }}</b></span>
             @endif
             {{-- @endif --}}

         </div>
         @if (Session::has('couponAmount'))
             <?php $grand_total_discount = $totalArr['total_discount_price'] + Session::get('couponAmount'); ?>
             <div class="_3s5O6i">You will save ₹{{ $grand_total_discount }} on this order</div>
         @else
             <div class="_3s5O6i">You will save ₹{{ $totalArr['total_discount_price'] }} on this order</div>
         @endif
     </div>

 </div>
