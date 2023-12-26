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
            'app_name' => 'App Name',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor ex id consequat tincidunt. Nulla justo dui, porta eu eleifend sed, ultricies at tellus.',
            'email' => ' - ',
            'phone' => '08888888',
            'address' => 'Jl XXXX YYYY',
            'twitter' => 'twitter.com',
            'facebook' => 'facebook.com',
            'instagram' => 'instagram.com',
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
