<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;

class FacilityController extends Controller
{
    public function store(StoreFacilityRequest $request) 
    {
        if (Facility::create($request->validated())) {
            Alert::success('Sukses!', 'Berhasil Dibuat');
            return redirect()->back();
        }
    }

    public function update(UpdateFacilityRequest $request, String $id)
    {
        $facility = Facility::findOrFail($id);

        if ($facility->update($request->validated())) {
            Alert::success('Sukses!', 'Berhasil Diupdate!');
        }

        return redirect()->back();
    }

    public function destroy(String $id)
    {
        $facility = Facility::findOrFail($id);

        if ($facility->delete()) {
            Alert::success('Sukses!', 'Berhasil Dihapus!');
        }
            
        return redirect()->back();
    }
}
