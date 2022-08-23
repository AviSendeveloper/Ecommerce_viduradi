<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subscription;

class subscriptionController extends Controller
{
    public function adminSubscribers() {
    	$data = subscription::all();
    	return view('admin.admin-subscribers')->with(compact('data'));
    }
}
