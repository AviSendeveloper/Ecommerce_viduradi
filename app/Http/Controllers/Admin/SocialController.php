<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\socialpage;
use App\Models\socialsetting;
use Illuminate\Support\Facades\Session;

class SocialController extends Controller
{
    Public function adminSocial() {
    	return view('admin.admin-social');
    }

    public function changeSocialStatus(Request $request) {
	   $user = socialpage::find($request->user_id);
       $user->status = $request->status;
       $user->save();
       return response()->json(['success'=>'Status change successfully.']);
    }

    Public function updateSocialPage(Request $request)
    {
    	// return $request->all();
    	if ($request->Facebook) {
    		socialpage::where('name','Facebook')->update(['url'=>$request->Facebook]);
    		socialpage::where('name','Google_Plus')->update(['url'=>$request->Google_Plus]);
    		socialpage::where('name','Twitter')->update(['url'=>$request->Twitter]);
    		socialpage::where('name','Linkedin')->update(['url'=>$request->Linkedin_]);
    		socialpage::where('name','Dribble')->update(['url'=>$request->Dribble_]);
    		$message = "Social link was updated";
    		Session::flash('success',$message);
    		return redirect()->back();
    	}
    }

    Public function adminSocialFacebook() {
    	$data = socialsetting::where('name','Facebook')->first();
    	return view('admin.admin-social-facebook')->with(compact('data'));
    }

    Public function adminSocialGoogle() {
    	$data = socialsetting::where('name','Google')->first();
    	return view('admin.admin-social-google')->with(compact('data'));
    }

    public function adminSocialUpdate(Request $request)
    {
    	$data = socialsetting::find($request->id);
    	// $data->name =$request->name;
    	$data->app_id =$request->app_id;
    	$data->app_secret =$request->app_secret;
    	$data->url =$request->url;
    	$data->redirect_url =$request->redirect_url;
    	$data->save();
    	$message="Your data is updated!!";
    	Session::flash('success',$message);
    	return redirect()->back();
    }

    public function changeFacebookStatus(Request $request) {
        $user = socialsetting::find($request->user_id);
       $user->status = $request->status;
       $user->save();
       return response()->json(['success'=>'Status change successfully.']);
    }
}
