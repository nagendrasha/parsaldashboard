@extends('includes.main')
@push('title')
<title>Home</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link" style="font-size: 20px; font-weight: bold;"> <i class="nav-icon fas fa-home"></i> Home</a>
</li>
@endpush
@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Main content -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <h3 class="text-primary">Start shipping today with 2 simple steps!</h3>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title text-primary text-bold">1. KYC Verification</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <img src="/dist/img/kyc.svg" alt="">
                      </div>
                      <div class="col-lg-6">
                        <img src="/dist/img/load.svg" alt="" class="float-right">
                      </div>
                    </div>
                    <p class="my-3">It takes only 30 secs to complete
                    </p>
                    <a href="#">complete KYC</a>
                  </div>
                  <!-- /.d-flex -->
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title text-primary text-bold">2. Place your first order</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="/dist/img/porder.svg" alt="">
                    </div>
                    <div class="col-lg-6">
                      <img src="/dist/img/load.svg" alt="" class="float-right">
                    </div>
                  </div>
                  <p class="my-3">Create order with just 3 steps
                  </p>
                  <div class="row">
                    <div class="col-lg-5">
                      <a href="#">Create Manual Order</a>
                    </div>
                    <div class="col-lg-2">
                      <p>Or</p>
                    </div>
                    <div class="col-lg-5">
                      <a href="#">Sync Order</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title text-primary text-bold">Parsal Advantage
                    </h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-7">
                        <p>We are offering hassle free auto courier selection for all your orders.</p>
                        <ol>
                          <li>Auto courier allocation</li>
                          <li>Improved delivery performance</li>
                          <li>Flat shipping rate</li>
                        </ol>
                        <p>Raise a ticket on chat support to activate</p>
                      </div>
                      <div class="col-lg-5">
                        <img src="/img/pic.png" alt="" class="float-right" width="200px" height="150px">
                      </div>
                    </div>
                  </div>
                  <!-- /.d-flex -->
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title text-primary text-bold">Know Your Dashboard</h3>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-7">
                      <p>See step by step guide of how dashboard works</p>
                      <a href="#" class="btn btn-light">Take Our Prooducts Tour</a>
                      <p style="margin-left: 100px;">or</p>
                      <a href="#">View Dashboard Guide</a>
                    </div>
                    <div class="col-lg-5">
                      <img src="/img/1638285465573_know-your-dashboard.svg" alt="" class="float-right" width="200px" height="150px">
                    </div>
                  </div>
                  <hr>
                  <div class="container">
                    <div class="row">
                    <div class="col-lg-7">
                      <a href="#" style="font-size: 14px;">Book your slot, take Dashboard Training</a>
                    </div>
                    <div class="col-lg-5">
                      <a href="#" class="btn btn-danger">Book Training Slot</a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
