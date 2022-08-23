<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\brands;
use Session;

class BrandController extends Controller
{
    public function brands()
    {
    	$brand = brands::get();
    	return view('admin.brands')->with(compact('brand'));
    }

    public function changeBrandsStatus(Request $request)
    {
    	$brands = brands::find($request->brands_id);
       $brands->status = $request->status;
       $brands->save();
       return response()->json(['success'=>'Status change successfully.']);

    }

    public function addEditBrand(Request $request, $id=null) {

    	if ($id=="") {
    		$title = "Add Brand";
    		$brand = new brands;
    		$message = "Brand added successfully!!";
    	}else{
    		$title = "Edit Brand";
    		$brand = brands::find($id);
    		$message = "Brand updated successfully!";
    	}

    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		// echo "<pre>";print_r($data);die;
    		$brand->name = $request->name;
    		$brand->status = 1;
    		$brand->save();
    		Session::flash('success',$message);
    		return redirect('/brands');
    	}
    	return view('admin.add-edit-brand')->with(compact('title','brand'));

    }

    Public function deleteBrands($id) {
    	brands::find($id)->delete();
    	$message = "Brand deleted successfully!";
    	return redirect()->back();
    }
}
