<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;

    public static function userCartItem() {
        if (Auth::check()) {
            $userCartItem = Cart::with(['product'=>function($query) {
                $query->select('id', 'product_name', 'product_code', 'main_image');
            }])->where('user_id', Auth::User()->id)->orderBy('id', 'DESC')->get()->toArray();
        } else {
            $userCartItem = Cart::with(['product'=>function($query) {
                $query->select('id', 'product_name', 'product_code', 'main_image');
            }])->where('session_id', Session::get('session_id'))->orderBy('id', 'DESC')->get()->toArray();
        }
        return $userCartItem;
    }

    public function product() {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public static function totalCartItem()
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $totalCartItems = cart::where('user_id',$user_id)->sum('quantity');
        } else {
            $session_id = Session::get('session_id');
            $totalCartItems = Cart::where('session_id',$session_id)->sum('quantity');
        }
        return $totalCartItems;
    }





   public static function userCartTotalPrice() {
        $userCartItem = Cart::userCartItem();
        $tax = Tax::where(['country'=>'India', 'status'=>1])->first();
        $total_amount = 0;
        $total_final_price = 0;
        $total_discount_price = 0;
        foreach ($userCartItem as $item) {
            $attrPrice = Product::getDiscountedAttrPrice($item['product_id'], $item['size']);
            $total_final_price = $total_final_price + ($attrPrice['final_price'] * $item['quantity']);
            $total_discount_price = $total_discount_price + ($attrPrice['discount_price'] * $item['quantity']);
            $total_amount = $total_amount + ($attrPrice['product_price'] * $item['quantity']);
        }
        if (isset($tax['igst'])) {
            $igst = round($total_final_price*($tax['igst']/100));
            $total_final_price = $total_final_price + ($total_final_price*($tax['igst']/100));
        } else {
            $igst = 0;
        }
        $specialDiscount = SpecialDiscount::where('minimum_price', '<=', $total_final_price)->where('status', 1)->first();
        if ($specialDiscount) {
            $total_final_price = $total_final_price - $specialDiscount->discount;
            $specialDiscount = $specialDiscount->discount;
        } else {
            $specialDiscount = 0;
        }
        $totalArr = [
            'total_final_price'=>round($total_final_price),
            'total_discount_price'=>$total_discount_price,
            'total_amount'=>$total_amount,
            'igst'=>$igst,
            'special_discount'=>$specialDiscount,
        ];
        return $totalArr;
    }
} 
