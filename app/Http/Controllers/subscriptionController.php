<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscription;

class subscriptionController extends Controller
{
    public function subscribe(Request $request) {
    	$data = $request->all();
    	$count = subscription::where('email', $request->email)->count();
    	if ($count >= 1) {
    		return response()->json(['error'=>'You have already subscribe viduradi.com']);
    	} else {
    		// echo "<pre>";print_r($data);die;
	    	$subscribers = new subscription;
	    	$subscribers->email = $data['email'];
	    	$subscribers->save();
    	 	return response()->json(['success'=>'Now you are the subscribers of the viduradi.com']);
    	}
    }
}
