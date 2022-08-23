<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentSetting;
use App\Models\PaytmSetting;
use App\Models\RazorpaySetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PaymentSettingController extends Controller
{
    public function paymentGatewayList() {
        // return Config('services.paytm-wallet.merchant_id');
        $getways = PaymentSetting::get();
        return view('admin.payment-setting')->with(compact('getways'));
    }

    public function changeStatus(Request $request)
    {
        $user = PaymentSetting::find($request->gatway_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function editPaymentGateway($gateway_name, $id) {
        // return $gatway_name;
        // Razorpay
        if ($gateway_name == 'razorpay') {
            $gateway_details = RazorpaySetting::first();
            return view('admin.edit-razorpay-setting')->with(compact('gateway_details', 'id'));
        }
        // Paytm
        if ($gateway_name == 'paytm') {
            $gateway_details = PaytmSetting::first();
            return view('admin.edit-paytm-setting')->with(compact('gateway_details', 'id'));
        }
    }

    public function editPaymentGatewayUpload(Request $request) {
        $gateway_name = $request->gateway_name;
        // Razorpay
        if ($gateway_name == 'razorpay') {
            $data = RazorpaySetting::find($request->id);
            $data->name = $request->name;
            $data->key = $request->key;
            $data->secret = $request->secret;
            $data->save();
            $paymentSetting = PaymentSetting::find($request->payment_setting_id);
            $paymentSetting->name = $request->name;
            $paymentSetting->save();
            return redirect('/payment-getway-setting');
        }
        // Paytm
        if ($gateway_name == 'paytm') {
            $data = PaytmSetting::find($request->id);
            $data->name = $request->name;
            $data->environment = $request->environment;
            $data->marchant_id = $request->marchant_id;
            $data->marchant_key = $request->marchant_key;
            $data->marchant_website = $request->marchant_website;
            $data->channel = $request->channel;
            $data->industry_type = $request->industry_type;
            $data->save();
            $paymentSetting = PaymentSetting::find($request->payment_setting_id);
            $paymentSetting->name = $request->name;
            $paymentSetting->save();
            return redirect('/payment-getway-setting');
        }
    }
}
