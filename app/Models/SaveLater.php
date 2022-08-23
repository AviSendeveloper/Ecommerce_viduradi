<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SaveLater extends Model
{
    use HasFactory;

    public static function movedItem() {
        if (Auth::check()) {
            $movedItem = SaveLater::with(['product'=>function($query) {
                $query->select('id', 'product_name', 'product_code', 'main_image');
            }])->where('user_id', Auth::User()->id)->orderBy('id', 'DESC')->get()->toArray();
        } else {
            $movedItem = SaveLater::with(['product'=>function($query) {
                $query->select('id', 'product_name', 'product_code', 'main_image');
            }])->where('session_id', Session::get('session_id'))->orderBy('id', 'DESC')->get()->toArray();
        }
        return $movedItem;
    }

    public function product() {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public static function totalMovedItem()
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $totalMovedItem = SaveLater::where('user_id',$user_id)->sum('quantity');
        } else {
            $session_id = Session::get('session_id');
            $totalMovedItem = SaveLater::where('session_id',$session_id)->sum('quantity');
        }
        return $totalMovedItem;
    }
}
