 <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Hi.Klinik</title>

      <!-- Bootstrap -->
      <link href="assets/css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="assets/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="assets/css/build/css/custom.min.css" rel="stylesheet">
      <script src="assets/ckeditor/ckeditor.js"></script>
      <script src="assets/css/vendors/jquery/dist/jquery.min.js"></script>
      <script src="assets/js/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->

      <script src="assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

      <!-- Custom Theme Scripts -->
      <script src="assets/css/build/js/custom.min.js"></script>
      <script src="assets/js/jquery.dataTables.js">

      </script>
    </head>

    <body class="nav-md">
      <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <center>
                <a href="index.php" class="site_title"> <img src="../assets/img/admin/SA.png" alt="" /> </a>
              </center>
              </div>

              <div class="clearfix"></div>

              <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">

                </div>
                <div class="profile_info">
                  <span>Welcome, </span>
                  <br>
                  <span></span>

                </div>
              </div>
              <!-- /menu profile quick info -->

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <!-- <h3>General</h3> -->
                  <ul class="nav side-menu">
                  </ul>
                </div>
              </div>
              <!-- /sidebar menu -->
             
    <div class="menu_section active">
                              <h3>General</h3>
                              <ul class="nav side-menu" style="">
                                <li class=""><a href=""><i class="fa fa-home"></i> Dashboard</a>

                                </li>
                                <li class=""><a href=""><i class="fa fa-home"></i> Booking Antrian</a>

                                </li>
                                <li><a href=""><i class="fa fa-desktop"></i> Riwayat Antrian</a>
                                  <ul class="nav child_menu" style="">

                                  </ul>
                                </li>
                                <li><a href=""><i class="fa fa-user"></i> Profile</a>
                                </ul>
                                  <ul class="nav child_menu" style="">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">Other Charts</a></li>
                                  </ul>
                                </li>
                                  <ul class="nav child_menu" style="">
                                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                  </ul>
                                </li>
                              </ul>

                            </div>

              <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small">
                
              </div>
              <!-- /menu footer buttons -->
            </div>
          </div>

          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">

                      <li><a href="../function/action/administrator/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                  </li>

                </ul>
              </nav>
            </div>
          </div>
          <!-- /top navigation -->

          <!-- page content -->
@yield('kontent')

          <!-- /page contentf -->

          <!-- footer content -->
          <!-- /footer content -->
        </div>
      </div>

      <!-- jQuery -->
      



    </body>
  </html>