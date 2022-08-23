<?php use App\Models\products_images; ?>
<?php use App\Models\OrderProduct; ?>
<?php use App\Models\Product; ?>
@foreach ($orders as $order)
    <?php $product = OrderProduct::where('order_id', $order['id'])->first(); ?>
    <?php $order_product = Product::where('id', $product['product_id'])->first(); ?>
    <div class="vhguyh">
        <div class="row">
            <div class="col-md-1 col-lg-1 col-sm-12">
                <a href="/order-tracking/{{ $order['id'] }}">
                    <div class="fgtf">
                        <img class="_3c6JdB" src="{{ asset('product/image') }}/{{ $order_product['main_image'] }}"
                            alt="">
                    </div>
                </a>

            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <h4>{{ $product['product_name'] }}</h4>
                <p>Color: {{ $product['product_color'] }}</p>
                <p>Size:{{ $product['product_size'] }}</p>
                <p>Quantity:{{ $product['product_qty'] }}</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="gfgbf3e">

                    <h4>₹{{ $order['grand_total'] }} </h4>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="GYYyEN">
                    <div>
                        @if ($order['order_status'] == 'New')
                            <span class="AO0UbU">Ordered on
                                {{ date('D d M Y', strtotime($order['created_at'])) }}</span>
                            <div class="_30gI7w">Your order was Submitted.</div>
                        @elseif($order['order_status'] == 'Cancel')
                            <div class="_30gI7w">Your order was Cancelled.</div>
                        @else
                            <div class="_30gI7w">Your order is Shipped for delivery.</div>
                        @endif
                    </div>

                </div>

            </div>
        </div>


    </div>
@endforeach
