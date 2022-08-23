<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function deleteCustomer($id) {
    	$data = User::find($id);
    	$data->delete();
    	 $message = "Customer was deleted by admin";
         session::flash('error', $message);
    	return redirect()->back();
    }

    Public function sendMessageToCustomer(Request $request) {
    	 // return $request->all();
    	 $data = User::where('email', $request->to)->first();
     	$email = $request->to;
    	$subject = $request->subject;
    	$ss = $request->message;
    	$massageData = [
    					'name' =>$data['name'],
                        'email' =>$email ,
                        'subject' => $subject,
                        'ss' => $ss
                    ];
                Mail::send('email.message-customer', $massageData, function($message) use($email,$subject) {
                    $message->to($email)->subject($subject);
                });
          return redirect()->back();
            }

    Public function AddDP(Request $request) {

       $user = User::all();
       foreach ($user as  $user) {
           $dp = $user->dp;
           if ($dp == null) {
                if($request->hasfile('dp')) {
                $file = $request->file('dp');
                $fileFirstName = $file->getClientOriginalName();
                $filename = time() ."-". $fileFirstName;
                $file->move('profiles/dp/', $filename );
                $user->dp = $filename;
            }
            $user->save();
            $message = "DP was uploaded!!";
            Session::flash('success', $message);
            return redirect()->back();
           } else {
            $message = "Everyone upload his/her DP!!";
            Session::flash('error', $message);
            return redirect()->back();
           }
       }
       
    }
}
