<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class WishlistController extends Controller
{
    public function updateWishlist(Request $request) {
        if ($request->ajax()) {
            if (Auth::check()) {
            $data = $request->all();
            // print "<pre>"; print_r($data); die;
            // return $data['product_id'];
            $productcount = Wishlist::countWishlist($data['product_id']);
            if ($productcount>0) {
                $product = Wishlist::where(['user_id'=>Auth::User()->id, 'product_id'=>$data['product_id']])->first();
                $product->delete();
                return response()->json(['status'=>true, 'action'=>'remove']);
            } else {
                $product = new Wishlist;
                $product->user_id = Auth::User()->id;
                $product->product_id = $data['product_id'];
                $product->save();
                return response()->json(['status'=>true, 'action'=>'add']);
            }
            }else {
                $message = "You have to login to add this product in wishlist";
                Session::flash('error', $message);
                $value = [
                    'product_id' => $request->product_id,
                ];
                Session::put('add_wishlist', $value);
                return response()->json( ['error'=>'Your custom message'] );
            }
        }
    }
      
    

    public function wishlists() {
        if (!Auth::check()) {
            return redirect()->back();
        }
        $wishlists = Wishlist::with('productDetails')->where('user_id', Auth::User()->id)->get();
        $wishlists = json_decode(json_encode($wishlists));
        // print "<pre>"; print_r($wishlists); die;
        return view('my-wishlist')->with(compact('wishlists'));
    }

    public function removeWishlistProduct(Request $request) {
        $data = $request->all();
        $product = Wishlist::find($request->wishlistid);
        $product->delete();
        $wishlists = Wishlist::with('productDetails')->where('user_id', Auth::User()->id)->get();
        $wishlists = json_decode(json_encode($wishlists));
        return response()->json(['status' => true, 'view' => (string)View::make('my-wishlist-products')->with(compact('wishlists'))]);
    }
}
