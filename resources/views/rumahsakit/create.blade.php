@extends('rumahsakit.app')

@section('kontent')

<div class="right_col" role="main">

  <div class="container-fluid">
     <div class="col-lg-12">

         <div class="col-lg-12">
              <h1 class="page-header">
                  Daftar Rumah Sakit<small> Hi, Klinik</small>
              </h1>
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                  </li>
              </ol>

              <div class="row">
                  <div class="animated flipInY col-lg-12 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                      <div class="icon"><i class="fa fa-home"></i></div>
                          <div class="count">{{$jml = count($rmh_sakit)}}
                          </div>
                          <h3>Rumah Sakit</h3>
                          <p>Jumlah rumah sakit yang tersedia.</p> 
                          <p><a href="htpps://google.com">Hai</a></p>
                      </div>
                  </div>
              
              <div class="row">
                <div class="col-lg-12">
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
                                <th>Keterangan</th>
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
                                <td>{{$item->id_kecamatan}}</td>
                                <td>
                                  <span>
                                    <input type="button" value="Edit" onclick="location.href='/rumahsakit/{{$item->id}}/edit'" class="btn btn-primary col-sm-4">
                                    <form style="display:inline-block;" action="/rumahsakit/{{$item->id}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                  </span>
                                </td>
                            </tr> 
                            @endforeach
                          </tbody>
                          </table>
                        </div>
                    </div>
                </div>
    
@endsection