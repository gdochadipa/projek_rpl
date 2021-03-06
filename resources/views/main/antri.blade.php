@extends('layout.app')
@section('nama')

<?php 
$pasien = $request->session()->get('pasien');
?>
{{ $pasien[0]->nama }}
	
@endsection

@section('kontent')

 <!-- NProgress -->
    <link href="assets/js/nprogress/nprogress.css" rel="stylesheet">

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
                    <h2>Booking Antrian </h2>
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

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cari <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="search" required="required" class="form-control col-md-7 col-xs-12">
                            </div>

                          </div>
                        </form>

                        <div class="row">
                          <div class="col-lg-12">
                             <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Nama Rumah Sakit</th>
                                <th>Alamat</th>
                                <th>Jumlah Antrian</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                           
                          <tbody>

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

    <script >
     $(document).ready(function () {
       fetch_customer_data();

       function fetch_customer_data(query='') {
         $.ajax({
          url:"{{route('antri.action')}}",
          method:'GET',
          data:{query:query},
          dataType:'json',
          success:function(data){
            $('tbody').html(data.table_data);
            
          }
         });
       }

       $(document).on('keyup','#search',function () {
         var query = $(this).val();
         fetch_customer_data(query);
       })
     });
    </script>
@endsection