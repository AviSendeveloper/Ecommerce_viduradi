<?php use App\Models\Product; ?>
<?php use App\Models\Wishlist; ?>
<div class="row">
    @foreach ($categoryProducts as $product)
        <div class="col-md-3 col-lg-3 col-sm-6 product-col">
            <div class="Content2 pro">
                <div class="img-fill product-img">
                    <a href="/product/{{ $product->id }}">
                        <img src="{{ asset('product/image') }}/{{ $product['main_image'] }}" alt="" style="width: 210px;
    height: 280px;">
                    </a>
                </div>

                @php $countWishlist = Wishlist::countWishlist($product->id) @endphp
                @if ($countWishlist > 0)
                    <div data-v-2df2a16c="" class="wishlistIcon wishlistActive update-wishlist"
                        data-productid="{{ $product->id }}">
                        <i class="fad fa-heart-circle"></i>
                    </div>
                @else
                    <div data-v-2df2a16c="" class="wishlistIcon wishlistActive update-wishlist"
                        data-productid="{{ $product->id }}">
                        <i class="far fa-heart"></i>
                    </div>
                @endif


                <div class="product-bottom">
                    <h5 class="text-left">{{ $product['product_name'] }}</h5>
                    <p class="listprice">{{ $product['brand']['name'] }}</p>
                    <?php $discounted_price = Product::getDiscountedPrice($product['id']); ?>
                    @if ($discounted_price > 0)
                        <div class="flag special-products_pricing"><span class="offer fsemibold">₹
                                {{ $discounted_price }}</span> <span class="product-price"
                                style="text-decoration: line-through; color: rgb(204, 204, 204);">₹
                                {{ $product['product_price'] }}</span> <span
                                class="percentage-off">{{ $product['product_discount'] }}%
                                OFF</span></div>
                    @else
                        <div class="flag special-products_pricing"><span class="product-price">₹
                                {{ $product['product_price'] }}</span></div>
                    @endif

                </div>

            </div>
        </div>
    @endforeach
</div>
@if (!isset($_REQUEST['search']))
    @if (isset($_GET['sort']) && !empty($_GET['sort']))
        {{ $categoryProducts->appends(['sort' => $_GET['sort']])->links() }}
    @else
        {{ $categoryProducts->links() }}
    @endif
@endif
</div>
</div>
</div>
</div>
<div class="product-footer">
    <div class="product-footer-item">
        <span id="open-modal2"><img class="pro-icon" src="{{ asset('assets/images/ic_filter.webp') }}" alt="">
            FILTER</span>
        <span id="open-modal"><img class="pro-icon" src="{{ asset('assets/images/ic_sort.webp') }}" alt="">
            SORT</span>
    </div>

</div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div id="modal-content" class="modal-content">
        <!-- Modal header -->
        <header class="modal-header">
            <p class="modal-header-title">
                <img class="pro-icon2" src="{{ asset('assets/images/ic_filter.webp') }}" alt=""> Sort
            </p>
            <button id="close" class="modal-header-icon">
                <span class="icon">
                    <i class='bx bx-x'></i>
                </span>
            </button>
        </header>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="mobile-sort-list"><span class="dark-text">Price - High to Low</span>
                <label data-v-4131fb0c=""><input data-v-4131fb0c="" type="radio" name="sort" rel="Price - High to Low"
                        value="PRICE_H2L"> <span data-v-4131fb0c=""></span></label>
            </div>
            <div class="mobile-sort-list"><span class="dark-text">Price - Low to High</span>
                <label data-v-4131fb0c=""><input data-v-4131fb0c="" type="radio" name="sort" rel="Price - High to Low"
                        value="PRICE_H2L"> <span data-v-4131fb0c=""></span></label>
            </div>
            <div class="mobile-sort-list"><span class="dark-text">Newest</span>
                <label data-v-4131fb0c=""><input data-v-4131fb0c="" type="radio" name="sort" rel="Price - High to Low"
                        value="PRICE_H2L"> <span data-v-4131fb0c=""></span></label>
            </div>
            <div class="mobile-sort-list"><span class="dark-text">Popularity</span>
                <label data-v-4131fb0c=""><input data-v-4131fb0c="" type="radio" name="sort" rel="Price - High to Low"
                        value="PRICE_H2L"> <span data-v-4131fb0c=""></span></label>
            </div>
        </div>

        <!-- Modal footer -->
        <footer class="modal-footer">

        </footer>
    </div>

</div>

<div id="myModal2" class="modal">
    <div id="modal-content2" class="modal-content mod-list">
        <header class="modal-header">
            <p class="modal-header-title">
                <img class="pro-icon2" src="{{ asset('assets/images/ic_filter.webp') }}" alt=""> Filter
            </p>
            <button id="close2" class="modal-header-icon">
                <span class="icon">
                    <i class='bx bx-x'></i>
                </span>
            </button>
        </header>

        <div class="modal-body mod-list1">
            <div class="row">
                <div class="col-md-3 col-sm-3 list-1">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link mb-3 p-3 active" id="v-pills-home-tab" data-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">

                            <span class="font-weight-bold small text-uppercase">Fabric</span></a>

                        <a class="nav-link mb-3 p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">

                            <span class="font-weight-bold small text-uppercase">Sleeve</span></a>

                        <a class="nav-link mb-3 p-3" id="v-pills-messages-tab" data-toggle="pill"
                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">

                            <span class="font-weight-bold small text-uppercase">Pattern</span></a>

                        <a class="nav-link mb-3 p-3" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">

                            <span class="font-weight-bold small text-uppercase">Occassion</span></a>
                        <a class="nav-link mb-3 p-3" id="v-pills-setting-tab" data-toggle="pill" href="#v-pills-setting"
                            role="tab" aria-controls="v-pills-setting" aria-selected="false">

                            <span class="font-weight-bold small text-uppercase">Fit</span></a>
                    </div>
                </div>


                <div class="col-md-9 col-sm-9 list-2">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade rounded bg-white show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="maxer">
                                <div class="customcheckbox-mb">

                                    <label class="d-flex align-items-center label-wrapper">
                                        <span>cotton</span>
                                    </label>
                                    <input class="fabric" type="checkbox" name="fabric[]" value="cotton"
                                        id="cotton">
                                </div>
                                <div class="customcheckbox-mb">

                                    <label class="d-flex align-items-center label-wrapper">
                                        <span>polyester</span>
                                    </label>
                                    <input class="fabric" type="checkbox" name="fabric[]" value="polyester"
                                        id="polyester">
                                </div>
                                <div class="customcheckbox-mb">

                                    <label class="d-flex align-items-center label-wrapper">
                                        <span>wool</span>
                                    </label>
                                    <input class="fabric" type="checkbox" name="fabric[]" value="wool"
                                        id="wool">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade rounded bg-white" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="maxer">
                                <div class="customcheckbox-mb"> <label class="d-flex align-items-center label-wrapper">
                                        <span>Full Sleeve</span>
                                    </label><input type="checkbox" name="sleeve[]" value="Full Sleeve"
                                        class="sleeve" id="Full Sleeve"></div>
                                <div class="customcheckbox-mb"> <label class="d-flex align-items-center label-wrapper">
                                        <span>Half Sleeve</span>
                                    </label><input type="checkbox" name="sleeve[]" value="Half Sleeve"
                                        class="sleeve" id="Half Sleeve"></div>
                                <div class="customcheckbox-mb"> <label class="d-flex align-items-center label-wrapper">
                                        <span>Short Sleeve</span>
                                    </label><input type="checkbox" name="sleeve[]" value="Short Sleeve"
                                        class="sleeve" id="Short Sleeve"></div>
                                <div class="customcheckbox-mb"> <label class="d-flex align-items-center label-wrapper">
                                        <span>Sleeveles</span>
                                    </label><input type="checkbox" name="sleeve[]" value="Sleeveles"
                                        class="sleeve" id="Sleeveles"></div>
                            </div>
                        </div>

                        <div class="tab-pane faderounded bg-white" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="maxer">
                                <div class="customcheckbox-mb"> <label class="d-flex align-items-center label-wrapper">
                                        <span>Checked</span>
                                    </label><input type="checkbox" name="pattern[]" value="Checked"
                                        class="pattern" id="Checked"></div>
                                <div class="customcheckbox-mb"> <label class="d-flex align-items-center label-wrapper">
                                        <span>Plain</span>
                                    </label><input type="checkbox" name="pattern[]" value="Plain" class="pattern"
                                        id="Plain"></div>
                                <div class="customcheckbox-mb"> <label class="d-flex align-items-center label-wrapper">
                                        <span>Printed</span>
                                    </label><input type="checkbox" name="pattern[]" value="Printed"
                                        class="pattern" id="Printed"></div>
                                <div class="customcheckbox-mb"> <label class="d-flex align-items-center label-wrapper">
                                        <span>Self</span>
                                    </label><input type="checkbox" name="pattern[]" value="Self" class="pattern"
                                        id="Self"></div>
                                <div class="customcheckbox-mb"> <label
                                        class="d-flex align-items-center label-wrapper">
                                        <span>Solid</span>
                                    </label><input type="checkbox" name="pattern[]" value="Solid"
                                        class="pattern" id="Solid"></div>
                            </div>
                        </div>

                        <div class="tab-pane fade rounded bg-white" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="maxer">
                                <div class="customcheckbox-mb"> <label
                                        class="d-flex align-items-center label-wrapper">
                                        <span>Casual</span>
                                    </label><input type="checkbox" name="occassion[]" value="Casual"
                                        class="occassion" id="Casual">
                                </div>
                                <div class="customcheckbox-mb"> <label
                                        class="d-flex align-items-center label-wrapper">
                                        <span>Formal</span>
                                    </label><input type="checkbox" name="occassion[]" value="Formal"
                                        class="occassion" id="Formal">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade rounded bg-white" id="v-pills-setting" role="tabpanel"
                            aria-labelledby="v-pills-setting-tab">
                            <div class="maxer">
                                <div class="customcheckbox-mb"> <label
                                        class="d-flex align-items-center label-wrapper">
                                        <span>Regular</span>
                                    </label><input type="checkbox" name="fit[]" value="Regular" class="fit"
                                        id="Regular">
                                </div>
                                <div class="customcheckbox-mb"> <label
                                        class="d-flex align-items-center label-wrapper">
                                        <span>Slim</span>
                                    </label>
                                    <input type="checkbox" name="fit[]" value="Slim" class="fit" id="Slim">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal footer -->
        <footer class="modal-footer">

        </footer>
    </div>

</div>

{{-- return error without login in wishlist --}}
<script>
    $('.loginCheck').click(function() {
        alert('You have to login to add this product in wishlist');
    });
</script>

{{-- insert/update product in wishlist --}}
<script>
    $('.update-wishlist').click(function() {
        var product_id = $(this).data('productid');
        // alert(product_id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/update-wishlist',
            data: {
                'product_id': product_id
            },
            success: function(resp) {
                // alert(resp);
                if (resp.action == 'add') {
                    $('div[data-productid=' + product_id + ']').html(
                        '<i class="fad fa-heart-circle"></i>');
                } else if (resp.action == 'remove') {
                    $('div[data-productid=' + product_id + ']').html(
                        '<i class="far fa-heart"></i>');
                } else if (resp['error']) {
                    window.location = '/login'
                }
            },
            error: function() {
                alert('Error');
            }
        })
    });
</script>
