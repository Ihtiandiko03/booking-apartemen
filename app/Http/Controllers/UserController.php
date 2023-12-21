<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $user = User::query();
            return DataTables::of($user)
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                $button =   '<a class="btn btn-primary" href="'. Route('user.show', $item->id) .'">
                                Lihat
                            </a>
                            <a class="btn btn-warning" href="'. Route('user.edit', $item->id) .'">
                                Edit
                            </a>
                            <form action="'. Route('user.destroy', $item->id) .'" method="POST">
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
        
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (User::create($request->validated())) {
            Alert::success('Sukses!', 'Berhasil Dibuat');
            return redirect(route('user.index'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        if ($user->update($request->validated())) {
            Alert::success('Sukses!', 'Berhasil Diupdate!');
        }

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            Alert::success('Sukses!', 'Berhasil Dihapus!');
        }
            
        return redirect(route('user.index'));
    }
}
