<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class DeliverAddress extends Model
{
    use HasFactory;
    protected $table = 'delivery_addresses';
    
    public static function DeliverAddress() {
    	if (Auth::check()) {
    		$DeliverAddress = DeliverAddress::where('user_id', Auth::user()->id)->get();
    		// echo "<pre>";print_r($DeliverAddress);die;
    		return $DeliverAddress;
    	}
    }
}
