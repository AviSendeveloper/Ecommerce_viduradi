<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('user/assets/css/banner.css')}}">
    
        <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/vendor/vendor.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/plugins/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/header/assets/css/responsive.min.css')}}">
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
    @include('section.header')
    <div class="cart ">
        <?php // Session::forget('couponAmount'); ?>
        {{-- {{ Session::get('couponAmount')}} --}}
        <div class="container-fluid">
            <div id="AppendCartItems">
                @include('cart_item')
            </div>
            {{-- <div class="announcement">
                <div class="coupon">
                    <form id="ApplyCoupon" action="javascript:void(0)" method="post" @if (Auth::check()) user="1" @endif>
                        @csrf
                        <input type="text" name="code" id="code" value="" placeholder="Enter Coupon Code" required />
                        <div class="tooltip">
                            <button type='submit'>
                                Apply
                            </button>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>

    </div>


    @include('section.footer')
    {{-- New script for quantity --}}
    <script>
        $(document).on('click', '.btnItemUpdate', function() {

            if ($(this).hasClass('qtyMinus')) {
                //if qtyMinus button click by user
                var quantity = $(this).next().val();
                if (quantity <= 1) {
                    alert("Item quantity must be 1 or graeter!");
                    return false;
                } else {
                    new_qty = parseInt(quantity) - 1;
                }

            }
            if ($(this).hasClass('qtyPlus')) {
                //if qtyPlus button click by user 
                var quantity = $(this).prev().val();
                new_qty = parseInt(quantity) + 1;
                // alert(new_qty);
                // return false;

            }
            var cartid = $(this).data('cartid');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    "cartid": cartid,
                    "qty": new_qty
                },
                url: '/update-cart-item-qty',
                type: 'post',
                success: function(resp) {
                    // alert(resp.couponAmount);
                    if (resp.status == false) {
                        alert(resp['message']);
                    }
                    $("#AppendCartItems").html(resp.view);
                },
                error: function() {
                    alert('Error');
                },
            });
        });
    </script>

    <script>
        $(document).on('click', '.removeItem', function() {

            var cartid = $(this).data('cartid');
            // alert(cartid);
            // return false;

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'get',
                url: '/delete-cart-item',
                dataType: "json",
                data: {
                    "cartid": cartid
                },
                success: function(resp) {
                    // alert(resp);
                    if (resp.status == false) {
                        alert(resp.massage);
                    }
                    $("#AppendCartItems").html(resp.view);
                },
                error: function() {
                    alert('Error');
                },
            });
        });
    </script>

    {{-- Coupon --}}
    <script type="text/javascript">
        $("#ApplyCoupon").submit(function() {
            var user = $(this).attr("user");
            if (user == 1) {
                //do nothing
            } else {
                alert("Please login to Apply Coupon!!");
                return false;
            }
            var code = $("#code").val();
            // alert(code);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                data: {
                    code: code
                },
                url: '/apply-coupon',
                success: function(resp) {
                    // alert(resp);
                    // alert(resp.couponAmount);
                    if (resp.message != "") {
                        alert(resp.message);
                    }
                    $(".totalCartItems").html(resp.totalCartItems);
                    $("#AppendCartItems").html(resp.view);
                    if (resp.couponAmount >= 0) {
                        $(".couponAmount").text("₹" + resp.couponAmount);
                    } else {
                        $(".couponAmount").text("₹0");
                    }
                    // if (resp.grand_total >= 0) {
                    //     $(".grand_total").text("₹" + resp.grand_total);
                    //     $(".igst").text("₹" + resp.igst)
                    // }

                },
                error: function() {
                    alert("alert");
                }
            });
        });
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
