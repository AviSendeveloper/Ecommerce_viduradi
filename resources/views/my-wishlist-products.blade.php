<div class="row">
    @foreach ($wishlists as $wishlist)
        <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="wishListBox"><button class="cancel removeProduct" data-wishlistid="{{ $wishlist->id }}"><i
                        class="fa fa-times"></i></button>
                <div id="productlist-undefined" class="productlist">
                    <div class="imgBlock listhover prdundefinedT-Shirtsimg loaded">
                        <img src="{{asset('product/image')}}/{{ $wishlist->product_details->main_image }}" alt="">
                    </div>
                    <div style="padding: 0px 5px 0px 10px;">
                        <h5 class="text-left">{{ $wishlist->product_details->product_name }}</h5>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <div class="listprice ecltext"><span>{{ $wishlist->product_details->category->category_name }}</span></div>
                            </div>
                            <div class="col-12" style="padding-right: 0px;"><span>₹ {{ $wishlist->product_details->product_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/product/{{ $wishlist->product_id }}"><div class="action"><span>Shop Now</span></div></a>
            </div>
        </div>
    @endforeach
</div>