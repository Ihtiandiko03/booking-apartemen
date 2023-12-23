<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riwayatadminController extends Controller
{
    public function index()
    {
        return view('admin.riwayatadmin.index');
    }

    public function cetakresi(){
        return view('admin.riwayatadmin.nota');
    }

    public function lihatriwayat(){
        return view('admin.riwayatadmin.detail');
    }
}
