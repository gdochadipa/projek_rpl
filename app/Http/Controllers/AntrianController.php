<?php

namespace App\Http\Controllers;

use App\antrian;
use App\rmh_sakit;
use App\poli;
use Illuminate\Http\Request;
use DB;

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

    public function action(Request $request)
    {
       if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('rmh_sakits')
                ->where('nm_rmh_sakit', 'like', '%'.$query.'%')->get();
            }else{
                $data = null;
            }

            $total_row = $data->count();
           
            if($total_row > 0){
                foreach ($data as $row) {
                    $output='
                     <tr>
                      <td>'.$row->nm_rmh_sakit.'</td>
                    <td>'.$row->alamat.'</td>
                    <td>'.$row->deskripsi.'</td>
                    <td>   <a href="antri/'.$row->id.'"  class="buttonNext btn btn-success">Next</a>

                    </td>
                    </tr>
                    ';
                }
            }
            else{
                 $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }
            $data=array( 
                'table_data'  => $output,
              'total_data'  => $total_row);

              echo json_encode($data);
       }
    }

    public function pilih_poli(Request $request)
    {
        $poli = poli::select('id','nama_poli')->where('id_rm_sakit', '=', $request->id)->get();
        //dd($poli);
        return view('main.pilih_poli',compact('poli','request'));
    }

    public function ambil(Request $request)
    {
          
        return view('main.ambil_antrian',compact('request'));
    }

    public function ambil_antri(Request $request, $id)
    {
        
        return view('main.tambah_antri',compact('request'));
    }

    public function main(Request $request) {
        
    $pasien = $request->session()->get('pasien');
      //  dd($pasien);
    return view('main.main',compact('pasien'));
    }

    public  function antri(Request $request) {
    return view('main.antri',compact('request'));
    }

    public function riwayat (Request $request) {
    return view('main.riwayat',compact('request'));
    }

    public  function booking(Request $request) {
    return view('main.booking',compact('request'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    //    if( $request->session()->has('poli')){
    //        $nama= $request->session()->get('nama');
    //    }else{
    //        $nama= 'Tidak ada data dalam session.';
    //    }
       return $nama;
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
