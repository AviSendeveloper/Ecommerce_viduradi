<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserProfileController extends Controller
{
    public function submitProfile(Request $request) {
    	// return $request->hasfile('dp');
    	$data = User::find(Auth::user()->id);
    	
    	$data->name = $request->name;
    	$data->gender = $request->gender;
    	$data->email = $request->email;
    	$data->phone = $request->phone;
    	 if($request->hasfile('image')) {
                $file = $request->file('image');
                $fileFirstName = $file->getClientOriginalName();
                $filename = time() ."-". $fileFirstName;
                $file->move('profiles/dp/', $filename );
                $data ->dp = $filename;
            }
        $data->save();
        return redirect()->back();

    }
}
