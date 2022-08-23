<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // echo "<pre>";print_r($row);die;
        return new Product([
            'category_id' => $row['category_id'],
            'section_id' => $row['section_id'],
            'brand_id' => $row['brand_id'],
            'product_name' => $row['product_name'],
            'product_code' => $row['product_code'],
            'product_color' => $row['product_color'],
            'product_price' => $row['product_price'],
            'product_discount' => $row['product_discount'],
            'product_weight' => $row['product_weight'],
            'product_video' => $row['product_video'],
            'main_image' => $row['main_image'],
            'description' => $row['description'],
            'wash_care' => $row['wash_care'],
            'fabric' => $row['fabric'],
            'sleeve' => $row['sleeve'],
            'fit' => $row['fit'],
            'occassion' => $row['occassion'],
            'meta_title' => $row['meta_title'],
            'meta_description' => $row['meta_description'],
            'meta_keywords' => $row['meta_keywords'],
            'is_featured' => $row['is_featured'],
            'status' => $row['status'],
            'pattern'=> 'solid',
        ]);
    }
}
