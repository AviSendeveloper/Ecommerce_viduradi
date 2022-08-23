<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orders_products()
    {
        return $this->hasMany('App\Models\OrderProduct', 'order_id');
    }

    public function orders_items()
    {
        return $this->hasMany('App\Models\OrderProduct', 'order_id');
    }

    public static function pushOrder($order_id)
    {
        $order_details = Order::with('orders_items')->where('id', $order_id)->first()->toArray();
        // dd($order_details);die;
        $order_details['order_id'] = $order_details['id'];
        $order_details['order_date'] = $order_details['created_at'];
        $order_details['pickup_location'] = "Kolkata";
        $order_details['channel_id'] = "2678095";
        $order_details['comment'] = "Test Order";
        $order_details['billing_customer_name'] = $order_details['name'];
        $order_details['billing_last_name'] = "";
        $order_details['billing_address'] = $order_details['address'];
        $order_details['billing_address_2'] = $order_details['address'];
        $order_details['billing_city'] = $order_details['city'];
        $order_details['billing_pincode'] = $order_details['pincode'];
        $order_details['billing_state'] = $order_details['state'];
        $order_details['billing_country'] = "India";
        $order_details['billing_email'] = $order_details['email'];
        $order_details['billing_phone'] = $order_details['phone'];
        $order_details['shipping_is_billing'] = true;
        $order_details['shipping_customer_name'] = $order_details['name'];
        $order_details['shipping_last_name'] = "";
        $order_details['shipping_address'] = $order_details['address'];
        $order_details['shipping_address_2'] = $order_details['address'];
        $order_details['shipping_city'] = $order_details['city'];
        $order_details['shipping_pincode'] = $order_details['pincode'];
        $order_details['shipping_country'] = "India";
        $order_details['shipping_state'] = $order_details['state'];
        $order_details['shipping_email'] = $order_details['email'];
        $order_details['shipping_phone'] = $order_details['phone'];
        foreach ($order_details['orders_items'] as $key => $item) {
            $order_details['order_items'][$key]['name'] = $item['product_name'];
            $order_details['order_items'][$key]['sku'] = rand(0, 99999) . $item['product_id'];
            $order_details['order_items'][$key]['units'] = $item['product_qty'];
            $order_details['order_items'][$key]['selling_price'] = $item['product_price'];
            $order_details['order_items'][$key]['discount'] = "";
            $order_details['order_items'][$key]['tax'] = "";
            $order_details['order_items'][$key]['hsn'] = "";
        }
        $order_details['payment_method'] = $order_details['payment_method'];
        $order_details['shipping_charges'] = 1;
        $order_details['giftwrap_charges'] = 1;
        $order_details['transaction_charges'] = 1;
        $order_details['total_discount'] = 1;
        $order_details['sub_total'] = $order_details['grand_total'];
        $order_details['length'] = 1;
        $order_details['breadth'] = 1;
        $order_details['height'] = 1;
        $order_details['weight'] = 1;

        $order_details = json_encode($order_details);
        // echo"<pre>"; print_r(json_encode($order_details));die;
        // Genarate Access Token
        $c = curl_init();
        $url = "https://apiv2.shiprocket.in/v1/external/auth/login";
        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_POST, 1);
        curl_setopt($c, CURLOPT_POSTFIELDS, "email=pfswarnadwip@yopmail.com&password=12345678");
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        $server_output = curl_exec($c);
        curl_close($c);
        $server_output = json_decode($server_output, true);
        // echo"<pre>"; print_r(json_encode($server_output));die;

        // Create order in shiprocket
        $url = "https://apiv2.shiprocket.in/v1/external/orders/create/adhoc";
        $c = curl_init($url);
        curl_setopt($c, CURLOPT_POST, 1);
        curl_setopt($c, CURLOPT_POSTFIELDS, $order_details);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization:Bearer' . $server_output['token'] . ''));
        $result = curl_exec($c);
        curl_close($c);
        $result = json_decode($result, true);
        // print_r($result);die;
        if (isset($result['status_code']) && $result['status_code'] == 1) {
            Order::where('id', $order_id)->update(['is_pushed' => 1]);
            $status = "true";
            $message = "Order Successfully pushed to ShipRocket. Please contact to admin";
            // print_r($message);die;
        } else {
            $status = "false";
            $message = "Order not pushed to shiprocket. Please contact to admin";
        }
        return array('status' => $status, 'message' => $message);
    }

    public static function AllOrder(){
        $AllOrder = Order::count();
        return $AllOrder;
    }

    public static function PendingOrder(){
        $PendingOrder = Order::where('order_status', 'Pending')->count();
        return $PendingOrder;
    }

    public static function CancelOrder(){
        $CancelOrder = Order::where('order_status', 'Cancel')->count();
        return $CancelOrder;
    }

    public static function ThirtyDaysOrder(){
        $ThirtyDaysOrder = Order::where('created_at','>',now()->subDays(30)->endOfDay())->count();
        return $ThirtyDaysOrder;
    }
}
