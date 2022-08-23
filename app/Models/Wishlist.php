<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Model
{
    use HasFactory;

    public static function countWishlist($product_id) {
        if (Auth::check()) {
            $countWishlist = Wishlist::where(['user_id'=>Auth::User()->id, 'product_id'=>$product_id])->count();
            return $countWishlist;
        }
        
    }

    public function productDetails() {
        return $this->belongsTo('App\Models\Product', 'product_id')->with('category');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\category', 'category_id');
    }

    public static function countProduct() {
        if (Auth::check()) {
            $countProduct = Wishlist::where('user_id', Auth::User()->id)->count();
            return $countProduct;
        }
    }
}
