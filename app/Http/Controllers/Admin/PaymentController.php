<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Order;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Session; 

class PaymentController extends Controller
{
    public function orderPayment() {
    	return view('admin.order-payment');
    }

    public function deletePayment($id) {
    	Payment::find($id)->delete();
    	$message = "Payment is delete by you!!!";
    	Session::flash('error', $message);
    	return redirect('/order-payment');
    }

    public function viewPaymentInvoice($order_id) {
    	$orderDetails = Order::with('orders_products')->where('id', $order_id)->first()->toArray();
    	$userDetails = User::where('id', $orderDetails['user_id'])->first()->toArray();
    	// echo "<pre>";print_r($orderDetails);die;

    	return view('admin.order-invoice')->with(compact('orderDetails','userDetails'));
    }

    public function printPaymentInvoice($order_id) {
    	$orderDetails = Order::with('orders_products')->where('id', $order_id)->first()->toArray();
    	$userDetails = User::where('id', $orderDetails['user_id'])->first()->toArray();
    	// echo "<pre>";print_r($orderDetails);die;
    		 $output= '<html>
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
			                        <div class="billed"><span class="font-weight-bold text-uppercase">Billed:</span><span class="ml-1">'.$userDetails['name'].'</span></div>
			                        <div class="billed"><span class="font-weight-bold text-uppercase">Phone:</span><span class="ml-1">'.$orderDetails['phone'].'</span></div>
			                        <div class="billed"><span class="font-weight-bold text-uppercase">City:</span><span class="ml-1">'.$orderDetails['city'].'</span></div>
			                        <div class="billed"><span class="font-weight-bold text-uppercase">State:</span><span class="ml-1">'.$orderDetails['state'].'</span></div>
			                        <div class="billed"><span class="font-weight-bold text-uppercase">Date:</span><span class="ml-1"> '.date('M d, Y', strtotime($orderDetails['created_at'])).'<span></div>
			                        <div class="billed"><span class="font-weight-bold text-uppercase">Order ID:</span><span class="ml-1">#'. $orderDetails['id'].'</span></div>
			                    </div>
			                    <div class="col-md-6 text-right mt-3">
			                        <h4 class="text-danger mb-0">Piyanka Chopra</h4><span>Viduradi.com</span>
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
			                            <tbody>';
                                $totalprice = 0; 
                                foreach($orderDetails['orders_products'] as $orderDetail){
                                $totalprice = $totalprice + ($orderDetail['product_price']*$orderDetail['product_qty']); 
                                $output.= '<tr>
                                    <td>'.$orderDetail['product_name'].'</td>
                                    <td>'.$orderDetail['product_qty'].'</td>
                                    <td>'.$orderDetail['product_size'].'</td>
                                    <td>'.$orderDetail['product_price'].'</td>
                                    
                                    <td>'.$orderDetail['product_price']*$orderDetail['product_qty'].'</td>
                                </tr>';
                               }
                               $output.='<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Sub Total</td>
                                    <td>'.$totalprice.'</td>
                                </tr>';
                               if(!empty($orderDetails['coupon_ammount'])){
                               $output.='<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Coupon Ammount</td>
                                    <td>'.$orderDetails['coupon_ammount'].'</td>
                                </tr>';
                                }
                                 if(!empty($orderDetails['coupon_ammount'])){
                                 $output.='<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Discount</td>
                                    <td>'.($totalprice+$orderDetails['coupon_ammount']) - $orderDetails['grand_total'].'</td>
                                </tr>';
                                }else{
                                $output.='<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Discount</td>
                                    <td>'.$totalprice - $orderDetails['grand_total'].'</td>
			                                </tr>';
			                               }
			                                   $output.='<tr>
			                                    <td></td>
			                                    <td></td>
			                                    <td></td>
			                                    <td>Total</td>
			                                    <td>'.$orderDetails['grand_total'].'</td>
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
			</html>';

    		// instantiate and use the dompdf class
                    $dompdf = new Dompdf();
                    $dompdf->loadHtml($output);

                    // (Optional) Setup the paper size and orientation
                    $dompdf->setPaper('A3', 'portrait');

                    // Render the HTML as PDF
                    $dompdf->render();

                    // Output the generated PDF to Browser
                    $dompdf->stream();

    	return view('admin.order-invoice')->with(compact('orderDetails','userDetails'));
    }
}
