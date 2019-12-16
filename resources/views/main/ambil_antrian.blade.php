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
                    <h2>Ambil Antrian </h2>
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
                     
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <div id="wizard" class="">
                     
                      

                 <div class="row">
                  <div class="animated flipInY col-lg-6 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-home"></i></div>
                          <div class="count">0
                          </div>
                          <h3>Antrian hari ini </h3>
                          <p>Jumlah antrian secara langsung</p>
                          
                      </div>
                  </div>

                  <div class="animated flipInY col-lg-6 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-user"></i></div>
                          <div class="count">
                           0
                          </div>
                          <h3>Antrian yang sudah dipanggil</h3>
                          <p> jumlah pasien yang sudah di pangil hari ini</p>
                      </div>
                  </div>

                  
              </div>

              <div class="row">
                <div class="col-lg-12">

                <a href="/ambil/{{$request->id}}" class="btn btn-round btn-primary" style="width:100%; margin-bottom:40px;">Ambil Antrian</a>
                      
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
    <script src="../assets/js/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../assets/js/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    {{-- <script src="assets/js/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script> --}}

   
@endsection