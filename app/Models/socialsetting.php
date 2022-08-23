<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialsetting extends Model
{
    use HasFactory;

    public static function GoogleSocilite() {
    	$GoogleSocilite = socialsetting::where('name','Google')->where('status', 1)->first();
    	return $GoogleSocilite;
    }
}
