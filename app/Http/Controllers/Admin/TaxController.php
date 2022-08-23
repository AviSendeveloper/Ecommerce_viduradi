<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaxController extends Controller
{
    public function taxList() {
        $taxes = Tax::get();
        return view('admin.manage-tax')->with(compact('taxes'));
    }

    public function addTax() {
        return view('admin.add-tax');
    }

    public function addTaxUpload(Request $request) {
        // return $request->all();
        $data = new Tax;
        $data->country = $request->country;
        $data->cgst = $request->cgst;
        $data->sgst = $request->sgst;
        $data->igst = $request->igst;
        $data->apply_tax = $request->apply_tax;
        $data->status = $request->status;
        $data->save();
        $message = "New Tax added successfully";
        Session::flash('success', $message);
        return redirect('manage-tax');
    }

    public function editTax($tax_id) {
        $tax = Tax::find($tax_id);
        return view('admin.edit-tax')->with(compact('tax'));
    }

    public function editTaxUpload(Request $request) {
        // return $request->all();
        $data = Tax::find($request->tax_id);
        $data->country = $request->country;
        $data->cgst = $request->cgst;
        $data->sgst = $request->sgst;
        $data->igst = $request->igst;
        $data->apply_tax = $request->apply_tax;
        $data->status = $request->status;
        $data->save();
        $message = "New Tax added successfully";
        Session::flash('success', $message);
        return redirect('/manage-tax');
    }

    public function changeTaxStatus(Request $request) {
        $user = Tax::find($request->tax_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function deleteTax($tax_id) {
        $data = Tax::find($tax_id);
        $data->delete();
        return redirect('/manage-tax');
    }
}
