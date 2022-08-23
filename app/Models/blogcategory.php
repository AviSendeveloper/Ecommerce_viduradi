<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcategory extends Model
{
    use HasFactory;

    public static function BlogCategory() {
    	$BlogCategory = blogcategory::get();
    	return $BlogCategory;
    }

    public static function Blog() {
    	$Blog = blogcategory::where('status', 1)->get();
    	return $Blog;
    }
}
