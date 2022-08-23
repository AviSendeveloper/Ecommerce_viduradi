<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function registerUpload(Request $request) {
        $email = $request->email;
       $password = $request->password;
       $check = admin::where('email', $email)->first();
       if ($check) {
           $message = "You are already register";
           session::flash('error', $message);
           return redirect('admin-register');
       }else {
           $data = new admin;
           $data->name = $request->name;
           $data->email = $email;
           $data->password = bcrypt($password);
           $data->status = 0;
           $data->save();
           $message = "You are successfully register";
           session::flash('error', $message);
           return redirect('admin-login');
       }
   }

   public function loginCheck(Request $request) {
       if ($request->isMethod('post')) {
           $data = $request->all();
           if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
               //check email is activate or not
               $UserStatus = admin::where('email',$data['email'])->first();
               if ($UserStatus->status==0) {
                   Auth::logout();
                   $message = "Your Account Is not activated yet!! Plese Confirmyour email for activate!";
                   session::put('error',$message);
                   return redirect()->back();
               }
               // print Auth::guard('admin')->user()->id;die;
               return redirect('/dashboard');  
           }else {
               $message= "Invalid User or Password";
               Session::flash('success',$message);
               return redirect()->back();
           }
       }
       
   }

   public function logout()
   {
       Auth::guard('admin')->logout();
       return redirect('/admin-login');
   }
}
