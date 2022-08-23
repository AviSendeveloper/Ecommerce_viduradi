<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\SaveLater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SaveLaterController extends Controller
{
    public function addSaveLater($cart_id) {
        $cartDetails = Cart::find($cart_id);

        $session_id = Session::get('session_id');
        if (empty($session_id)) {
            $session_id = Session::getId();
            Session::put('session_id', $session_id);
        }

        // Add to save later
        $saveLater = new SaveLater;
        $saveLater->cart_id = $cartDetails->id;
        $saveLater->session_id = Session::get('session_id');
        if (Auth::check()) {
            $saveLater->user_id = Auth::User()->id;
        }
        $saveLater->product_id = $cartDetails->product_id;
        $saveLater->size = $cartDetails->size;
        $saveLater->quantity = $cartDetails->quantity;
        $saveLater->save();

        // Delete from cart
        $cartDetails->delete();
        // $cartDetails->save();

        return redirect()->back();
    }

    public function addCart($save_id) {
        $saveItemDetails = SaveLater::find($save_id);

        $session_id = Session::get('session_id');
        if (empty($session_id)) {
            $session_id = Session::getId();
            Session::put('session_id', $session_id);
        }

        // Add to cart
        $cart = new Cart;
        $cart->session_id = Session::get('session_id');
        if (Auth::check()) {
            $cart->user_id = Auth::User()->id;
        }
        $cart->product_id = $saveItemDetails->product_id;
        $cart->size = $saveItemDetails->size;
        $cart->quantity = $saveItemDetails->quantity;
        $cart->save();

        // Delete from save later
        $saveItemDetails->delete();

        return redirect()->back();
    }
}
