<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingCharges;
class ShippingController extends Controller
{
    public function shippingCharges() {
        $data = ShippingCharges::get()->toArray();
        return view('admin.shipping-charges')->with(compact('data'));
    }

    public function shippingChargesStatus(Request $request) {
        $user = ShippingCharges::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
     }

     public function addCharges(Request $request) {
        $data = new ShippingCharges;
        $data->country = $request->country;
        $data->shipping_charges = $request->shipping_charges;
        $data->status = 1;
        $data->save();
        return redirect()->back();
     }
     public function deleteCharges($id) {
        ShippingCharges::find($id)->delete();
        return redirect()->back();
     }
     
     public function editCharges($id) {
        $data = ShippingCharges::find($id)->first()->toArray();
        // dd($data);die;
        return view('admin.edit-shipping-charges')->with(compact('data'));
     }

     public function updateCharges(Request $request) {
        //  return $request->all();
        ShippingCharges::where('id', $request->id)->update(['country'=>$request->country, 'shipping_charges'=>$request->shipping_charges]); 
        return redirect('/shipping-charges');
    }
}
