<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addblog extends Model
{
    use HasFactory;

    public static function addblog()
    {
        $addblog = addblog::get();
        return $addblog;
    }

    public static function TotalBlog()
    {
        $TotalBlog = addblog::count();
        return $TotalBlog;
    }
}
