<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;

class RoleController extends Controller
{
    public function createRole(Request $request) {
        // return $request->all();
        $data = new admin;
  
          $data->name  =  $request->name;
          $data->email  =  $request->email;
          $data->status  =  1;
          $data->password =  bcrypt($request->password);
          $data->orders  =  $request->orders;
          $data->products  =  $request->products;
          $data->customers  =  $request->customers;
          $data->categories  =  $request->categories;
          $data->bulk_product_upload  =  $request->bulk_product_upload;
          $data->set_coupons  =  $request->set_coupons;
          $data->blog  =  $request->blog;
          $data->messages  =  $request->messages;
          $data->general_settings  =  $request->general_settings;
          $data->payment_settings  =  $request->payment_settings;
          $data->manage_staffs  =  $request->manage_staffs;
          $data->subscribers  =  $request->subscribers;
          $data->save();
          return redirect('/manage-roles');
      }
  
      public function editRole($id){
        $data = admin::find($id);
        return view('admin.edit-role')->with(compact('data'));
      }
  
  public function deleteRole($id){
        $data = admin::find($id);
        $data->delete();
        return redirect()->back();
      }
  
  
      public function editRoleSubmit(Request $request) {
        // return $request->all();
       $data = admin::where('email', $request->email)->first();
  
        if ($request->user_type=='admin') {
         $data->user_type = $request->user_type;
        }
          $data->status  =  1;
          $data->orders  =  $request->orders;
          $data->products  =  $request->products;
          $data->customers  =  $request->customers;
          $data->categories  =  $request->categories;
          $data->bulk_product_upload  =  $request->bulk_product_upload;
          $data->set_coupons  =  $request->set_coupons;
          $data->blog  =  $request->blog;
          $data->messages  =  $request->messages;
          $data->general_settings  =  $request->general_settings;
          $data->payment_settings  =  $request->payment_settings;
          $data->manage_staffs  =  $request->manage_staffs;
          $data->subscribers  =  $request->subscribers;
          $data->save();
          return redirect('/manage-roles');
      }
}
