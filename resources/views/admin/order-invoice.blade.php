<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    body {
    background: #eee
}
</style>
<body>
    <div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Invoice</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Billed:</span><span class="ml-1">{{$userDetails['name']}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Phone:</span><span class="ml-1">{{$orderDetails['phone']}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">City:</span><span class="ml-1">{{$orderDetails['city']}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">State:</span><span class="ml-1">{{$orderDetails['state']}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Date:</span><span class="ml-1"> {{date('M d, Y', strtotime($orderDetails['created_at']))}}<span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Order ID:</span><span class="ml-1">#{{$orderDetails['id']}}</span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        <a href="/print-payment-invoice/{{$orderDetails['id']}}"><button class="btn btn-warning"><span>Print PDF</span></button></a>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                     <th>Size</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $totalprice = 0;  ?>
                                @foreach($orderDetails['orders_products'] as $orderDetail)
                                <tr>
                                    <td>{{$orderDetail['product_name']}}</td>
                                    <td>{{$orderDetail['product_qty']}}</td>
                                    <td>{{$orderDetail['product_size']}}</td>
                                    <td>{{$orderDetail['product_price']}}</td>
                                    <?php $totalprice = $totalprice + ($orderDetail['product_price']*$orderDetail['product_qty']); 

                                    ?>
                                    <td>{{$orderDetail['product_price']*$orderDetail['product_qty']}}</td>
                                </tr>
                               @endforeach
                               <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Sub Total</td>
                                    <td>{{$totalprice}}</td>
                                </tr>
                               @if(!empty($orderDetails['coupon_ammount']))
                               <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Coupon Ammount</td>
                                    <td>{{$orderDetails['coupon_ammount']}}</td>
                                </tr>
                                @endif
                                 @if(!empty($orderDetails['coupon_ammount']))
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Discount</td>
                                    <td>{{($totalprice+$orderDetails['coupon_ammount']) - $orderDetails['grand_total']}}</td>
                                </tr>
                                @else
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Discount</td>
                                    <td>{{$totalprice - $orderDetails['grand_total']}}</td>
                                </tr>
                                @endif
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Total</td>
                                    <td>{{$orderDetails['grand_total']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" type="button">Pay Now</button></div> -->
            </div>
        </div>
    </div>
</div>
</body>
</html>