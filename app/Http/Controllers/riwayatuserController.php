<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riwayatuserController extends Controller
{
    public function index()
    {
        return view('user.riwayatuser.index');
    }

    public function cetakresi(){
        return view('user.riwayatuser.nota');
    }

    public function lihatriwayat(){
        return view('user.riwayatuser.detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
