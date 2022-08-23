<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class admin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'admin';
    protected $fillable = [
        'name',
        'email',
        'password',
        'number',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function allAdmin(){
        if (Auth::guard('admin')->check()) {
            $allAdmin = admin::get();
            // $allAdmin = $allAdmins['email'];
            return $allAdmin;
        }
        
    }
}
