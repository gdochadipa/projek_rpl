@extends('rumahsakit.app')

@section('kontent')

<div class="right_col" role="main">

  <div class="container-fluid">
     <div class="col-lg-12">

         <div class="col-lg-12">
              <h1 class="page-header">
                  Daftar Rumah Sakit<small> Hi, Klinik</small>
              </h1>
              
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tambah Data Rumah Sakit</h3>
                        </div>
                        <div class="panel-body">
                         
                            
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="x_panel">
                                    
                                    <div class="x_content">
                                      <br />
                                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/rumahsakit" method="POST">
                                        @csrf
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Rumah Sakit <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nm_rmh_sakit" placeholder="nama rumah sakit">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="alamat" required="required" class="form-control col-md-7 col-xs-12" placeholder="alamat">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <textarea name="deskripsi"  class="form-control" rows="3" placeholder="deskripsi" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Provinsi <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select class="form-control" required="required">
                                                <option value="">Select Provinsi</option>
                                                  @foreach ($provinsi as $prov)
                                              <option value="{{$prov->id}}">{{$prov->nm_prov}}</option>
                                                  @endforeach
                                              </select>
                                            </div>
                                        <div class="form-group"></div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kabupaten <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" required="required">
                                                  <option value="">Select Kabupaten</option>
                                                    @foreach ($kabupaten as $item)
                                                <option value="{{$item->id}}">{{$item->nm_kab}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        <div class="form-group"></div>
                                        <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan <span class="required">*</span></label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select class="form-control" required="required" name="id_kecamatan">
                                                <option value="">Select Kecamatan</option>
                                                  @foreach ($kecamatan as $item)
                                              <option value="{{$item->id}}">{{$item->nm_kec}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                        <div class="form-group"></div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <a href="/rumahsakit"><button class="btn btn-primary" type="button">Cancel</button></a>
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