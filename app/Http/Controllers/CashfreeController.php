<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CashfreeController extends Controller
{
    public function __construct()
    {
        $this->APP_ID = "15686145334498e2533f156851168651";
        $this->SECRET_KEY = "debdd2259b78dd6e6cc9e707731e30d9fba02022";
    }

    function index()
    {
        return View('cashfree_payment_gateway');
    }

    function orderPost(Request $request)
    {
        $this->validate($request, [
            'customerName' => 'required',
            'customerPhone' => 'required',
            'customerEmail' => 'required|email',
            'amount' => 'required|numeric',
        ]);

        $customerName = $request->customerName;
        $customerPhone = $request->customerPhone;
        $customerEmail = $request->customerEmail;
        $amount = $request->amount;

        $orderId = Session::get('order_id');
        $secretKey =  $this->SECRET_KEY;

        $postData = array(
            "appId" => $this->APP_ID,
            "orderId" => $orderId,
            "orderAmount" => $amount,
            "orderCurrency" => 'INR',
            "orderNote" => 'Wallet',
            "customerName" => $customerName,
            "customerPhone" => $customerPhone,
            "customerEmail" => $customerEmail,
            "returnUrl" => url('response'),
            "notifyUrl" => url('notify-url'),
            'secretKey' => $secretKey,
        );

        return view('cashfree_confirmation')->with($postData);
    }

    function response(Request $request)
    {
        // print "<pre>"; print_r($request->all()); die;
        $orderId = $request->orderId;
        $orderAmount = $request->orderAmount;
        $referenceId = $request->referenceId;
        $txStatus = $request->txStatus;
        $paymentMode = $request->paymentMode;
        $txMsg = $request->txMsg;
        $txTime = $request->txTime;
        $signature = $request->signature;
        $secretkey = $this->SECRET_KEY;
        $data = $orderId . $orderAmount . $referenceId . $txStatus . $paymentMode . $txMsg . $txTime;
        $hash_hmac = hash_hmac('sha256', $data, $secretkey, true);
        $computedSignature = base64_encode($hash_hmac);
        if ($signature == $computedSignature) {
            if ($txStatus == 'SUCCESS') {
                // success query
                $payment = new Payment;
                $payment->transaction_id = $referenceId;
                $payment->order_id = Session::get('order_id');
                $payment->fee = "Free";
                $payment->payment_method = "Cashfree";
                $payment->total_ammount = Session::get('GrandTotal');
                $payment->save();
                return redirect('/thanks');
            } else {
                // rejected query
                return redirect('cashfree-payment-gateway')->with('errorMessage', 'Payment failure');
            }
        } else {
            return redirect('cashfree-payment-gateway')->with('errorMessage', 'Signature not match');
        }
    }
}
