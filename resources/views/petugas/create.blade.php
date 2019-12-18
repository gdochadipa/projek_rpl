@extends('petugas.app')

@section('kontent')

<div class="right_col" role="main">

  <div class="container-fluid">
     <div class="col-lg-12">

         <div class="col-lg-12">
              <h1 class="page-header">
                  Daftar Petugas<small> Hi, Klinik</small>
              </h1>
              
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tambah Data Petugas</h3>
                        </div>
                        <div class="panel-body">
                         
                            
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel">
                                    
                                    <div class="x_content">
                                      <br />
                                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/petugas" method="POST">
                                        @csrf
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Petugas <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama" placeholder="nama petugas">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="username" required="required" class="form-control col-md-7 col-xs-12" placeholder="username">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" id="last-name" name="password" required="required" class="form-control col-md-7 col-xs-12" placeholder="password">
                                          </div>
                                        </div>
                                
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Rumah Sakit <span class="required">*</span></label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select class="form-control" required="required" name="id_rmh_sakit">
                                                <option value="">Select Rumah Sakit</option>
                                                  @foreach ($rmh_sakit as $item)
                                              <option value="{{$item->id}}">{{$item->nm_rmh_sakit}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                        <div class="form-group"></div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <a href="/petugas"><button class="btn btn-primary" type="button">Cancel</button></a>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                          </div>
                                        </div>
                  
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
    
@endsection