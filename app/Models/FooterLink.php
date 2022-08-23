<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterLink extends Model
{
    use HasFactory;

    public static function links() {
        $links = FooterLink::get()->where('status', 1)->groupBy(function($data) {
            return $data->category;
        });
        return $links;
    }
}
