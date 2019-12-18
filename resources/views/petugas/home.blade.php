@extends('rumahsakit.app')

@section('kontent')

<div class="right_col" role="main">

  <div class="container-fluid">
     <div class="col-lg-12">

         <div class="col-lg-12">
              <h1 class="page-header">
                  Daftar Petugas<small> Hi, Klinik</small>
              </h1>
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                  </li>
              </ol>

              <div class="row">
                  <div class="animated flipInY col-lg-12 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-user"></i></div>
                          <div class="count">{{$jml = count($pegawai)}}
                          </div>
                          <h3>Petugas</h3>
                          <p>Jumlah petugas yang ada di seluruh rumah sakit.</p> 
                          <p><a href="/petugas/create">Tambah Data</a></p>
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
                                <th>Username</th>
                                <th>Rumah SakitS</th>
                                <th>Keterangan</th>
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
                                    @if($r->id == $item->id_rmh_sakit)
                                      {{$r->nm_rmh_sakit}} 
                                    @endif
                                        @endforeach</td>
                                <td>
                                  <span>
                                    <input type="button" value="Edit" onclick="location.href='/petugas/{{$item->id}}/edit'" class="btn btn-primary col-sm-4">
                                    <form style="display:inline-block;" action="/petugas/{{$item->id}}" method="post">
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