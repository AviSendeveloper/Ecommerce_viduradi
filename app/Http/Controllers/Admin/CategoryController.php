<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Section;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function Categories() {
        $categories = category::with(['section', 'parentcategory'])->get();
        // echo "<pre>"; print_r($categories); die;
        return view('admin.add-category')->with(compact('categories'));
    }

    public function changeCategoryStatus(Request $request) {
       $user = category::find($request->user_id);
       $user->status = $request->status;
       $user->save();
       return response()->json(['success'=>'Status change successfully.']);
    }

    public function addEditCategory(Request $request,$id=null) {
        // return $id;
        if ($id=="") {
            $title = "Add category";
            $category = new category;
            $getCategories = array();
            $message = "Category added successfully!!";
        }else{
            $title = "Edit category";
            $category = category::where('id', $id)->first();
            $getCategories = category::with('subcategories')->where(['parent_id'=>0, 'section_id'=>$category['section_id']])->get();
            // $getCategories = json_decode(json_encode($category));
            // print "<pre>"; print_r($getCategories); die;
            $message = "Category Edited successfully!!";
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['parent_id'] == null) {
                $data['parent_id'] = 0;
            }
            print "parent_id" . $category->parent_id = $data['parent_id'];
            print "<br>";
            print "section_id" . $category->section_id = $data['section_id'];
            print "<br>";
            print "category_name" . $category->category_name = $data['category_name'];
            print "<br>";
            print "category_discount" . $category->category_discount = $data['category_discount'];
            print "<br>";
            print "description" . $category->description = $data['description'];
            print "<br>";
            print "url" . $category->url = $data['url'];
            print "<br>";
            print "meta_title" . $category->meta_title = $data['meta_title'];
            print "<br>";
            print "meta_description" . $category->meta_description = $data['meta_description'];
            print "<br>";
            print "meta_keyword" . $category->meta_keyword = $data['meta_keyword'];
            print "<br>";
            if($request->hasfile('category_image')) {
                $file = $request->file('category_image');
                $fileFirstName = $file->getClientOriginalName();
                $filename = time() ."-". $fileFirstName;
                $file->move('category/image/', $filename );
                $category->category_image = $filename;
            }
            print "status" . $category->status = 1;
            // print "<br>"; die;
            $category->save();
            Session::flash('success', $message);
            return redirect('/add-category');
        }
        $getSections = section::get();
        if (isset($category)) {
            return view('admin.add-edit-category')->with(compact('title','getSections', 'category', 'getCategories'));
        } else {
            return view('admin.add-edit-category')->with(compact('title','getSections', 'getCategories'));
        }
    }

    public function deleteCategory($id) {
        $category = category::find($id);
        $category->delete();
        $message = "Category deleted successfully";
        Session::flash('success', $message);
        return redirect()->back()->with('success', 'Image deleted successfully');
    }

    public function deleteCategoryImage($id) {
        $categoryDetails = category::where('id', $id)->first();
        // delete image from folder
        $file_path = "/category/image/";
        if (file_exists($file_path . $categoryDetails['category_image'])) {
            unlink($file_path . $categoryDetails['category_image']);
        }
        // delete image name from category table
        $categoryDetails->category_image = "";
        $categoryDetails->save();
        return redirect()->back();
    }

    public function appendCategoriesLevel(Request $request) {
        if ($request->ajax()) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $getCategories = category::with('subcategories')->where(['section_id'=>$data['section_id'],'parent_id'=>0,'status'=>1])->get();
            // $getCategories = json_decode(json_encode($getCategories),true);
            // print "<pre>"; print_r($getCategories); die;
            return view('admin.appends_categories_level')->with(compact('getCategories'));

        }
    }
}
