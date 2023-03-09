@extends('includes.main')

@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
        table tr th{
            padding-left: 20px;
            font-size: 14px;
        }
      </style>
      <!-- Content Header (Page header) -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
                        <li class="nav-item count-item active">
                            <a class="nav-link count-link" href="#">SEARCH</a>
                        </li>
                        <li class="nav-item count-item">
                            <a class="nav-link count-link" href="#">NOT PICKED</a>
                        </li>
                        <li class="nav-item count-item">
                            <a class="nav-link count-link" href="#">QC FAILED</a>
                        </li>
                        <li class="nav-item count-item">
                            <a class="nav-link count-link" href="#">LIVE</a>
                        </li>
                        <li class="nav-item count-item">
                            <a class="nav-link count-link" href="#">DELIVERED</a>
                        </li>
                        <li class="nav-item count-item">
                            <a class="nav-link count-link" href="#">RETURNED</a>
                        </li>
                        <li class="nav-item count-item">
                            <a class="nav-link count-link" href="#">LOST/DAMAGED</a>
                        </li>
                        <li class="nav-item count-item">
                            <a class="nav-link count-link" href="#">CANCELLED</a>
                        </li>
                        <li class="nav-item count-item">
                            <a class="nav-link count-link" href="#">ERROR SHIPMENT</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /.content-header -->

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