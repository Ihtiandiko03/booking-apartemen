<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use Yajra\DataTables\Facades\DataTables;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $unit = Unit::query();
            return DataTables::of($unit)
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                $button =   '<a class="btn btn-primary" href="'. Route('unit.show', $item->id) .'">
                                Lihat
                            </a>
                            <a class="btn btn-warning" href="'. Route('unit.edit', $item->id) .'">
                                Edit
                            </a>
                            <form class="d-inline" action="'. Route('unit.destroy', $item->id) .'" method="POST">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button class="btn btn-danger" type="submit" data-id="'.$item->id.'">
                                    Hapus
                                </button>
                            </form>';
                return $button;
            })
            ->make();
        }
        
        return view('admin.unit.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request)
    {
        $request_all = $request->all();
        $slug = str($request->nama_unit)->slug();
        if (Unit::where('slug', $slug)->count() > 0) {
            $slug .= rand(1, 20);
            $request_all['slug'] = $slug;
        } else {
            $request_all['slug'] = $slug->value;
        }

        if (Unit::create($request_all)) {
            Alert::success('Sukses!', 'Berhasil Dibuat');
            return redirect(route('unit.index'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = Unit::findOrFail($id);
        $price = $unit->prices;

        $priceDay = $price->firstWhere('type', 'day')->price ?? 0;
        $priceWeek = $price->firstWhere('type', 'week')->price ?? 0;
        $priceMonth = $price->firstWhere('type', 'month')->price ?? 0;
        $priceYear = $price->firstWhere('type', 'year')->price ?? 0;

        $data = [
            'unit' => $unit,
            'facility' => $unit->facilities,
            'gallery' => $unit->galleries,
            'priceDay' => $priceDay,
            'priceWeek' => $priceWeek,
            'priceMonth' => $priceMonth,
            'priceYear' => $priceYear,
        ];

        return view('admin.unit.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unit = Unit::findOrFail($id);
        return view('admin.unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, string $id)
    {
        $unit = Unit::findOrFail($id);

        $request_all = $request->all();

        if ($unit->title != $request->nama_unit) {
            $slug = str($request->nama_unit)->slug();
            if (Unit::where('slug', $slug)->count() > 0) {
                $slug .= rand(1, 20);
                $request_all['slug'] = $slug;
            } else {
                $request_all['slug'] = $slug->value;
            }    
        }

        if ($unit->update($request_all)) {
            Alert::success('Sukses!', 'Berhasil Diupdate!');
        }

        return redirect(route('unit.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unit = Unit::findOrFail($id);

        if ($unit->delete()) {
            Alert::success('Sukses!', 'Berhasil Dihapus!');
        }
            
        return redirect(route('unit.index'));
    }
}
