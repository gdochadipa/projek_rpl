@extends('layout.app')

@section('konten')
<style media="screen">
  @media only screen and (min-width: 992px)   {
    #list-menu-act{
      background: #25A3DD !important;
    }
  }
  #list-menu-act{
    background: #25A3DD !important;
  }
  #list-menu-act > a,
  #list-menu-act > a > i{
    color: #ffffff !important;
  }
</style>
<div class="content-tab">
  <div class="container">
   <ul class="collapsible" data-collapsible="accordion">
      <li>
        <div class="collapsible-header">
          <i class="fa fa-search"></i>
          Cari Rumah Sakit
           <input type="text" name="_activity" id="_activity" class="validate"required=""   >
        </div>

        <div class="collapsible-body">
          <div class="row">
          


            <div class="row" >
                <div class="col s12 m6">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="materialize2/img/images.jpg">
                      </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Rumah Sakit Udayana<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Ambil Antrian</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Rumah Sakit Udayana<i class="material-icons right">close</i></span>
                </div>
                </div>
            </div>

            <div class="col s12 m6">
            <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="materialize2/img/sanglah.jpg">
                   </div>
             <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Rumah Sakit Sanglah<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ambil Antrian</a></p>
             </div>
             <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Rumah Sakit Sanglah<i class="material-icons right">close</i></span>
            </div>
            </div>
            </div>

            <div class="col s12 m6">
            <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="materialize2/img/wang.jpg">
                   </div>
             <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Rumah Sakit Wangaya<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ambil Antrian</a></p>
             </div>
             <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Rumah Sakit Wangaya<i class="material-icons right">close</i></span>
            </div>
            </div>
            </div>
          
          </div>
        </div>
      </div>
      </li>

   </ul>
  </div>
</div>    

@endsection