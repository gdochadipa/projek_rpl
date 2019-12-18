@extends('admin.app')

@section('kontent')

<div class="right_col" role="main">

  <div class="container-fluid">
     <div class="col-lg-12">

         <div class="col-lg-12">
              <h1 class="page-header">
                  Dashboard Admin<small> Hi, Klinik</small>
              </h1>
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                  </li>
              </ol>

              <div class="row">
                  <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-home"></i></div>
                          <div class="count">{{$jml = count($rmh_sakit)}}
                          </div>
                          <h3>Rumah Sakit</h3>
                          <p>Jumlah rumah sakit yang tersedia.</p>
                          
                      </div>
                  </div>

                  <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-user"></i></div>
                          <div class="count">
                           {{$jml_peg = count($pegawai)}}
                          </div>
                          <h3>Petugas</h3>
                          <p>Jumlah pegawai yang ada di seluruh rumah sakit</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Rumah Sakit</h3>
                        </div>
                        <div class="panel-body">
                         
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Deskripsi</th>
                                <th>Kecamatan</th>
                              </tr>
                            </thead>
                        
                          <tbody>
                            @if ($rmh_sakit->isEmpty())
                              <tr>
                                <td colspan="5">Data tidak ada</td>
                              </tr>
                                
                              @endif
                            @foreach ($rmh_sakit as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nm_rmh_sakit}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>@foreach ($kecamatan as $kec)
                                  @if($kec->id == $item->id_kecamatan)
                                    {{$kec->nm_kec}} 
                                  @endif
                              @endforeach</td>
                            </tr>
                              @if ($loop->iteration == 3)
                                  @break
                              @else
                                  
                              @endif
                            @endforeach
                            <tr>
                              <td colspan="5">...</td>
                            </tr>
                          </tbody>
                          </table>
                            <div class="text-right">
                                <a href="/rumahsakit">Lanjutkan Lihat Data Rumah Sakit &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-6">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title">Data Petugas</h3>
                          </div>
                          <div class="panel-body">
                            <table class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Username</th>
                                  <th>Rumah Sakit</th>
                                </tr>
                              </thead>
                          
                            <tbody>
                              @if ($rmh_sakit->isEmpty())
                                <tr>
                                  <td colspan="5">Data tidak ada</td>
                                </tr>
                                  
                                @endif
                              @foreach ($pegawai as $item)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$item->nama}}</td>
                                  <td>{{$item->username}}</td>
                                  <td>@foreach ($rmh_sakit as $r)
                                    @if($r->id == 1)
                                      {{$r->nm_rmh_sakit}} 
                                    @endif
                                    {{-- @php
                                        dd($rmh)
                                    @endphp --}}
                                @endforeach</td>
                              </tr>
                                @if ($loop->iteration == 3)
                                    @break
                                @else
                                    
                                @endif
                              @endforeach
                              <tr>
                                <td colspan="5">...</td>
                              </tr>
                            </tbody>
                            </table>
                              <div class="text-right">
                                  <a href="/petugas">Lihat Data Petugas &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                              </div>


     </div>
  </div>
</div> 
    
@endsection