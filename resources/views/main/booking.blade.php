@extends('layout.app')

@section('kontent')

<div class="right_col" role="main">

  <div class="container-fluid">
     <div class="col-lg-12">

         <div class="col-lg-12">
              <h1 class="page-header">
                  Booking Antrian <small>Hi, Klinik</small>
              </h1>
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                  </li>
              </ol>

              <div class="row">
                  <div class="animated flipInY col-lg-6 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-home"></i></div>
                          <div class="count">0
                          </div>
                          <h3>Jumlah Rumah sakit </h3>
                          <p>Jumlah Rumah Sakit mitra kami</p>
                          
                      </div>
                  </div>

                  <div class="animated flipInY col-lg-6 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-user"></i></div>
                          <div class="count">
                           0
                          </div>
                          <h3>Total Antrian Hari ini</h3>
                          <p>Total Antrian dari seluruh rumah sakit</p>
                      </div>
                  </div>

                  
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Antrian hari ini</h3>
                        </div>
                        <div class="panel-body">
                         <a href="/antri" class="btn btn-round btn-primary" style="width:100%; margin-bottom:40px;">Ambil Antrian</a>
                           <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Nomor Antrian</th>
                                <th>Rumah Sakit</th>
                                <th>Poli</th>
                                <th>Status</th>
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