<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {

            $advertisement = Advertisement::query();
            return DataTables::of($advertisement)
            ->addIndexColumn()
            ->addColumn('banner', '<img  class="img-thumbnail" height="150" width="150" src="{{ asset("storage/".$banner) }}" >')
            ->addColumn('action', function ($item) {
                $button =   '<a class="btn btn-primary" href="'. Route('advertisement.show', $item->id) .'">
                                Lihat
                            </a>
                            <a class="btn btn-warning" href="'. Route('advertisement.edit', $item->id) .'">
                                Edit
                            </a>
                            <form action="'. Route('advertisement.destroy', $item->id) .'" method="POST">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button class="btn btn-danger" type="submit" data-id="'.$item->id.'">
                                    Hapus
                                </button>
                            </form>';
                return $button;
            })
            ->rawColumns(['banner', 'action'])
            ->make();
        }
        
        return view('admin.advertisement.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdvertisementRequest $request)
    {
        $imgName = 'advertisement-'.time().'.'.$request->banner->extension();
        
        $request->banner->storeAs('advertisement', $imgName);
        $imagePath = 'advertisement/' . $imgName;

        if ($advertisement = Advertisement::create($request->validated())) {
            $advertisement->banner = $imagePath;
            $advertisement->save();

            Alert::success('Sukses!', 'Berhasil Dibuat');
            return redirect(route('advertisement.index'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $advertisement = Advertisement::findOrFail($id);
        
        return view('admin.advertisement.detail', compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advertisement = Advertisement::findOrFail($id);
        return view('admin.advertisement.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvertisementRequest $request, string $id)
    {
        $advertisement = Advertisement::findOrFail($id);

        $requestBanner = $request->file('banner');
        if ($requestBanner) {
            if (Storage::exists('public/'.$advertisement->banner)) {
		        Storage::delete('public/'.$advertisement->banner);
	        }

            $imgName = 'advertisement-'.time().'.'.$request->banner->extension();
            $request->banner->storeAs('public/advertisement', $imgName);
            $requestBanner = 'advertisement/' . $imgName;
        } else {
            $requestBanner = $advertisement->banner;
        }

        $advertisement->update([
            'title' => $request->title,
            'description' => $request->description,
            'banner' => $requestBanner,
        ]); 

        Alert::success('Sukses!', 'Berhasil Diupdate');
        return redirect(route('advertisement.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertisement = Advertisement::findOrFail($id);

        if (Storage::exists('public/'.$advertisement->banner)) {
            Storage::delete('public/'.$advertisement->banner);
        }

        if ($advertisement->delete()) {
            Alert::success('Sukses!', 'Berhasil Dihapus!');
        }
            
        return redirect(route('advertisement.index'));
    }
}
