<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard() {
        $current_month_user = User::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        $current_1_month_user = User::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(1))->count();
        $current_2_month_user = User::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(2))->count();
        $current_3_month_user = User::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(3))->count();
        $usersCount = array($current_month_user,$current_1_month_user,$current_2_month_user,$current_3_month_user);
        return view('admin.dashboard')->with(compact('usersCount'));
    }
}
