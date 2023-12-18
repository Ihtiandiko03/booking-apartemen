<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function tables(){
        return view('dashboard.tables');
    }
    public function billing(){
        return view('dashboard.billing');
    }
    public function vr(){
        return view('dashboard.vr');
    }
    public function profile(){
        return view('dashboard.profile');
    }
}
