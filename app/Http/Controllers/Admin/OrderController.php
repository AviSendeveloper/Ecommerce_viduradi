<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\User;
use App\Models\orderlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function orderList() {
        $orderList = Order::with('orders_products')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.all-order')->with(compact('orderList'));
    }

    public function orderDetails($path, $id) {
        $orderDetails = Order::with('orders_products')->where('id', $id)->first()->toArray();
        $userDetails = User::where('id', $orderDetails['user_id'])->first()->toArray();
        $orderStatus = OrderStatus::where('status', 1)->get()->toArray();
        $orderLog = orderlog::where('order_id',$id)->orderBy('id','Desc')->get()->toArray();
        return view('admin.order-details')->with(compact('orderDetails', 'userDetails', 'orderStatus', 'path','orderLog'));
    }

    public function updateOrderStatus(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (empty($data['courier_name']) &&  empty($data['tracking_number']) && $data['status']=="Shipped") {
                $getResults = Order::pushOrder($data['order_id']);
                if (!isset($getResults['status']) || (isset($getResults['status']) && $getResults['status']=="false")) {
                   Session::flash('error', $getResults['message']);
                   return redirect()->back();
                } 
            }

            // Update order status
            Order::where('id', $data['order_id'])->update(['order_status' =>$data['status']]);
           
            // Update courier name and tracking number
            if (!empty($data['courier_name']) &&  !empty($data['tracking_number'])) {
                order::where('id', $data['order_id'])->update(['courier_name'=>$data['courier_name'], 'tracking_number'=>$data['tracking_number'], 'invoice'=>$data['invoice']]);
                session::flash('success', 'Order Status updated successfully!!');
            }

            // Update order log
            $log = New orderlog;
            $log->order_id = $data['order_id'];
            $log->order_status= $data['status'];
            $log->save();
            return redirect()->back();
        }
       
    }

    public function completedOrderList() {
        $orderList = Order::with('orders_products')->where('order_status', 'Completed')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.completed-order')->with(compact('orderList'));
    }

    public function pendingOrderList() {
        $orderList = Order::with('orders_products')->where('order_status', 'Pending')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.pending-order')->with(compact('orderList'));
    }

    public function declinedOrderList() {
        $orderList = Order::with('orders_products')->where('order_status', 'Cancel')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.declined-order')->with(compact('orderList'));
    }

    public function refundOrderList() {
        $orderList = Order::with('orders_products')->where('order_status', 'Refund')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.refund-order')->with(compact('orderList'));
    }
}
