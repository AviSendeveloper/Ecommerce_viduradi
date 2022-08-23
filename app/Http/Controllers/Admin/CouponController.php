<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\coupon;
use App\Models\User;
use App\Models\Section;
use Illuminate\Support\Str;
use Session;

class CouponController extends Controller
{
    Public function adminCoupon() {
    	$coupons = coupon::get()->toArray();
    	return view('admin.admin-coupon')->with(compact('coupons'));
    }

    /*Public function addAdminCoupon() {
    	return view('admin.add-admin-coupon');
    }*/

    public function changeCouponStatus(Request $request) {
       $user = coupon::find($request->user_id);
       $user->status = $request->status;
       $user->save();
       return response()->json(['success'=>'Status change successfully.']);
    }

    public function addEditCoupon(Request $request,$id=null) {
        // $data = $request->all();
        // print "<pre>"; print_r($data); die;
        if ($id=="") {
            $title = "Add Coupon";
            $selCats = array();
            $selUsers = array();
            $coupon = new coupon;
            $message = "Coupon added successfully!!";
        }else{
            $title = "Edit Coupon";
            $coupon = coupon::where('id', $id)->first();
            $selCats = explode(',', $coupon['categories']);
            $selUsers = explode(',', $coupon['users']);
            // print "<pre>"; print_r($getCategories); die;
            $message = "Coupon Edited successfully!!";
        }
        // Section with categories and subcategories
        $categories = Section::with('categories')->get();
        $categories = json_decode(json_encode($categories), true);

        // Users
        	$users = User::select('email')->where('status', 1)->get()->toArray();

        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['coupon_option'] == "Manual") {              
                $coupon->coupon_code = $data['coupon_code'];
            } else {
                 $coupon->coupon_code = rand(0,99).chr(rand(65,90)).chr(rand(97,122)).rand(0,999);
                 
            }
            // echo "<pre>";print_r($datas);die;
            $coupon->coupon_option = $data['coupon_option'];
            $coupon->coupon_type = $data['coupon_type'];
            $coupon->ammount_type = $data['amount_type'];
            $coupon->ammount = $data['amount'];
            $coupon->users =  implode(',', $data['users']);
            $coupon->categories = implode(',', $data['categories']);
            $coupon->expiry_date = $data['expiry_date'];  
            $coupon->status = 1;     
            $coupon->save();  
            Session::flash('success', $message);
            return redirect('/admin-coupon');
        }

        return view('admin.add-admin-coupon')->with(compact('title','coupon','categories','users','selCats','selUsers'));
        
    }
    Public function deleteCoupon($id) {
        coupon::find($id)->delete();
        $message = "Coupon was deleted!!";
        Session::flash('error', $message);
        return redirect('/admin-coupon');

    }
}
