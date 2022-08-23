<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;

    Public static function sliders() {
    	$sliders = slider::get();
    	return $sliders;
    }
}
