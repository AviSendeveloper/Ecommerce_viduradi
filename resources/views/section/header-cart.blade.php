<?php use App\Models\Product; ?>
<?php use App\Models\products_attributes; ?>
<ul class="minicart-product-list">
    @foreach ($userCartItem as $item)
        <?php $attrPrice = Product::getDiscountedAttrPrice($item['product_id'], $item['size']);
        $product = Product::where('id', $item['product_id'])->first();
        $products_attributes = products_attributes::where(['product_id' => $item['product_id'], 'size' => $item['size']])->first();
        ?>
        <li>
            <a href="single-product" class="image"><img
                    src="{{ asset('product/image') }}/{{ $item['product']['main_image'] }}"
                    alt="Cart product Image"></a>
            <div class="content">
                <a href="single-product"
                    class="title">{{ $item['product']['product_name'] }}
                    ({{ $item['product']['product_code'] }})
                </a>
                <span class="quantity-price">MRP: {{ $products_attributes['price'] }}
                    ({{ $attrPrice['discount'] }}%)</span>
                <span class="quantity-price">Price: {{ $attrPrice['final_price'] }} </span>
                <span class="quantity-price">Qty: {{ $item['quantity'] }} </span>
                <span class="quantity-price">Size: {{ $item['size'] }} </span>
                <span class="quantity-price">Color: {{ $product['product_color'] }} </span>
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
                    <div class="_3dsJAO removeItem" data-cartid="{{ $item['id'] }}">
                        <button>Remove</button>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>