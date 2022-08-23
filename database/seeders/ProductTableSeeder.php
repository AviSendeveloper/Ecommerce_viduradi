<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productRecords = [
            ['id'=>1, 'category_id'=>2, 'section_id'=>1, 'product_name'=>'Blue T-Shirt', 'product_code'=>'VD001', 'product_color'=>'Blue', 'product_price'=>1200, 'product_discount'=>10, 'product_weight'=>150, 'product_video'=>'', 'main_image'=>'', 'description'=>'This is demo product', 'wash_care'=>'', 'fabric'=>'', 'pattern'=>'', 'sleeve'=>'', 'fit'=>'', 'occassion'=>'', 
            'meta_title'=>'Blue T-Shirt', 'meta_description'=>'This is demo product', 'meta_keywords'=>'T-shirst, Blue T-shirt', 'is_featured'=>'No', 'status'=>1],
            ['id'=>2, 'category_id'=>2, 'section_id'=>1, 'product_name'=>'Red T-Shirt', 'product_code'=>'VD002', 'product_color'=>'Red', 'product_price'=>1200, 'product_discount'=>10, 'product_weight'=>150, 'product_video'=>'', 'main_image'=>'', 'description'=>'This is demo product', 'wash_care'=>'', 'fabric'=>'', 'pattern'=>'', 'sleeve'=>'', 'fit'=>'', 'occassion'=>'', 
            'meta_title'=>'Red  T-Shirt', 'meta_description'=>'This is demo product', 'meta_keywords'=>'T-shirst, Blue T-shirt', 'is_featured'=>'Yes', 'status'=>1]
        ];

        Product::insert($productRecords);
    }
}
