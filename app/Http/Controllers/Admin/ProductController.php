<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Section;
use App\Models\Category;
use App\Models\products_attributes;
use App\Models\products_images;
use App\Models\brands;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Excel;

class ProductController extends Controller
{
  public function product()
  {
    $products = Product::with(['category', 'section'])->get();
    // $products = json_decode(json_encode($products));
    // print "<pre>"; print_r($products); die;
    return view('admin.all-product')->with(compact('products'));
  }

  public function changeProductStatus(Request $request)
  {
    $user = Product::find($request->user_id);
    $user->status = $request->status;
    $user->save();
    return response()->json(['success' => 'Status change successfully.']);
  }

  public function changeTodaysDealStatus(Request $request)
  {
    $product = Product::find($request->product_id);
    $product->todays_status = $request->status;
    $product->save();
    return response()->json(['success' => 'Status change successfully.']);
  }

  public function deleteProduct($id)
  {
    $product = Product::find($id);
    $product->delete();
    $message = "Product deleted successfully";
    Session::flash('error', $message);
    return redirect()->back()->with('success', 'Product deleted successfully');
  }

  public function addEditProduct(Request $request, $id = null)
  {
    // return $request->all();
    if ($id == "") {
      $title = "Add Product";
      $product = new Product;
      $productdata = array();
      $message = "Product added successfully!!";
    } else {
      $title = "Edit Product";
      $productdata = Product::where('id', $id)->first();
      $productdata = json_decode(json_encode($productdata), true);

      // $getCategories = Product::with('subcategories')->where(['parent_id'=>0, 'section_id'=>$product['section_id']])->get();
      // print "<pre>"; print_r($getCategories); die;
      $product =  $productdata = Product::where('id', $id)->first();
      $message = "Product Edited successfully!!";
    }

    // product filters
    $productFilters = Product::productFilters();
    $febricArr = $productFilters['febricArr'];
    $sleeveArr = $productFilters['sleeveArr'];
    $patternArr = $productFilters['patternArr'];
    $fitArr = $productFilters['fitArr'];
    $occassionArr = $productFilters['occassionArr'];

    // Section with categories and subcategories
    $categories = Section::with('categories')->get();
    $categories = json_decode(json_encode($categories), true);
    // print "<pre>"; print_r($categories); die;

    // Get all brands
    $brands = brands::where('status', 1)->get();
    $brands = json_decode(json_encode($brands), true);

    if (empty($data['is_featured'])) {
      $is_featured = 0;
    } else {
      $is_featured = 1;
    }


    if ($request->isMethod('post')) {
      // save product details in product table
      $data = $request->all();
      // print "<pre>"; print_r($data); die;
      $categoryDetails = Category::find($data['category_id']);
      $product->category_id = $data['category_id'];
      $product->section_id = $categoryDetails['section_id'];
      $product->brand_id = $data['brand_id'];
      $product->product_name = $data['product_name'];
      $product->product_code = $data['product_code'];
      $product->group_code = $data['group_code'];
      $product->product_color = $data['product_color'];
      $product->product_price = $data['product_price'];
      $product->product_discount = $data['product_discount'];
      $product->product_weight = $data['product_weight'];
      $product->meta_keywords = $data['meta_keyword'];
      if ($request->hasfile('main_image')) {
        $file = $request->file('main_image');
        $fileFirstName = $file->getClientOriginalName();
        $filename = time() . "-" . $fileFirstName;
        $file->move('product/image/', $filename);
        $product->main_image = $filename;
      }
      if ($request->hasfile('product_video')) {
        $video_tmp = $request->file('product_video');
        if ($video_tmp->isValid()) {
          // upload video
          $video_name = $video_tmp->getClientOriginalName();
          $extension = $video_tmp->getClientOriginalExtension();
          $videoName = $video_name . '-' . rand() . '.' . $extension;
          $videoPath = 'product/video/';
          $video_tmp->move($videoPath, $videoName);
          // save video in product tables
          $product->product_video = $videoName;
        }
      }
      $product->description = $data['description'];
      $product->wash_care = $data['wash_care'];
      $product->fabric = $data['febric'];
      $product->pattern = $data['pattern'];
      $product->sleeve = $data['sleeve'];
      $product->fit = $data['fit'];
      $product->occassion = $data['occassion'];
      $product->meta_title = $data['meta_title'];
      $product->meta_description = $data['meta_description'];

      if ($data['is_featured']) {
        $product->is_featured = 'Yes';
      } else {
        $product->is_featured = 'No';
      }
      $product->status = $is_featured;
      $product->save();
      Session::flash('success', $message);
      return redirect('/all-product');
    }


    return view('admin.add-edit-product')->with(compact('title', 'productdata', 'febricArr', 'sleeveArr', 'patternArr', 'fitArr', 'occassionArr', 'categories', 'brands'));
  }

  public function addAttributes(Request $request, $id = null)
  {
    if ($request->isMethod('post')) {
      $data = $request->all();
      // echo "<pre>";print_r($data);die;
      foreach ($data['sku'] as $key => $val) {
        if (!empty($val)) {

          //SKU is Already Exist
          $attrCountSKU = products_attributes::where(['sku' => $val])->count();
          if ($attrCountSKU > 0) {
            $massage = "SKU is already exist, Plese enter another SKU";
            session::flash('error', $massage);
            return redirect()->back();
          }
          //Size is Already Exist
          $attrCountSize = products_attributes::where(['product_id' => $id, 'size' => $data['size'][$key]])->count();
          if ($attrCountSize > 0) {
            $massage = "Size is already exist, Plese enter another Size";
            session::flash('error', $massage);
            return redirect()->back();
          }
          $attribute = new products_attributes;
          $attribute->product_id = $id;
          $attribute->sku        = $val;
          $attribute->size       = $data['size'][$key];
          $attribute->color       = $data['color'][$key];
          $attribute->price       = $data['price'][$key];
          $attribute->stock       = $data['stock'][$key];
          $attribute->status      = 1;
          $attribute->save();
        }
      }
    }

    $productdata = Product::select('id', 'product_name', 'product_code', 'main_image')->with('attributes')->find($id);
    $productdata = json_decode(json_encode($productdata), true);
    // echo "<pre>";print_r($productdata);die;

    $title = "Product Attributes";
    return view('admin.add_attributes')->with(compact('title', 'productdata'));
  }

  public function editAttributes(Request $request, $id)
  {
    if ($request->isMethod('post')) {
      $data = $request->all();

      //echo "<pre>"; print_r($data);die;

      foreach ($data['attrId'] as $key => $attr) {
        if (!empty($attr)) {
          products_attributes::where(['id' => $data['attrId'][$key]])->update(['price' => $data['price'][$key], 'stock' => $data['stock'][$key]]);
        }
      }

      $massage = "Product Attribute Added Successfully";
      session::flash('success', $massage);
      return redirect()->back();
    }
  }

  public function deletestock($id)
  {
    $data = products_attributes::find($id);
    $data->delete();
    $massage = "Stock is deleted!!!";
    session::flash('error', $massage);
    return redirect()->back();
  }

  public function addImages(Request $request, $id)
  {
    if ($request->isMethod('post')) {
      $data = $request->all();
      // echo "<pre>";print_r($data);die;
      if ($request->hasfile('image')) {
        $image = $request->file('image');
        foreach ($image as $images) {
          $productImage = new products_images;
          $productImage->product_id = $request->product_id;
          $productImage->status = 1;
          // $img = Image::make($image);
          // $extension = $image->getClientOriginalExtension();
          // $imageName = rand(1111,999999).time().'-'.$extension;

          $fileFirstName = $images->getClientOriginalName();
          $filename = time() . "-" . $fileFirstName;
          $images->move('product/image/', $filename);
          $productImage->image = $filename;
          $productImage->save();
        }

        $massage = "Product Image Added Successfully";
        session::flash('success', $massage);
        return redirect()->back();
      }
    }
    $productdata = Product::with('images')->select('id', 'product_name', 'product_code', 'main_image')->with('attributes')->find($id);
    $productdata = json_decode(json_encode($productdata), true);
    // echo "<pre>";print_r($productdata);die;
    return view('admin.add_images')->with(compact('productdata'));
  }


  public function deleteImages($id)
  {
    products_images::find($id)->delete();
    $massage = "Image is deleted by you!!!";
    session::flash('error', $massage);
    return redirect()->back();
  }

  public function importProduct(Request $request)
  {
    $request->validate([
      'import' => 'required|mimes:xlsx, csv, xls'
    ]);
    Excel::import(new ProductImport, $request->import);
    $massage = "Record import successfully!!!";
    session::flash('success', $massage);
    return redirect()->back();
  }
}
