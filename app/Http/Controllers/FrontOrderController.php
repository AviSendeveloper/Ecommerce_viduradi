<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\orderlog;

class FrontOrderController extends Controller
{
    public function Order(Request $request) {
        if (Auth::check()) {
            if ($request->ajax()) {
                if ($request->sort == "cancel_order") {
                    $orders = Order::where('user_id', Auth::user()->id)->where('order_status', 'Cancel')->orderBy('id','DESC')->get()->toArray();
                    return view('ajax-order')->with(compact('orders'));
                }else if ($request->sort == "shipped_order") {
                    $orders = Order::where('user_id', Auth::user()->id)->where('order_status', 'Shipped')->orderBy('id','DESC')->get()->toArray();
                    return view('ajax-order')->with(compact('orders'));
                }else if ($request->sort == "delivered_order") {
                    $orders = Order::where('user_id', Auth::user()->id)->where('order_status', 'Delivered')->orderBy('id','DESC')->get()->toArray();
                    return view('ajax-order')->with(compact('orders'));
                }else{
                    $orders = Order::where('user_id', Auth::user()->id)->where('order_status', 'New')->orderBy('id','DESC')->get()->toArray();
                    return view('ajax-order')->with(compact('orders'));
                }
            }else{
                $orders = Order::where('user_id', Auth::user()->id)->orderBy('id','DESC')->get()->toArray();
                return view('order')->with(compact('orders'));
            }
        } else {
            return redirect('/login');
        }
    }

    public function OrderTracking($id) {
        $orders = Order::with('orders_products')->where('id', $id)->orderBy('id','DESC')->first();
        return view('tracking')->with(compact('orders'));
    }

    public function cancelOrder($id) {
        $orders = Order::with('orders_products')->where('id', $id)->orderBy('id','DESC')->first();
        return view('cancellation')->with(compact('orders'));
    }

    Public function cancelReasonSubmit(Request $request) {
        
        // Get user id from auth
        $user_id = Auth::user()->id;
        // Get user id from order
        $user_id_order = Order::select('user_id')->where('id', $request->id)->first();

        if ($user_id == $user_id_order->user_id) {
            $data = Order::find($request->id);
         $data->order_status = "Cancel";
         $data->cancel_reason = $request->fav_language;
         $data->save();

         $log= new orderlog;
         $log->order_id = $request->id;
         $log->order_status = 'Cancel';
         $log->save();
         return redirect('/order-tracking/'.$request->id);
        }else{
            return redirect('/order');
        }
    }
}