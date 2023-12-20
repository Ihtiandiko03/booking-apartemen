<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use Yajra\DataTables\Facades\DataTables;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $faq = Faq::query();
            return DataTables::of($faq)
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                $button =   '<a class="btn btn-primary" href="'. Route('faq.show', $item->id) .'">
                                Lihat
                            </a>
                            <a class="btn btn-primary" href="'. Route('faq.edit', $item->id) .'">
                                Edit
                            </a>
                            <form action="'. Route('faq.destroy', $item->id) .'" method="POST">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button class="btn btn-primary" type="submit" data-id="'.$item->id.'">
                                    Hapus
                                </button>
                            </form>';
                return $button;
            })
            ->make();
        }
        
        return view('admin.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        if (Faq::create($request->validated())) {
            Alert::success('Sukses!', 'Berhasil Dibuat');
            return redirect(route('faq.index'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $faq = Faq::findOrFail($id);

        return view('admin.faq.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, string $id)
    {
        $faq = Faq::findOrFail($id);

        if ($faq->update($request->validated())) {
            Alert::success('Sukses!', 'Berhasil Diupdate!');
        }

        return redirect(route('faq.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::findOrFail($id);

        if ($faq->delete()) {
            Alert::success('Sukses!', 'Berhasil Dihapus!');
        }
            
        return redirect(route('faq.index'));
    }
}
