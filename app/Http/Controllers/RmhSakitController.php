<?php

namespace App\Http\Controllers;

use App\rmh_sakit;
use App\provinsi;
use App\kabupaten;
use App\kecamatan;
use Illuminate\Http\Request;

class RmhSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rmh_sakit = rmh_sakit::all();
        $kecamatan = kecamatan::all();
        return view('rumahsakit.home',compact('rmh_sakit','kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $provinsi = provinsi::all();
        $kabupaten = kabupaten::all();
        $kecamatan = kecamatan::all();
        return view('rumahsakit.create',compact('provinsi','kabupaten','kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rmh_sakit = new rmh_sakit;
        $rmh_sakit->nm_rmh_sakit = $request->nm_rmh_sakit;
        $rmh_sakit->alamat = $request->alamat;
        $rmh_sakit->deskripsi = $request->deskripsi;
        $rmh_sakit->id_kecamatan = $request->id_kecamatan;
        $rmh_sakit->save();
        return redirect('/rumahsakit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rmh_sakit  $rmh_sakit
     * @return \Illuminate\Http\Response
     */
    public function show(rmh_sakit $rmh_sakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rmh_sakit  $rmh_sakit
     * @return \Illuminate\Http\Response
     */
    public function edit(rmh_sakit $rmh_sakit,$id)
    {
        $rmhsakit = rmh_sakit::find($id);
        $kecamatan = kecamatan::all();
        return view('rumahsakit.edit',compact('rmhsakit','kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rmh_sakit  $rmh_sakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rmh_sakit $rmh_sakit,$id)
    {
        $rmhsakit = rmh_sakit::find($id);
        $rmhsakit->nm_rmh_sakit = $request->nm_rmh_sakit;
        $rmhsakit->alamat = $request->alamat;
        $rmhsakit->deskripsi = $request->deskripsi;
        $rmhsakit->id_kecamatan = $request->id_kecamatan;
        $rmhsakit->save();
        return redirect('/rumahsakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rmh_sakit  $rmh_sakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(rmh_sakit $rmh_sakit,$id)
    {
        $rmhsakit = rmh_sakit::find($id);
        $rmhsakit->delete();
        return redirect('/rumahsakit');
    }
}
