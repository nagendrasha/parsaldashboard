@extends('includes.main')
@push('title')
<title>Dashboard</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link text-light" style="font-size: 20px; font-weight: bold;"> <i
            class="nav-icon fas fa-wallet"></i> Wallet</a>
</li>
@endpush
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
        table tr th {
            padding-left: 50px;
            font-size: 14px;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
                <li class="nav-item count-item active">
                    <a class="nav-link count-link" href="/wallet-overview">RECHARGE</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/revenue">DEDUCATION HISTORY</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link " href="/orderstatus">TRANSITION HISTORY</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="conatiner-fluid">
        <div class="row">
            <div class="col-lg-5 ml-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Tracking ID</button>
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
            <div class="col-lg-3">
                <form class="form-inline my-2 my-lg-0 " style="flex-direction: column;display: flex; color: black;">
                    <a href="#"><button type="button" class="btn btn-outline-secondary">3/7/2023 - 4/3/2023
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg></button>
                    </a>
                </form>

            </div>

            <div class="col-lg-3">
                <h4>Current Credit :0.00</h4>
                <a href="#" class="btn ml-5" style="background-color:  #FC6A03; color: white;">Download</a>
            </div>
        </div>

    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="container">
                                <table>
                                    <tr>
                                        <th>DATE</th>
                                        <th>ORDER ID</th>
                                        <th>TRACKING ID</th>
                                        <th>CLIENT ORDER ID</th>
                                        <th>CREDIT</th>
                                        <th>DEBIT</th>
                                        <th>USABLE BALANCE</th>
                                        <th>REMARK</th>
                                    </tr>
                                </table>
                                <hr>
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
<!-- /.content-wrapper -->

@endsection
