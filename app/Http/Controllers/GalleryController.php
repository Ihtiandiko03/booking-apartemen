<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGalleryRequest;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function store(StoreGalleryRequest $request)
    {
        // dd($request->image);
        $imgName = 'gallery-'.time().'.'.$request->image->extension();
        
        // $request->image->move(public_path('gallery'), $imgName);
        $request->file('image')->storeAs('public/gallery', $imgName);
        $imagePath = 'gallery/' . $imgName;

        if ($gallery = Gallery::create($request->validated())) {
            $gallery->image = $imagePath;
            $gallery->save();

            Alert::success('Sukses!', 'Berhasil Dibuat');
            return redirect()->back();
        }
    }

    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        if (Storage::exists('public/'.$gallery->image)) {
            Storage::delete('public/'.$gallery->image);
        }

        if ($gallery->delete()) {
            Alert::success('Sukses!', 'Berhasil Dihapus!');
        }
            
        return redirect()->back();
    }
}
