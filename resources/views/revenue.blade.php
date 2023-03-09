<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboardparsal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <style>
    .navbar .navbar-nav .nav-link {
      color: #000000;
      font-size: 1.1em;
    }

    .count .count-nav #count-link:hover {
      color: #000000;
    }

    .count .count-nav .count-item {
      position: relative;
    }

    .count .count-nav .count-item::after {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      background-color: #000000;
      width: 0%;
      content: "";
      height: 4px;
      transition: all 0.5s;
    }

    .count .count-nav .count-item:hover::after {
      width: 100%;
    }
  </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light  ">
      <!-- Left navbar links -->
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/" class="nav-link" style="font-size: 20px; font-weight: bold;"> <i
              class="nav-icon fas fa-home"></i> Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link border border-primary rounded">+ Create</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboardparsal</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Altaf Khan</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        @include('includes.sidebarmenu')

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
            <li class="nav-item count-item active" >
              <a class="nav-link count-link"  href="/dashboard">Performance Overview</a>
            </li>
            <li class="nav-item count-item" >
              <a class="nav-link count-link"  href="/revenue">Revenue</a>
            </li>
            <li class="nav-item count-item" >
              <a class="nav-link count-link " >Order Status</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 " style="flex-direction: column;display: flex; color: black;">
            <h5>Placed Date</h5>
            <a href="#"><button type="button" class="btn btn-outline-secondary">3/7/2023 - 4/3/2023
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-calendar" viewBox="0 0 16 16">
                  <path
                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                </svg></button>
            </a>
          </form>
        </div>
      </nav>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

            
              


          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
                          <li class="nav-item count-item active" >
                            <a class="nav-link count-link  text-bold" style="font-size: 1.3rem; color: darkblue; "  href="/dashboard">Revenue Report
                            </a>
                          </li>
                        </ul>
                      </div>
                      
                    </nav>
                    
                  </div>
                  <div class="row">
                    <div class="col-4 text-center " style="border-right: 1px solid #a8a1a1;">
                     <span >Total Revenue</span>  <br>
                     <span class="text-primary " style="font-size: 1.2rem; font-weight: bold;"> ₹ 0 </span>
                    </div>
                    <div class="col-4 text-center " style="border-right: 1px solid #a8a1a1;">
                      <span> COD revenue </span> <br>
                      <span class="text-primary " style="font-size: 1.2rem; font-weight: bold;"> ₹ 0 </span>

                    </div>
                    <div class="col-4 text-center " >
                      <span> Pre-Paid revenue </span> <br>
                      <span class="text-primary " style="font-size: 1.2rem; font-weight: bold;"> ₹ 0 </span>

                    </div>
                  </div>
                </div>

                
              </div>
              <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body" style="margin: -1.7rem rem;">
                  <div class="container">
                  <div class="d-flex justify-content-between">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
                          <li class="nav-item count-item active" >
                            <a class="nav-link count-link  text-bold" style="font-size: 1.3rem; color: darkblue; "  href="/dashboard">
                            COD vs Prepaid Revenue </a>
                          </li>
                        </ul>
                      </div>
                      
                    </nav>
                    
                  </div>

                    <div class="row">
                      <div class="col-lg-12 text-center opacity-75  ">
                        <img src="/img/ss.png" alt="" class="text-left" width="20%">
                        <h3 style="font-size: 1.3rem; color: darkblue; font-weight: bold; ">Revenue Report</h3>
                        <p>Here you will see total revenue of the delivered orders in last 7 days and split by cod vs Prepaid</p>
                        <button type="button" class="btn btn-outline-primary text-center " style="border-radius: 25%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                        </svg> &nbsp; &nbsp; See How to work </button>
                      </div>
                    </div>
                  </div>
                  <!-- /.d-flex -->



                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            
            <!-- /.col-md-6 -->
          </div>
            </div>
            
            <!-- /.col-md-6 -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title text-primary text-bold">
                      <img src="./img/20230213_142725.png" alt="" width="10%">
                      Top 5 Location's Revenue  &nbsp;
                    </h3>
                  </div>

                  <div class="card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12 text-center">
                          <img src="./img/location.png" alt="" width="57% "  >
                          <p  style="font-size: 1.3rem; color: darkblue; font-weight: bold; ">Top 5 High Revenue Generating Cities   </p>

                          <p>Here you will see total revenue of the delivered orders in last 7 days and split by cod vs Prepaid</p>
                          <button type="button" class="btn btn-outline-primary text-center " style="border-radius: 25%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                          </svg> &nbsp; &nbsp; See How to work </button>


                        </div>
                      </div>

                    </div>
                    <!-- /.d-flex -->
                  </div>

                </div>

              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->

          
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <div class="card-body">
      <div class="container bg-light">
        <div class="row ">
          <div class="col-lg text-center">
            <img src="./img/responsive.png" alt="" width="30%">
            <h3 style="font-size: 1.3rem; color: darkblue; font-weight: bold;">
              Best Selling SKUs
            </h3>
            <p class="my-3">
              Here you will see revenue from top SKUs and their ordered quantities.
            </p>
            <a href="#">
              <button type="button" class="btn btn-outline-primary " style="border-radius: 25%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
              </svg> &nbsp; &nbsp; See How to work </button>
            </a>
          </div>
        </div>
      </div>
      <!-- /.d-flex -->
    </div>
    

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer text-center">
      <strong>Copyright &copy; 2022 <a href="https://adminlte.io">dashboard.parsal.in</a>.</strong>
      All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>
