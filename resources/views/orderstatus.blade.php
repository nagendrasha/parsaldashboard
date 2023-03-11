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
    .datepick label {
            font-size: 14px;

        }
  </style>

<div class="content-wrapper">
   
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
    <div class="row text-center border-0 bg-light">  
    </div>
    <div class="row">
        <div class="col-sm m-2" style="padding: 0rem 1.1rem;" >
          <div class="card">
            <div class="card-body d-flex justify-content-between text-center ">
                <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                    <span><p style="font-size:1.1rem; ">Total Revenue</p></span>
                    <p  style="font-size:1.3rem; color:blue; font-weight:bold; ">0</p>
                    <button type="button" class="btn btn-primary " style="border-radius: 35%;">0 % </button>
                </div>
                <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                    <span><p style="font-size:1.1rem; ">Not Picked</p></span>
                    <p  style="font-size:1.3rem; color:blue; font-weight:bold; ">0</p>
                    <button type="button" class="btn btn-primary " style="border-radius: 35%;">0 % </button>
                </div>
                <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                    <span><p style="font-size:1.1rem; ">Live</p></span>
                    <p  style="font-size:1.3rem; color:blue; font-weight:bold; ">0</p>
                    <button type="button" class="btn btn-primary " style="border-radius: 35%;">0 % </button>
                </div>
                <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                    <span><p style="font-size:1.1rem; ">Delivered </p></span>
                    <p  style="font-size:1.3rem; color:blue; font-weight:bold; ">0</p>
                    <button type="button" class="btn btn-primary " style="border-radius: 35%;">0 % </button>
                </div>
                <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                    <span><p style="font-size:1.1rem; ">RTO</p></span>
                    <p  style="font-size:1.3rem; color:blue; font-weight:bold; ">0</p>
                    <button type="button" class="btn btn-primary " style="border-radius: 35%;">0 % </button>
                </div>
                <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                    <span><p style="font-size:1.1rem; ">RTD</p></span>
                    <p  style="font-size:1.3rem; color:blue; font-weight:bold; ">0</p>
                    <button type="button" class="btn btn-primary " style="border-radius: 35%;">0 % </button>
                </div>
                <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                    <span><p style="font-size:1.1rem;  ">Cancelled</p></span>
                    <p  style="font-size:1.3rem; color:blue; font-weight:bold; ">0</p>
                    <button type="button" class="btn btn-primary " style="border-radius: 35%;">0 % </button>

                </div>
                <div class="col-lg ">
                  <span><p style="font-size:1.1rem;  ">Lost</p></span>
                  <p  style="font-size:1.3rem; color:blue; font-weight:bold; ">0</p>
                  <button type="button" class="btn btn-primary " style="border-radius: 35%;">0 % </button>

              </div>          
              </div>
          </div>
        </div>
        
      </div>

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
                          <li class="nav-item  active" >
                            <a class="nav-link  " style="color: darkblue; font-size: 1.3rem;">Order Dispatch Pending </a>
                          </li>

                        </ul>
                      </div>
                    </nav>
                  </div>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <img src="/img/order.png" alt="" width="30%">
                        <h3 style="color:darkblue; font-weight: bold;">
                          Product RTO Report
                        </h3>
                        <p class="my-3">
                          Here you can see the daily total vs pending orders
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
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title text-primary text-bold">
                      <img src="/img/20230213_142725.png" alt="" width="10%">
                      High RTO Products &nbsp;
                      
                    </h3>
                  </div>

                  <div class="card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12 text-center " >
                          <img src="#" alt="" width="70% " >
                          <img src="/img/rto report.png" alt="" width="75%">
                        <h3 style="color:darkblue; font-weight: bold;">Order Dispatch Pending </h3>
                        <p class="my-3">
                          Here you can see the daily total vs pending orders
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

                </div>

              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title text-primary text-bold">
                      High RTO Cities & States
                    </h3>
                  </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav opacity-75 border w-100  " >
                      <li class="nav-item count-item active" >
                        <p class="nav-link count-link text-primary"  >Area</p>
                      </li>
                      <li class="nav-item count-item" >
                        <p class="nav-link count-link text-primary"  >RTO Total orders</p>
                      </li>
                      <li class="nav-item count-item" >
                        <p class="nav-link count-link text-primary"  >RTO%</p>
                      </li>

                    </ul>
                  </div>
                </nav>
                <div class="card-body" style="margin: -1.7rem rem;">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-7 text-center opacity-75 border ">
                        <img src="/img/Performance.jpg" alt="" width="30%" class="text-left">
                        <h3>High Order Volume Cities & States </h3>
                        <p>Here you will be able to see top cities from where the maximum orders are coming.</p>
                        <button type="button" class="btn btn-outline-primary text-center " style="border-radius: 25%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                        </svg> &nbsp; &nbsp; See How to work </button>
                      </div>
                      <div class="col-lg-5">
                        <img src="/img/Map-of-India-including-boundaries-of-states-The-Saurashtra-cultural-area-is-located-in-removebg-preview.png" alt="" class="float-right" width="250px" height="350px">
                        <button  class="btn btn-primary btn-lg btn-block" style="  background-image: linear-gradient(to right, skyblue, rgb(94, 194, 234), blue, indigo, rgb(243, 40, 50));
                        "></button>

                      </div>

                    </div>
                  </div>
                  <!-- /.d-flex -->
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-4">
              
            </div>
            <!-- /.col-md-6 -->
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>

</div>


<!-- /.content-wrapper -->

@endsection
