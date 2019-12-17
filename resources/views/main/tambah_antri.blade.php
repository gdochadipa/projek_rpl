@extends('layout.antri_app')
@section('nama')

<?php 
$pasien = $request->session()->get('pasien');
?>
{{ $pasien[0]->nama }}
	
@endsection

@section('kontent')

 <!-- NProgress -->
<link href="{{URL::asset('../assets/js/nprogress/nprogress.css')}}" rel="stylesheet">

<div class="right_col" role="main">

  <div class="container-fluid">
     <div class="col-lg-12">

         <div class="col-lg-12">
              <h1 class="page-header">
                  Booking Antrian 
              </h1>
             

           <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mengambil Antrian <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate method="post" action="/" class="form-horizontal form-label-left">
                      @csrf
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Rumah Sakit</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                        <input id="middle-name" disabled class="form-control col-md-7 col-xs-12" type="text" value="{{$data[0]->nm_rmh_sakit}}" >
                        <input type="text" name="id_rm_sakit" hidden value="{{$data[0]->id_rm_sakit}}" >
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Poli<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" class=" form-control col-md-7  col-xs-12" value="{{$data[0]->nama_poli}}" disabled type="text">
                        <input type="text" name="id_poli" value="{{$data[0]->id}}" hidden>
                        </div>
                      </div>
                      

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Pembayaran<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" class="form-control" required>
                            <option value="" disabled> Pilih...</option>
                            <?php
                             $js_pembayaran = DB::select('select * from js_pembayarans');   
                            ?>

                            @foreach ($js_pembayaran as $item)
                             <option value="{{$item->id}}">{{$item->nm_pembayaran}} </option>
                            @endforeach
                          
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pembayaran <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" class="date-picker form-control col-md-7  col-xs-12" value="{{$data[0]->harga_periksa}}" name="harga_periksa" disabled type="text">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
					            	  
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
</div> 



    <!-- FastClick -->
    <script src="../assets/js/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../assets/js/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    {{-- <script src="assets/js/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script> --}}

   
@endsection