<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use Razorpay\Api\Api;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Redirect;
use App\Models\PaytmSetting;
use App\Models\RazorpaySetting;

class PaymentController extends Controller
{
  /**
   * Redirect the user to the Payment Gateway.
   *
   * @return Response
   */
  public function __construct()
  {
    $razorpay = RazorpaySetting::firstOrFail();
    $paytm = PaytmSetting::firstOrFail();
    Config::set('services.razorpay.key', $razorpay->key);
    Config::set('services.razorpay.secret', $razorpay->secret);
    // Paytm
    Config::set('services.paytm-wallet.env', $paytm->environment);
    Config::set('services.paytm-wallet.merchant_id', $paytm->merchant_id);
    Config::set('services.paytm-wallet.merchant_key', $paytm->merchant_key);
    Config::set('services.paytm-wallet.merchant_website', $paytm->merchant_website);
    Config::set('services.paytm-wallet.channel', $paytm->channel);
    Config::set('services.paytm-wallet.industry_type', $paytm->industry_type);
  }


  public function paytmPayment(Request $request)
  {
    $payment = PaytmWallet::with('receive');
    $payment->prepare([
      'order' => rand(),
      'user' => Auth::user()->id,
      'mobile_number' => 'Auth::user()->phone',
      'email' => 'Auth::user()->email',
      'amount' => Session::get('GrandTotal'),
      'callback_url' => route('paytm.callback'),
    ]);
    return $payment->receive();
  }


  /**
   * Obtain the payment information.
   *
   * @return Object
   */
  public function paytmCallback()
  {
    $transaction = PaytmWallet::with('receive');

    $response = $transaction->response(); // To get raw response as array
    //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm

    if ($transaction->isSuccessful()) {
      //Transaction Successful

      $payment = new Payment;
      $payment->transaction_id = $transaction->getTransactionId();;
      $payment->order_id = Session::get('order_id');
      $payment->fee = "Free";
      $payment->payment_method = "Paytm";
      $payment->total_ammount = Session::get('GrandTotal');
      $payment->save();
      return redirect('/thanks');
    } else if ($transaction->isFailed()) {
      //Transaction Failed
      return view('paytm.paytm-fail');
    } else if ($transaction->isOpen()) {
      //Transaction Open/Processing
      return view('paytm.paytm-fail');
    }
    $transaction->getResponseMessage(); //Get Response Message If Available
    //get important parameters via public methods
    $transaction->getOrderId(); // Get order id
    $transaction->getTransactionId(); // Get transaction id
  }

  /**
   * Paytm Payment Page
   *
   * @return Object
   */
  public function paytmPurchase()
  {
    return view('paytm.payment-page');
  }

  public function index()
  {
    if (Session::has('order_id')) {
      //empty the user cart
      $orderDetails = Order::where('id', Session::get('order_id'))->first()->toArray();
      return view('razorpayView')->with(compact('orderDetails'));
    } else {
      return redirect('/cart');
    }
  }

  /**
   * Write code on Method
   *
   * @return response()
   */
  public function store(Request $request)
  {
    $input = $request->all();

    $api = new Api(Config('services.razorpay.key'), Config('services.razorpay.secret'));

    $payment = $api->payment->fetch($input['razorpay_payment_id']);

    if (count($input)  && !empty($input['razorpay_payment_id'])) {
      try {
        $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
      } catch (Exception $e) {
        return  $e->getMessage();
        Session::put('error', $e->getMessage());
        return redirect()->back();
      }
    }

    $payment = new Payment;
    $payment->transaction_id = $input['razorpay_payment_id'];
    $payment->order_id = Session::get('order_id');
    $payment->fee = "Free";
    $payment->payment_method = "Razorpay";
    $payment->total_ammount = Session::get('GrandTotal');
    $payment->save();
    return redirect('/thanks');
  }


  public function success()
  {
    if (Session::has('session_id')) {
      //empty the user cart
      $order_id = Session::get('order_id');
      //echo "<pre>"; print_r($order_id); die;
      $orderDetails = Order::with('orders_products')->where('id', $order_id)->first()->toArray();

      // //send order Email
      // $email = Auth::user()->email;
      // $messageData = [
      //             'email' => $email,
      //             'name'  => Auth::user()->name,
      //             'order_id' => $order_id,
      //             'orderDetails'=> $orderDetails,
      //     ]; 
      //     Mail::send('order-email',$messageData,function($message) use($email){
      //       $message->to($email)->subject('Order placed in viduradi.com');
      //     });
      Cart::where('user_id', Auth::user()->id)->delete();
      return view('thanks');
    } else {
      return redirect('/cart');
    }
  }
}
