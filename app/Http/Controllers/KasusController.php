<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasus = Kasus::with('rw.desa.kecamatan.kota.provinsi')->get();
        return view('admin.kasus.index',compact('kasus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('admin.kasus.create', compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kasus = new Kasus;
        $kasus->reaktif = $request->reaktif;
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->id_rw = $request->id_rw;
        $kasus ->save();
        return redirect()->route('kasus.index')->with('sukses','Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        $rw = Rw::all();
        return view('admin.kasus.show',compact('kasus','rw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kasus = Kasus::findOrFail($id);
        $rw = Rw::all();
        $selected = $kasus->rw->pluck('id')->toArray();
        return view('admin.kasus.edit',compact('kasus','rw','selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->reaktif = $request->reaktif;
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->id_rw = $request->id_rw;
        $kasus ->save();
        return redirect()->route('kasus.index')->with('sukses','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->delete();
        return redirect()->route('kasus.index');
    }
}
