<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function index1(){
        return view('index-1');
    }
    public function index2(){
        return view('index-2');
    }
}
