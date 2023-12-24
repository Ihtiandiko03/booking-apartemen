<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first() == null ? Setting::create([
            'app_name' => ' - ',
            'about' => ' - ',
            'email' => ' - ',
            'phone' => ' - ',
            'address' => ' - ',
            'twitter' => ' - ',
            'facebook' => ' - ',
            'instagram' => ' - ',
            'maps' => ' - ',
        ]) : Setting::first();

        return view('admin.setting.index', compact('setting'));
    }

    public function updateOrCreate(Request $request)
    {
        $settings = Setting::find($request->id)->update($request->all());
        // dd($request->all());

        if ($settings) {
            Alert::success('Sukses!', 'Berhasil Dibuat');
        }

        return redirect(route('setting.index'));
    }
}
