<?php

namespace App\Http\Controllers;

use App\antrian;
use App\rmh_sakit;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function searchHospital(Request $request)
    {
        $data = rmh_sakit::select("name")
                ->where("nm_rmh_sakit","LIKE","%{$request->query}%")
                ->get();
                return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function show(antrian $antrian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function edit(antrian $antrian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, antrian $antrian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy(antrian $antrian)
    {
        //
    }
}
