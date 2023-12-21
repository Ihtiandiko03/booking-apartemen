<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Price;
use Illuminate\Http\Request;
use App\Http\Requests\PostPriceRequest;

class PriceController extends Controller
{
    public function store(PostPriceRequest $request)
    {
        $price = Price::updateOrCreate(
            ['type' => $request->type, 'unit_id' => $request->unit_id],
            $request->validated(),
        );

        Alert::success('Sukses!', 'Berhasil Dibuat');
        return redirect()->back();
    }

    public function destroy(String $unitId, String $type)
    {
        $price = Price::where(['unit_id' => $unitId, 'type' => $type])->firstOrFail();
        
        $price->delete();
        Alert::success('Sukses!', 'Berhasil Dihapus');
        return redirect()->back();
    }
}
