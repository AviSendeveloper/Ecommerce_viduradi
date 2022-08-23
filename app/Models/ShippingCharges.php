<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingCharges extends Model
{
    use HasFactory;

    Public static function getShippingCharges($country) {
        $shippingDetails = ShippingCharges::where('country', $country)->first()->toArray();
        $shipping_charges = $shippingDetails['shipping_charges'];
        return $shipping_charges;
    }
}
