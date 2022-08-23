<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogcategory;
use App\Models\addblog;
use Session;

class BlogController extends Controller
{
    public function blogCategoryCreate(Request $request) {
    	$data = new blogcategory;
    	$data->category = $request->name;
    	$data->slug = $request->slug;
    	$data->status = 0;
    	$data->save();
    	$message = "Blog category has been add in admin panel!!";
    	Session::flash('success', $message);
    	return redirect()->back();
    }

    public function deleteBlogCategory($id){
    	blogcategory::find($id)->delete();
    	$message = "Blog category has been deleted from admin panel!!";
    	Session::flash('error', $message);
    	return redirect()->back();
    }

    public function blogCategoryStatus(Request $request) {
    	  $user = blogcategory::find($request->user_id);
       $user->status = $request->status;
       $user->save();
       return response()->json(['success'=>'Status change successfully.']);
    }

    Public function adminBlogCreate()
    {
    	return view('admin.admin-blog-create');
    }

    Public function addBlogForm(Request $request)
    {
    	// echo "<pre>"; print_r($request->all()); die;
    	$data = new addblog;
    	$data->blogcategory_id = $request->category_id;
    	$data->title = $request->title;
    	$data->description = $request->details;
    	$data->slug = $request->slug;
    	if ($request->tags) {
    		$tag = implode(',',$request->tags);
    		$data->tag = $tag;
    	}
    	if ($request->meta_tag) {
    		$meta_tag = implode(',',$request->meta_tag);
    		$data->meta_tag = $meta_tag;
    	}
		 if($request->hasfile('image')) {
		        $file = $request->file('image');
		        $fileFirstName = $file->getClientOriginalName();
		        $filename = time() ."-". $fileFirstName;
		        $file->move('blog/image/', $filename );
		        $data->image = $filename;
		    }
    	$data->meta_description = $request->meta_description;
    	$data->save();
    	$message = "Blog is update in user panel!!";
    	Session::flash('success', $message);
    	return redirect('/blog-post');
    }

     Public function adminBlogDelete($id)
    {
    	addblog::find($id)->delete();
    	$message = "Blog is deleted from user panel!!";
    	Session::flash('error', $message);
    	return redirect('/blog-post');
    }

    Public function adminBlogEdit(Request $request, $id=null)
    {
    	if ($request->isMethod('post')) {
    	$data = addblog::find($request->id);
    	$data->blogcategory_id = $request->category_id;
    	$data->title = $request->title;
    	$data->description = $request->details;
    	$data->slug = $request->slug;
		 if($request->hasfile('image')) {
		        $file = $request->file('image');
		        $fileFirstName = $file->getClientOriginalName();
		        $filename = time() ."-". $fileFirstName;
		        $file->move('blog/image/', $filename );
		        $data->image = $filename;
		    }
		    if ($request->meta_description) {
		    	$data->meta_description = $request->meta_description;
		    }
    	
    	$data->save();
    	$message = "Blog is update in user panel!!";
    	Session::flash('success', $message);
    	return redirect('/blog-post');
    	} else{
    		$data = addblog::find($id);
    		return view('admin.admin-blog-edit')->with(compact('data'));
    	}
    }
}
