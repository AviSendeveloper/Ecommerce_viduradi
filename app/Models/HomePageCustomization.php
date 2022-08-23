<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageCustomization extends Model
{
    use HasFactory;

    public function permissionList() {
        $permissionList = HomePageCustomization::get();
        $permissionArr = [];
        foreach ($permissionList as $permission) {
                $permissionArr[$permission->service_name] = $permission->status;
        }
        return $permissionArr;
    }
}
