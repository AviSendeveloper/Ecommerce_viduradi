<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpecialDiscount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SpecialDiscountController extends Controller
{
    public function specialDiscountList() {
        $SpecialDiscountes = SpecialDiscount::get();
        return view('admin.manage-special-discount')->with(compact('SpecialDiscountes'));
    }

    public function addSpecialDiscount() {
        return view('admin.add-special-discount');
    }

    public function addSpecialDiscountUpload(Request $request) {
        // return $request->all();
        $data = new SpecialDiscount;
        $data->minimum_price = $request->minimum_price;
        $data->discount = $request->discount;
        $data->status = $request->status;
        $data->save();
        $message = "New special discount added successfully";
        Session::flash('success', $message);
        return redirect('manage-special-discount');
    }

    public function editSpecialDiscount($special_discount_id) {
        $specialDiscount = SpecialDiscount::find($special_discount_id);
        return view('admin.edit-special-discount')->with(compact('specialDiscount'));
    }

    public function editSpecialDiscountUpload(Request $request) {
        // return $request->all();
        $data = SpecialDiscount::find($request->special_discount_id);
        $data->minimum_price = $request->minimum_price;
        $data->discount = $request->discount;
        $data->status = $request->status;
        $data->save();
        $message = "New special discount added successfully";
        Session::flash('success', $message);
        return redirect('/manage-special-discount');
    }

    public function changeSpecialDiscountStatus(Request $request) {
        $user = SpecialDiscount::find($request->special_discount_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function deleteSpecialDiscount($special_discount_id) {
        $data = SpecialDiscount::find($special_discount_id);
        $data->delete();
        $message = "Special discount deleted successfully";
        Session::flash('success', $message);
        return redirect('/manage-special-discount');
    }
}
