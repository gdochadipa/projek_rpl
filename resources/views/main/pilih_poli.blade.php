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
                    <h2>Pilih Poli </h2>
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


                    <!-- Smart Wizard -->
                    <div id="wizard" class="">
                     
                      <div id="step-1">
                      <div class="row">
                          <div class="col-lg-12">

                            <form class="form-horizontal ">

                          
                        </form>

                        <div class="row">
                          <div class="col-lg-12">
                             <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Nama Poli</th>
                                <th>Jumlah Antrian</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                           
                          <tbody>
                            @foreach ($poli as $item)
                                <tr>
                                <td>{{$item->nama_poli}}</td>
                                <td></td>
                                <td><a href="/poli/{{$item->id}}" class="buttonNext btn btn-success">Next</a></td>
                                </tr>
                            @endforeach
                          </tbody>
                          </table>
                          </div>
                        </div>

                          </div>
                        </div>

                    </div>
                    <!-- End SmartWizard Content -->

                  </div>
                </div>
              </div>
            </div>
          
                   
              </div>
                     

     </div>
  </div>
</div> 



    <!-- FastClick -->
    <script src="assets/js/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/js/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    {{-- <script src="assets/js/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script> --}}

   
@endsection