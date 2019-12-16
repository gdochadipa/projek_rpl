@extends('layout.app')
@section('nama')

<?php 
$pasien = $request->session()->get('pasien');
?>
{{ $pasien[0]->nama }}
	
@endsection

@section('kontent')

<div class="right_col" role="main">

  <div class="container-fluid">
     <div class="col-lg-12">

         <div class="col-lg-12">
              <h1 class="page-header">
                  Riwayat Antrian <small>Hi, Klinik</small>
              </h1>
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                  </li>
              </ol>


              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Riwayat Antrian</h3>
                        </div>
                        <div class="panel-body">
                           <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Nomor Antrian</th>
                                <th>Rumah Sakit</th>
                                <th>Poli</th>
                                <th>Status</th>
                                <th>tanggal</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                           
                          <tbody>
                            <tr>
                                <td colspan="5"> tidak ada Antrian</td>
                              </tr>
                          </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                   
              </div>
                     

     </div>
  </div>
</div> 
    
@endsection