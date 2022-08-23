<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'section_id', 'brand_id', 'product_name', 'product_code', 'product_color', 'product_price', 'product_discount', 'product_weight', 'product_video', 'main_image', 'description', 'wash_care', 'fabric', 'sleeve', 'fit', 'occassion', 'meta_title', 'meta_description', 'meta_keywords', 'is_featured', 'status'];

    public function category()
    {
        return $this->belongsTo('App\Models\category', 'category_id');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\brands', 'brand_id');
    }

    public function attributes()
    {
        return $this->hasMany('App\Models\products_attributes');
    }
    public function images()
    {
        return $this->hasMany('App\Models\products_images');
    }

    public static function productFilters()
    {
        // Product filters
        $productFilters['febricArr'] = array('cotton', 'polyester', 'wool');
        $productFilters['sleeveArr'] = array('Full Sleeve', 'Half Sleeve', 'Short Sleeve', 'Sleeveles');
        $productFilters['patternArr'] = array('Checked', 'Plain', 'Printed', 'Self', 'Solid');
        $productFilters['fitArr'] = array('Regular', 'Slim');
        $productFilters['occassionArr'] = array('Casual', 'Formal');
        return $productFilters;
    }

    public static function getDiscountedPrice($product_id)
    {
        $proDetails = Product::select('product_price', 'product_discount', 'category_id')->where('id', $product_id)->first()->toArray();
        // echo "<pre>";print_r($proDetails);die;
        $catDetails = category::select('category_discount')->where('id', $proDetails['category_id'])->first()->toArray();
        if ($proDetails['product_discount'] > 0) {
            $discounted_price = round($proDetails['product_price'] - ($proDetails['product_price'] * $proDetails['product_discount'] / 100));
        } else if ($catDetails['category_discount'] > 0) {
            $discounted_price = round($proDetails['product_price'] - ($proDetails['product_price'] * $catDetails['product_discount'] / 100));
        } else {
            $discounted_price = 0;
        }
        return $discounted_price;
    }


    public static function getDiscountedAttrPrice($product_id, $size)
    {
        $proAttrPrice = products_attributes::where(['product_id' => $product_id, 'size' => $size])->first()->toArray();
        $proDetails = Product::select('product_discount', 'category_id')->where('id', $product_id)->first()->toArray();
        $catDetails = category::select('category_discount')->where('id', $proDetails['category_id'])->first()->toArray();
        // $tax = Tax::where(['country'=>'India', 'status'=>1])->orderBY('id', 'DESC')->first();
        // $discount1 = $proDetails['discount'];

        if ($proDetails['product_discount'] > 0) {
            $final_price = round($proAttrPrice['price'] - ($proAttrPrice['price'] * $proDetails['product_discount'] / 100));
            $discount_price = $proAttrPrice['price'] - $final_price;
            $discount = $proDetails['product_discount'];
        } else if ($catDetails['category_discount'] > 0) {
            $final_price = round($proAttrPrice['product_price'] - ($proAttrPrice['product_price'] * $catDetails['product_discount'] / 100));
            $discount_price = $proAttrPrice['price'] - $final_price;
            $discount = $catDetails['product_discount'];
        } else {
            $final_price = 0;
            $discount_price = 0;
            $discount = 0;
        }
        // if (isset($tax['igst'])) {
        //     $final_price = $final_price + ($final_price*($tax['igst']/100));
        // }
        return array('product_price' => $proAttrPrice['price'], 'final_price' => $final_price, 'discount' => $discount, 'discount_price' => $discount_price);
    }

    public static function getProductImage($product_id)
    {
        $image = products_images::where('product_id', $product_id)->select('image')->first();
        return $image;
    }

    public static function newArrivals()
    {
        $newArrivals = Product::orderBy('id', 'DESC')->limit(15)->get();
        return $newArrivals;
    }

    public static function todaysDeal() {
        $todaysDeals = Product::where('todays_status', 1)->latest()->get();
        return $todaysDeals;
    }

    public static function AllProduct(){
        $AllProduct = Product::count();
        return $AllProduct;
    }
}
