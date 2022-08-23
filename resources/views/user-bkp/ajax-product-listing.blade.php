 <?php use App\Models\Product; ?> 
                    <div class="row">
                        @foreach($categoryProducts as $product)
                            
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="Content2">
                                <a href="/product/{{$product->id}}">
                                <div class="img-fill product-img">
                                <img src="{{asset('product/image')}}/{{$product['main_image']}}" alt="">
                                </div></a>
                                <h5 class="text-left">{{$product['product_name']}}</h5>
                                <p class="listprice">{{$product['brand']['name']}}</p>
                                <?php $discounted_price = Product::getDiscountedPrice($product['id']); ?>
                                    @if($discounted_price>0)<div class="flag special-products_pricing"><span class="offer fsemibold">₹
                                            {{$discounted_price}}</span> <span class="product-price"
                                            style="text-decoration: line-through; color: rgb(204, 204, 204);">₹
                                            {{$product['product_price']}}</span> <span class="percentage-off">{{$product['product_discount']}}% OFF</span></div>@else
                                            <div class="flag special-products_pricing"><span class="product-price"
                                            >₹
                                            {{$product['product_price']}}</span></div>
                                            @endif
                                           
                               
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if(isset($_GET['sort']) && !empty($_GET['sort']))
                        {{$categoryProducts->appends(['sort'=>$_GET['sort']])->links()}}
                    @else
                        {{$categoryProducts->links()}}
                    @endif
               