@extends('includes.main')
@push('title')
<title>All Orders</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link" style="font-size: 20px; font-weight: bold;"> <i class="nav-icon fas fa-home"></i> Store Orders</a>
</li>
@endpush
@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Tracking ID</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Tracking ID</a>
                                        <a class="dropdown-item" href="#">Client Order ID</a>
                                        <a class="dropdown-item" href="#">Customer Name</a>
                                        <a class="dropdown-item" href="#">Customer Phone</a>
                                        <a class="dropdown-item" href="#">Customer Pincode</a>
                                        <a class="dropdown-item" href="#">Product</a>
                                        <a class="dropdown-item" href="#">SKU</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Order Type
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">All</a>
                                  <a class="dropdown-item" href="#">Pre-paid</a>
                                  <a class="dropdown-item" href="#">COD</a>
                                  <a class="dropdown-item" href="#">Reverse</a>
                                  <a class="dropdown-item" href="#">Reverse Qc</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                    <table>
                        <tr>
                            <th>TRACKING DETAILS</th>
                            <th>ORDER DETAILS</th>
                            <th>STATUS</th>
                            <th>DIMENSIONAL WEIGHT(CM/KG)</th>
                            <th>ORDER AMOUNT (₹)</th>
                            <th>ADDRESS DEATAILS</th>
                            <th>ACTIONS</th>
                        </tr>
                    </table>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
