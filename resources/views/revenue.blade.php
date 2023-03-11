@extends('includes.main')

@push('title')
<title>dashboard</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link" style="font-size: 20px; font-weight: bold;"> <i class="nav-icon fas fa-home"></i> dashboard</a>
</li>
@endpush

@section('main-section')
<!-- Content Wrapper. Contains page content -->

  <style>
    .navbar .navbar-nav .nav-link {
      color: #000000;
      font-size: 1.1rem;
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
              <a class="nav-link count-link " href="/orderstatus">Order Status</a>
            </li>
          </ul>
          <form action="#" class="datepick">
                <label for="placed-date">Placed Date</label>
                <input type="date" id="placedate" name="date">
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
                            <a class="nav-link count-link  text-bold" style="font-size: 1.3rem; color: darkblue; " >Revenue Report
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
                            <a class="nav-link count-link  text-bold" style="font-size: 1.3rem; color: darkblue;">
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
@endsection