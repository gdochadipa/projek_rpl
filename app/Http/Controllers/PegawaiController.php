<?php

namespace App\Http\Controllers;

use App\user;
use App\rmh_sakit;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rmh_sakit = rmh_sakit::all();
        $pegawai = DB::table('users')->where('id_tipe',2)->get();
        return view('petugas.home',compact('rmh_sakit','pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rmh_sakit = rmh_sakit::all();
        return view('petugas.create',compact('rmh_sakit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai = new user;
        $pegawai->nama = $request->nama;
        $pegawai->username = $request->username;
        $pegawai->password = $request->password;
        $pegawai->id_tipe = 2;
        $pegawai->id_rmh_sakit = $request->id_rmh_sakit;
        $pegawai->save();
        return redirect('/petugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(pegawai $pegawai,$id)
    {
        $petugas = user::find($id);
        $rmh_sakit = rmh_sakit::all();
        return view('petugas.edit',compact('rmh_sakit','petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pegawai $pegawai,$id)
    {
        $petugas = user::find($id);
        $petugas->nama = $request->nama;
        $petugas->username = $request->username;
        $petugas->password = $request->password;
        $pegawai->id_tipe = 2;
        $petugas->id_rmh_sakit = $request->id_rmh_sakit;
        $petugas->save();
        return redirect('/petugas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(pegawai $pegawai,$id)
    {
        $petugas = user::find($id);
        $petugas->delete();
        return redirect('/petugas');
    }
}
