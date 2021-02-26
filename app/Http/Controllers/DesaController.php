<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::with('kecamatan')->get();
        return view('admin.desa.index',compact('desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.desa.create',compact('kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_desa' => 'required|unique:desas|max:255',
        ]);
        $desa = new Desa();
        $desa->nama_desa = $request->nama_desa;
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->save();
        return redirect()->route('desa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desa = Desa::findOrFail($id);
        $kecamatan = Kecamatan::all();
        return view('admin.desa.show',compact('desa','kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa = Desa::findOrFail($id);
        $kecamatan = Kecamatan::all();
        $selected = $desa->kecamatan->pluck('id')->toArray();
        return view('admin.desa.edit',compact('desa','kecamatan','selected'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $desa = Desa::findOrFail($id);
        $desa->nama_desa = $request->nama_desa;
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->save();
        return redirect()->route('desa.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desa = Desa::findOrFail($id);
        $desa->delete();
        return redirect()->route('desa.index');
    }
}
