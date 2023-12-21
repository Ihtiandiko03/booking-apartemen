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
        $imgName = 'gallery-'.time().'.'.$request->image->extension();
        
        $request->file('image')->storeAs('public/gallery', $imgName);
        $imagePath = 'gallery/' . $imgName;

        if ($gallery = Gallery::create($request->validated())) {
            $gallery->image = $imagePath;
            $gallery->save();

            Alert::success('Sukses!', 'Berhasil Dibuat');
            return redirect()->back();
        }
    }

    public function changeThumbnail(String $id)
    {
        $gallery = Gallery::findOrFail($id);

        Gallery::where('unit_id', $gallery->unit_id)->where('is_thumbnail', 1)->update(['is_thumbnail' => 0]);

        $gallery->is_thumbnail = 1;
        $gallery->save();

        Alert::success('Sukses!', 'Berhasil Diubah');
        return redirect()->back();
    }

    public function destroy(String $id)
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
